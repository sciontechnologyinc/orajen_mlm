<?php

namespace App\Http\Controllers;
use App\Member;
use App\Code;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members.index');
    }

    public function parseJSON($member, $is_admin) {
        $childrens = [];
        $members = $this->getMembers($member->id);
        foreach($members as $mb) {
            array_push($childrens, $mb);
            $this->parseJSON($mb, $is_admin);
        }
        $member['children'] = $childrens;
        if ((!$is_admin) && auth()->user()->id != $member->user_id) {
            $value = false;
        } else {
            $value = true;
        }
        $member['text'] = array(
            "data-id"=>$member->activationcode,
            "id"=>'#'.$member->activationcode,
            "text"=>$member->name,
            "link"=>$member->email,
            "income"=>'P '.$member->income,
            "data-editable"=>$value
        );
        return $member;
    }

    public function getMembers($id) {
        return Member::join('users', 'users.id', '=', 'members.user_id')
        ->where('members.placement_id','=',$id)
        ->get(['users.name', 'users.email', 'members.*']);
    }

    public function display() {
        $user = auth()->user();
        if ($user->admin) { $members = $this->getMembers(0); }
        else { $members = Member::join('users', 'users.id', '=', 'members.user_id')
            ->where([['user_id',$user->id], ['is_main', 1]])
            ->get(['users.name', 'users.email', 'members.*']);
        }
        if (count($members)) return $this->parseJSON($members[0], $user->admin);
        else return [];
    }

    public function view() {
        $users = User::all();
        return view('user.pages.accounts', ['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        return view('members.create',['members' => $members]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $main = auth()->user();
        $member = $request->all();
        $data = $request->validate([
           'firstname' => 'required',
           'middlename' => 'required',
           'lastname' => 'required',
           'address' => 'required',
           'memberemail' => 'required',
           'mobileno' => 'required',
           'sponsorid' => 'required',
           'placementid' => 'required',
           'activationcode' => 'required',
       ]);
       return redirect()->back()->with('success','Added successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $member = Member::where('activationcode', $id)->with('user')->get()[0];
        return $member;
    }

    public function add(Request $request)
    {
        $code = Code::where('code', $request->activationcode)->get();
        if (count($code)) {
            if ($code[0]->is_used) {
                return "Code is used.";
            } else {
                $id = auth()->user()->id;
                $mymember = Member::where([['user_id',$id],['is_main', 1]])->get();
                if (!count($mymember)) {
                    $count = count($this->getMembers($id));
                    $sponsor = Member::where([['user_id',$request->sponsorid],['is_main', 1]])->get();
                    if(!count($sponsor)) return 'Sponsor has no main.';
                    $new_member = new Member();
                    $new_member->user_id = $id;
                    $new_member->activationcode = $request->activationcode;
                    $new_member->placement_id = $sponsor[0]->id;
                    $new_member->is_main = 1;    
                    $new_member->node_address = $count+1;
    
                    if ($code[0]->type == "Blue" && $count != 0) 
                        return "Blue Code is for only Left node.";
    
                    $user = User::find($id);
                    $user->sponsor_id = $request->sponsorid;
                    $user->save();
                    $new_member->save();
                    $code[0]->is_used = 1;
                    $code[0]->save();
                    return $request;
                } else {
                    $member = $this->get($request->code);
                    $member->user->name = $request->name;
                    $count = count($this->getMembers($member->id));
                    
                    if ($code[0]->type == "Green" && $count != 0) return "Green Code is for Left Node only.";
                    if($count >= 2) return "You can only put same account in 1 and 2 Nodes.";
                    $new_member = new Member();
                    $new_member->user_id = $member->user_id;
                    $new_member->activationcode = $request->activationcode;
                    $new_member->placement_id = $member->id;
                    $new_member->node_address = $count+1;
                }
                    $new_member->save();
                    $code[0]->is_used = 1;
                    $code[0]->save();
                    return $request;
            }
        } else {
            return "Code is not exist.";
        }

    }

    public function edit(Request $request)
    {
        $member = $this->get($request->code);
        $member->user->name = $request->name;
        $member->income = $request->income;
        $member->direct_referral = $request->direct_referral;
        $member->global_pool = $request->global_pool;
        $member->pass_up = $request->pass_up;
        $member->product_voucher = $request->product_voucher;
        $member->user->save();
        $member->save();
        return $request;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $data = $request->all();
        $member->update($data);

        return redirect('/members')->with('success','Updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
	    $member->destroy($id);

	    return redirect()->back()->with('success','Deleted successfuly');
    }
}

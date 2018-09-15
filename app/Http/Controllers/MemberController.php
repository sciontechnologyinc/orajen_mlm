<?php

namespace App\Http\Controllers;
use App\Member;
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
        $members = Member::orderBy('id')->get();
        return view('members.index', ['members' => $members]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = auth()->user()->id;
        $members = Member::where('user_id', '=', $user_id)->get();
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
           'email' => 'required',
           'mobileno' => 'required',
           'sponsorid' => 'required',
           'placementid' => 'required',
           'activationcode' => 'required',
       ]);

       if ($request->sponsorid != "main") {  
            $ismain = true;      
            $member = Member::find($request->sponsorid);
            $sponsorid = $member->id;
            $nodeaddress = $member->node_address.'.'.$request->sponsorid;
       } else {
            $ismain = false;
            $sponsorid = $main->id;
            $nodeaddress = $main->id;
       }

       $data['sponsorid'] = $sponsorid;
       $data['node_address'] = $nodeaddress;
       $data['user_id'] = $main->id;
       Member::create($data);

       $this->checkIfQualified($sponsorid);
       $this->packageIncome($main, $sponsorid, $ismain);
       $this->infinityPassUp($main, $sponsorid, $ismain);
       return redirect()->back()->with('success','Added successfuly');
    }

    public function checkIfQualified($sponsorid) {
       $upline = Member::find($sponsorid);
       $downline = Member::where("sponsorid", $sponsorid)->get();
       if ($upline !== NULL && count($downline) > 1) {
        $upline->qualified = 1;
        $upline->save();
       }
    }

    public function packageIncome($main, $sponsorid, $ismain) {
        $main->counter += 1;
        $main->income += 1500;
        $main->save();
        if($ismain) { $this->generateRule1($main, $sponsorid); }
    }

    public function generateRule1($main, $sponsorid) {
        $upline = Member::find($sponsorid);
        if ($upline !== NULL) {
         $main = $upline->user;
         $this->subCaddM($main, $upline, 100);
        }
     }

     public function generateRule2() {
        $main = auth()->user();
        $members = Member::where(['user_id'=> $main->id, 'qualified'=>1])->get();
        $GPincentive = (($main->counter*210)/count($members));
        foreach ($members as $member) {
            $this->subCaddM($main, $member, $GPincentive);
        }

        $main->counter = 0;
        $main->save();
        $members = Member::orderBy('id')->get();
        return redirect('/members')->with('success','Generated successfuly');
     }

     public function infinityPassUp($main, $id, $ismain) {
        if($ismain) {
            $child = Member::find($id);
            $index = count(Member::where(['sponsorid'=> $id])->get());
            if (($index <= 2)) {
                //do nothing
            } else if(($index%5) == 0) {
                $this->addPVoucher($child, 150); 
            } else {
                $this->subCaddM($main, $child, 150);
            }
        }
     }

     public function addPVoucher($m, $value) {
        $m->product_voucher += $value;
        $m->save();
     }

     public function subCaddM($c, $m, $value) {
        $c->income -= $value;
        $c->save();
        $m->income += $value;
        $m->save();
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
    public function edit($id)
    {
        $member = Member::find($id);
        return view('members/edit', ['member' => $member]);
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

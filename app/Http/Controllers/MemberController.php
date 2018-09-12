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
            $member = Member::find($request->sponsorid);
            $sponsorid = $member->id;
            $nodeaddress = $member->node_address.'.'.$request->sponsorid;
       } else {
            $sponsorid = $main->id;
            $nodeaddress = $main->id;
       }

       $data['sponsorid'] = $sponsorid;
       $data['node_address'] = $nodeaddress;
       $data['user_id'] = $main->id;

       Member::create($data);
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

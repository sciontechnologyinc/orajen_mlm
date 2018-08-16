<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MemberList;

class MemberListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MemberList::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $memberlist = new MemberList();

        $memberlist->firstname=$request->input('firstname');
        $memberlist->middlename=$request->input('middlename');
        $memberlist->lastname=$request->input('lastname');
        $memberlist->address=$request->input('address');
        $memberlist->email=$request->input('email');
        $memberlist->mobileno=$request->input('mobileno');
        $memberlist->sponsorid=$request->input('sponsorid');
        $memberlist->placementid=$request->input('placementid');
        $memberlist->activationcode=$request->input('activationcode');

        $memberlist->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

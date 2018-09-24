<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;
use DB;
class UserDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.index');
    }

    public function summary($id)
    {
        $summary = $orders = DB::table('members')
        ->leftJoin('users', 'users.id', '=', 'members.user_id')
        ->selectRaw('sum(members.income) as income,count(user_id) as account,sum(members.product_voucher) as voucher,
                     sum(members.direct_referral) as directreferral,sum(members.pass_up) as passup, sum(members.global_pool) as globalpool')
        ->where('user_id',$id)
        ->get();

        $sponsor = $orders = DB::table('users')
        ->selectRaw('count(sponsor_id) as sponsor, sum(netincome) as netincome,sum(payout) as payout')
        ->where('id',$id)
        ->get();
        return response()->json(['success' => true, 'summary' => $summary, 'sponsor'=>$sponsor]);
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
        //
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

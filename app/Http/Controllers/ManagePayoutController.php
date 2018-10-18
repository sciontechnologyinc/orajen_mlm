<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Payout;
class ManagePayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payouts = Payout::orderBy('id')->get();    
        return view('managepayouts.payoutlist', ['payouts' => $payouts]);
        
    }



    public function getName($name)
    {
        $NameId = User::where("id", $name)->select('name','netincome','payout','gcashnumber')->get();
        return response()->json(['success' => true, 'users' => $NameId]);
    }

    public function updateName($nameid)
    {
        $payouts = Payout::orderBy('id')->get();
        $user = User::where('name', $nameid)->update(request()->all());
        $data = $request->validate([
            'gcashnumber' => 'required',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::orderBy('id')->get();    
        return view('managepayouts.index', ['users' => $users]);
        
    }

    public function add(Request $request)
    {

        $payout = Payout::create(request()->all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $username = User::where("id", $id)->select('netincome','payout')->get();
        return response()->json(['success' => true, 'username' => $username]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payout = Payout::find($id);
        return view('managepayouts/index', ['payout' => $payout]);
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

        $payout = Payout::find($id);
        $data = $request->all();
        $payout->update($data);

        return redirect('/managepayouts');
        // $users = User::orderBy('id')->get();
        // $payouts = Payout::orderBy('id')->get();
        // $income = User::where('id', $id)->update(request()->all());
        // return view('managepayouts.payoutlist',['users' => $users,'payouts' => $payouts]);

        
    }
    public function updateuser($id)
    {
        $users = User::orderBy('id')->get();
        $payouts = Payout::orderBy('id')->get();
        $income = User::where('id', $id)->update(request()->all());
        return view('managepayouts.payoutlist',['users' => $users,'payouts' => $payouts]);
    }

    public function approved($id)
    {
        $payouts = Payout::orderBy('id')->get();
        $payout = Payout::where('id', $id)->update(request()->all());
        return view('managepayouts.payoutlist', ['payouts' => $payouts]);
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

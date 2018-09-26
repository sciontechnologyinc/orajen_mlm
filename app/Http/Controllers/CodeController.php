<?php

namespace App\Http\Controllers;

use App\Code;
use App\Member;
use Illuminate\Http\Request;

class CodeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = Code::all();
        return view('members.gc', ['codes'=>$codes]);
    }

    public function add(Request $request)
    {
        for($var = 1; $var <= (int)$request->count; $var++) {
            $cd = new Code();
            $cd->type = $request->type;
            $cd->code = $this->generateActivationCode($request->type);
            $cd->save();
        }
        $codes = Code::all();
        return redirect('codes');
    }

    public function generateActivationCode($type, $length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $type[0].$randomString;
    }

}

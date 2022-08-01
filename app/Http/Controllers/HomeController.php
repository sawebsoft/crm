<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

use DB;
class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userData = DB::table('users')->where('email','sawebsoft@gmail.com')->first();
        $data['userData2'] = User::where('email','sawebsoft@gmail.com')->first();

        //dd($userData2);
        //return view('home',compact('userData2'));
        return view('home',$data);
    }

    public function stuff_manage(){
        $userData = DB::table('users')->where('email','sawebsoft@gmail.com')->first();
        $data['userData2'] = User::where('email','sawebsoft@gmail.com')->first();
        return view('StuffManage',$data);
    }

    public function stuff_store(Request $request){
        dd($request->all());
    }
}

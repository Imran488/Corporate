<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registration(){
        return view('frontend.pages.user-registration');
    }
    public function login(){
        return view('frontend.pages.user-login');
    }

    public function userregister(Request $request){
        $this->validate($request, [
            'email'=>'required|max:50|unique:users,email',
            'phone'=>'required|max:11|unique:users,phone'
        ]);
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>($request->phone) ,
            'password'=>bcrypt($request->password) ,

        ]);


        return redirect()->route('user.login')->with('message','Registration Succesfull ! Now Login.');
    }



    public function userlogin(Request $request){
        // dd($request->all());
        $userpost = $request->except('_token');
        // dd($userpost);
        //  dd(Auth::attempt($userpost));
        if (Auth::attempt($userpost)) {
            return redirect()->route('home')->with('message','Login Succesfull');
        }
        else
        return redirect()->back()->with('error','Invalid email or password');

    }

}

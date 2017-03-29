<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class UserController extends Controller
{
    //

    public function getLogin(){
        return view('users.login');
    }


    public function postLogin(Request $request){
        $this->validate($request,[
            'email' => 'required|max:255',
            'password' => 'required|min:4',
        ]);

        if(Auth::attempt(['email' => $request->input('email'),'password' => $request->input('password')])) {
            return redirect()->route('welcome');
        }
        return redirect()->back();

    }

    public function getRegister(){

        return view('users.register');
    }

    public function postRegister(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|max:255|unique:users',
            'password' => 'required|min:4',
            'confirmPassword' => 'required|min:4|same:password'
        ]);

        $user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))

        ]);
         $user->save();

        return view('welcome');
    }


    public function getLogout(){
          Auth::logout();
            return redirect()->route('user.login');

    }
}

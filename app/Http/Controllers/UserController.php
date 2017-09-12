<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;

class UserController extends Controller
{
    public function getsignup(){
    	return view('user.signup');
    }

    public function postsignup(Request $request){
    	$this->validate($request,[
           'email'=>'email|required|unique:users',
           'password'=>'required|min:4'
    		]);
         
        $user =new User([
          'email'=> $request->input('email'),
          'password'=>bcrypt($request->input('password'))    
        ]);

        $user->save();
        Auth::login($user);

        return redirect()->route('user.profile');
    }

    public function getsignin(){
      return view('user.signin');
    }

    public function postsignin(Request $request){
      $this->validate($request,[
           'email'=>'email|required',
           'password'=>'required|min:4'
        ]);

      if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){
      return redirect()->route('user.profile');
    }
      return redirect()->back();
    }

    public function getprofile(){
      return view('user.profile');
    }

    public function getlogout(){
      Auth::logout();
      return redirect()->back();
    }

}

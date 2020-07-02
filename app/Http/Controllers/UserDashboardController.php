<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
       
        return view('user_dashboard.user');
    }
   public function edit(){
   	if(Auth::user()){
   		$user = User::find(Auth::user()->id);

   		if($user){
   		return view('user_dashboard.edit')->withUser($user);
   	}else{
   			return redirect()->back();
   		}
   	}else{
   			return redirect()->back();
   		}
   }
   public function update(Request $request){
      $user = User::find(Auth::user()->id);

      if($user){
         $validate=null;
         if(Auth::user()->email=== $request['email']){
            $validate = $request->validate([
               'first_name'=>'required|min:2',
               'last_name'=>'required|min:2',
               'mobile_number'=>'required|min:2',
               'email'=>'required|email'
            ]);
         }else{
            $validate = $request->validate([
               'first_name'=>'required|min:2',
               'last_name'=>'required|min:2',
               'mobile_number'=>'required|min:2',
               'email'=>'required|email|unique:users'
            ]);
         }

         }
         if($validate){
         $user->first_name = $request['first_name'];
         $user->last_name = $request['last_name'];
         $user->mobile_number = $request['mobile_number'];
         $user->email = $request['email'];

         $user->save();
         $request->session()->flash('success','Your Profile Details have Now Been Updated!');
         return redirect()->back();
         }
         else{
            return redirect()->back();
         }
}
}

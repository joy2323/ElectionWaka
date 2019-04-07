<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\User;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function redirectToSocial($social)
    {
        return Socialite::with($social)->redirect();
    }
    public function getSocialCallback($social)
    {
        $data=Socialite::with($social)->user();
        $user=User::where('email',$data->email)->first();

        if(!is_null($user)){
            Auth::login($user);
        }else{
            $user=new User();
            $user->name=$data->user['name'];
            $user->email=$data->email;
            $user->save();
        }
        Auth::login($user);
        return redirect('/user/dashboard')->with('success','Successfully logged in');
    }
   
}

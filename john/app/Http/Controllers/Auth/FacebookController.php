<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

class FacebookController extends Controller
{

	/**
	* Redirect to Facebook Auth
	*/
    public function toFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
	* Obtain information from Facebook
	*/
    public function facebookCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // $user->token;

            return redirect()->intended('home')->with('data',$user);;
    }
}

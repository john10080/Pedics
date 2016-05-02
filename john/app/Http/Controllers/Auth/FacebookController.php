<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Socialite;

use Auth;

use App\User;

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
        $money = Socialite::driver('facebook')->user();

        return view('pages.homePage')->with('data',$money);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function check(Request $request)
    {
        // validate user credentials

    	$this->validate($request,[
    		'email'=> 'required',
    		'password'=>'required'
    	]);

        # check login - manual way
        // $user = \DB::select('SELECT * from users where email = ? LIMIT 1', [$request->email]);

        // if (count($user) > 0) {
        //     # user found , check password
        //     if ( \Hash::check( $request->password, $user[0]->password) ) {
        //         return redirect('/')
        //                     ->with('alert-title', 'Welcome back!')
        //                     ->with('alert-message', 'Your login is successful. Explore now.');
        //     } else {
        //         return redirect()->back()
        //             ->with('alert-title', 'Failed!')
        //             ->with('alert-message', 'Sorry! your credentials does not match.');
        //     }

        // } else {
        //     return redirect()->back()
        //             ->with('alert-title', 'Failed!')
        //             ->with('alert-message', 'Sorry! your credentials does not match.');
        // }

        # check login - laravel way
        if ( \Auth::attempt( $request->only('email', 'password') ) ) {

            return redirect('/')
                            ->with('alert-title', 'Welcome back!')
                            ->with('alert-message', 'Your login is successful. Explore now.');

        } else {

            return redirect()->back()
                    ->with('alert-title', 'Failed!')
                    ->with('alert-message', 'Sorry! your credentials does not match.');

        }

    }
}

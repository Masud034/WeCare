<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logout()
    {
    	if ( auth()->check() ) {
    		auth()->logout();

    		return redirect('/login')
    					->with('alert-title', 'Logged out!')
    					->with('alert-message', 'See you soon.');

    	} else {
			return redirect('/login')
    					->with('alert-title', 'You are not logged in!')
    					->with('alert-message', 'Log in first!');    		
    	}
    }
}

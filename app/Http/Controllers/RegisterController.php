<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
    	return view('register');
    }

    public function recieved(Request $request)
    {
        // validate inputs submited by user
    	$this->validate($request, [
    		'first_name' => 'required|between:2,20',
    		'last_name' => 'required|between:2,20',
    		'phone_number' => 'required|unique:users',
    		'nid' => 'required|unique:users',
    		'address' => 'required',
    		'email' => 'required|unique:users',
    		'password' => 'required|between:8,32|confirmed',
    		'password_confirmation' => 'required'
    	]);

    	// validation passed, now save these data into table
        // Laravel ORM Process - Way 1
        // $user = new \App\User();
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->phone_number = $request->phone_number;
        // $user->nid = $request->nid;
        // $user->address = $request->address;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();

        // Laravel ORM Process - Way 2
        // $user = new \App\User();
        // $user->fill($request->except('password'));
        // $user->password = bcrypt($request->password);
        // $user->save();
        \DB::insert('INSERT INTO users (
                first_name, 
                last_name,
                phone_number,
                nid,
                address,
                email,
                password,
                created_at,
                updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [
                $request->first_name,
                $request->last_name,
                $request->phone_number,
                $request->nid,
                $request->address,
                $request->email,
                bcrypt($request->password),
                now(),
                now()
            ]);

        // header("Location: http://localhost:8000/login");

        return redirect('/login')
                    ->with('alert-title', 'Success!')
                    ->with('alert-message', "Congratulations! Your registration was successfuly. Try login now.");

    }
    
}

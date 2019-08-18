<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function addServiceForm()
    {
    	$services = \DB::select('SELECT id,title from services');
 
    	return view('service', compact('services'));
    }


    public function store(Request $request)
    {
    	$this->validate($request,[
    		'service_id'=> 'required',
    		'offerings'=>'required',
            'payment'=>'required',
    		'photo'=>'required',
    	]);

    	if ($request->hasFile('photo')) {
    		$photoPath = $request->photo->store('images/service', 'public');
    	}

    	\DB::insert('INSERT INTO service_user (
                service_id,
                user_id,
                offerings,
                photo,
                payment,
                created_at,
                updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)',
            [
                $request->service_id,
                auth()->user()->id,
                $request->offerings,
                $photoPath,
                $request->payment,
                now(),
                now()
            ]);

    	return redirect('/profile')
                            ->with('alert-title', 'successful!')
                            ->with('alert-message', 'Your service offerings has been saved.');
    }    

}

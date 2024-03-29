<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view()
    {
    	$user = \DB::select('SELECT * from users where id = ? LIMIT 1', [auth()->user()->id]);
    	//dump($user[0]->email);

    	$user = $user[0];


        $serviceDetails = \DB::select('SELECT su.payment,s.title,su.offerings,su.photo
            from service_user as su join services as s
            on su.service_id=s.id where su.user_id = ?', [auth()->user()->id]);

            //dd($serviceDetails);


            return view('profile', compact('user', 'serviceDetails'));

        }

        public function edit()
        {	
           $user = \DB::select('SELECT * from users where id = ? LIMIT 1', [auth()->user()->id]);
           $user = $user[0];

           return view('profile-edit',compact('user'));
       }

       public function update(Request $request)
       {
    	// dd($request->all());

           $this->validate($request, [
           'first_name' => 'required|between:2,20',
           'last_name' => 'required|between:2,20',
           'phone_number' => 'required|unique:users,phone_number,' . auth()->user()->id,
           'nid' => 'required|unique:users,nid,' . auth()->user()->id,
           'address' => 'required',
           'email' => 'required|unique:users,email,' . auth()->user()->id
           ]);

    	//$photoPath = null;


           if ($request->hasFile('photo')) {
              $photoPath = $request->photo->store('images/profile', 'public');
          }
          else if(auth()->user()->photo != null ){
              $photoPath=auth()->user()->photo;
          }
          else{
              $photoPath=null;
          }

          \DB::update('update users set 
          first_name = ?, 
          last_name = ?,  
          phone_number = ?,
          nid = ?,
          address = ?,
          email = ?,
          photo = ? where id = ?', 
          [
          $request->first_name,
          $request->last_name,
          $request->phone_number,
          $request->nid,
          $request->address,
          $request->email,
          $photoPath,
          auth()->user()->id
          ]
          );

          return redirect('profile')
          ->with('alert-title', 'Updated!');

      }



  }

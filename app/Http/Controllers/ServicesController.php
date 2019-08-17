<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
	public function index()
	{
		$serviceProviders=\DB::select('SELECT u.first_name,s.title,su.offerings,su.photo
		from users as u join service_user as su
		on su.user_id=u.id
		join services as s
		on s.id=su.service_id');

		// dd($serviceProviders);

		return view('services',compact('serviceProviders'));
	}
}

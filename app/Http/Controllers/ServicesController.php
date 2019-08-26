<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
	public function index(Request $request)
	{
		$where = "";

		if ($request->filled('search')) {
			$where = "WHERE s.title like '%{$request->search}%'";
		}

		$serviceProviders=\DB::select("
			SELECT u.first_name,s.title,su.offerings,su.photo, su.user_id, su.service_id
			from users as u 
			join service_user as su on su.user_id=u.id
			join services as s on s.id=su.service_id {$where}"
		);

		// dd($serviceProviders);

		return view('services',compact('serviceProviders'));
	}

	public function details($user_id, $service_id)
    {
		$serviceDetails=\DB::select("
			SELECT 
				concat(u.first_name,' ',u.last_name) as name,
				u.phone_number,
				u.address,
				u.email,
				u.photo as user_photo,
				s.title,
				su.offerings,
				su.payment,
				su.photo as service_photo,
				su.user_id, 
				su.service_id
			from users as u 
			join service_user as su on su.user_id=u.id
			join services as s on s.id=su.service_id 
			where su.user_id = ? and su.service_id = ? LIMIT 1", [
				$user_id, 
				$service_id
			]
		);

		$serviceDetails = $serviceDetails[0];

		// Find average rating of this service
		$averageRating = \DB::select("SELECT AVG(rating) as rating FROM bookings WHERE service_provider_id = ? AND service_id = ?", [
			$user_id, $service_id
		]);

		$averageRating = $averageRating[0]->rating ?? 0;

		return view('service-details',compact('serviceDetails', 'averageRating'));
    }



}

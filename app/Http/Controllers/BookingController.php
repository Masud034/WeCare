<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function show()
    {
        $asAcustomerBookings = \DB::select("
			SELECT 
				b.booking_id, 
			    b.number_of_days, 
			    b.amount,
			    b.status,
			    concat(u.first_name, ' ', u.last_name) as name,
			    u.phone_number,
			    u.address,
			    u.photo,
			    s.title
			FROM bookings as b
			JOIN users as u ON u.id = b.service_provider_id
			JOIN services as s ON s.id = b.service_id
			WHERE b.user_id = ?
		", [ auth()->user()->id ]);

        $asAProviderBookings = \DB::select("
			SELECT 
				b.booking_id, 
			    b.number_of_days, 
			    b.amount,
			    b.status,
			    concat(u.first_name, ' ', u.last_name) as name,
			    u.phone_number,
			    u.address,
			    u.photo,
			    s.title
			FROM bookings as b
			JOIN users as u ON u.id = b.user_id
			JOIN services as s ON s.id = b.service_id
			WHERE b.service_provider_id = ?
		", [ auth()->user()->id ]);

        return view('booking', compact('asAcustomerBookings', 'asAProviderBookings'));
    }

    public function store(Request $request)
    {
        // Select Per Day Charge from Service User Table
        $service_charge = \DB::select("SELECT payment FROM service_user WHERE service_id = ? AND user_id = ? LIMIT 1", [ $request->service_id, $request->user_id ]);

        $service_charge = $service_charge[0]->payment;

        $total_service_charge = $service_charge * $request->number_of_days;

        // Save Data Into Booking Table and Get The Booking ID
        $booking_id = strtoupper( str_random(8) );

        \DB::insert("
    		INSERT INTO bookings (
    			booking_id, 
    			number_of_days,
    			amount,
    			user_id, 
    			service_id, 
    			service_provider_id,
    			status,
    			created_at,
    			updated_at
    		) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
    		", [
            $booking_id,
            $request->number_of_days,
            $total_service_charge,
            auth()->user()->id,
            $request->service_id,
            $request->user_id,
            'Booked',
            now(),
            now()
        ]);

        // Call SSL Commerz API For Payment Token
        /* PHP */
        $post_data = array();
        $post_data['store_id'] = "adsfa5d5a2eec83882";
        $post_data['store_passwd'] = "adsfa5d5a2eec83882@ssl";
        $post_data['total_amount'] = $total_service_charge;
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $booking_id;
        $post_data['success_url'] = url('payment-gateway-resposne');
        $post_data['fail_url'] = url('payment-gateway-resposne');
        $post_data['cancel_url'] = url('payment-gateway-resposne');
        # $post_data['multi_card_name'] = "mastercard,visacard,amexcard";  # DISABLE TO DISPLAY ALL AVAILABLE

        # EMI INFO
        // $post_data['emi_option'] = "1";
        // $post_data['emi_max_inst_option'] = "9";
        // $post_data['emi_selected_inst'] = "9";

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = auth()->user()->name;
        $post_data['cus_email'] = auth()->user()->email;
        $post_data['cus_add1'] = "Dhaka";
        $post_data['cus_add2'] = "Dhaka";
        $post_data['cus_city'] = "Dhaka";
        $post_data['cus_state'] = "Dhaka";
        $post_data['cus_postcode'] = "1000";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = auth()->user()->phone_number;
        $post_data['cus_fax'] = auth()->user()->phone_number;

        # SHIPMENT INFORMATION
        // $post_data['ship_name'] = "Store Test";
        // $post_data['ship_add1 '] = "Dhaka";
        // $post_data['ship_add2'] = "Dhaka";
        // $post_data['ship_city'] = "Dhaka";
        // $post_data['ship_state'] = "Dhaka";
        // $post_data['ship_postcode'] = "1000";
        // $post_data['ship_country'] = "Bangladesh";

        # OPTIONAL PARAMETERS
        // $post_data['value_a'] = $initiation->initiation_string;
        // $post_data['value_b '] = $request->input('qty_c');
        // $post_data['value_c'] = $request->input('mobile_number');
        // $post_data['value_d'] = $request->input('uniqueid');

        # CART PARAMETERS
        $post_data['cart'] = json_encode(array(
            array("product"=>"We Care Service" ,"amount"=> $total_service_charge)
        ));
        $post_data['product_amount'] = $total_service_charge;
        // $post_data['vat'] = "5";
        // $post_data['discount_amount'] = "5";
        // $post_data['convenience_fee'] = "3";

        # REQUEST SEND TO SSLCOMMERZ

        $direct_api_url = "https://sandbox.sslcommerz.com/gwprocess/v3/api.php";

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $direct_api_url );
        curl_setopt($handle, CURLOPT_TIMEOUT, 30);
        curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($handle, CURLOPT_POST, 1 );
        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC


        $content = curl_exec($handle );

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if($code == 200 && !( curl_errno($handle))) {
            curl_close( $handle);
            $sslcommerzResponse = $content;
        } else {
            curl_close( $handle);
            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            exit;
        }

        # PARSE THE JSON RESPONSE
        $sslcz = json_decode($sslcommerzResponse, true );

        if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
            # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
            # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
            echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            # header("Location: ". $sslcz['GatewayPageURL']);
            exit;
        } else {
            echo "JSON Data parsing error!";
        }
    }

    public function paymentGatewayResponse(Request $request)
    {
        // dump($request->all());
        if ($request->status === 'VALID') {

            \DB::update("UPDATE bookings SET status = 'Booking Confirmed' WHERE booking_id = ? ", [ $request->tran_id ]);

            return redirect('/booking')
                ->with('alert-title', 'Success!')
                ->with('alert-message', 'Your payment is successful and booking confirmed.');

        } else {
            return redirect('/booking')
                ->with('alert-title', 'Failed!')
                ->with('alert-message', 'Payment Failed.');
        }
    }

}

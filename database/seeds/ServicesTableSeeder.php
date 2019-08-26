<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::statement("DELETE from services");

        $services = [
        	[
        		'title'	=>	'Child Care',
        		'payment_info' => 'Cash Payment'
        	],
        	[
        		'title'	=>	'Adult Care',
        		'payment_info' => 'Cash Payment'
        	],
        	[
        		'title'	=>	'Pet Care',
        		'payment_info' => 'Cash Payment'
        	]
        ];

        foreach ($services as $service) {
        	\DB::insert("INSERT INTO services (title, payment_info) VALUES (?, ?)", [
        		$service['title'], $service['payment_info']
        	]);
        }
    }
}

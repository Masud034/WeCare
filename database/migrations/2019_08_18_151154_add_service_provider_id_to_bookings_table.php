<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddServiceProviderIdToBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('booking_id', 8)->unique()->after('id');
            $table->smallInteger('number_of_days')->deafult(0)->after('booking_id');
            $table->decimal('amount', 12, 2)->deafult(0)->after('number_of_days');
            $table->bigInteger('service_provider_id')->unsigned()->after('service_id');
            $table->foreign('service_provider_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('booking_id');
            $table->dropColumn('number_of_days');
            $table->dropColumn('amount');
            $table->dropForeign(['service_provider_id']);
            // $table->dropIndex(['service_provider_id']);
            $table->dropColumn('service_provider_id');
        });
    }
}

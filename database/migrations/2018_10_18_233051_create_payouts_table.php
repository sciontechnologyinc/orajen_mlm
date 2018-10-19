<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('Michael');
            $table->string('gcashnumber')->default('093993912');
            $table->string('status')->default('Pending');
            $table->decimal('netincome', 19, 2)->default(0);
            $table->decimal('payout', 19, 2)->default(0);
            $table->timestamps();
        });
        DB::table('payouts')->insert(
            array(
                array('name' => 'Orajen','gcashnumber' => '093993912','netincome' => '712','payout' => '712'),
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payouts');
    }
}

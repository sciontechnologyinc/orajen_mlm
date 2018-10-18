<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->string('contactnumber')->nullable();
            $table->string('gcashnumber')->nullable();
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('password');
            $table->string('sponsor_id')->nullable();
            $table->boolean('admin')->default(0);
            $table->decimal('netincome', 19, 2)->default(0);
            $table->decimal('payout', 19, 2)->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
        DB::table('users')->insert(
            array(
                array('name' => 'Orajen','email' => 'orajen@gmail.com', 'gcashnumber' => '09292938292','sponsor_id'=>'0', 'password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Company','email' => 'company@gmail.com', 'gcashnumber' => '092923332', 'sponsor_id'=>'1', 'password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Corporation','email' => 'corporation@gmail.com', 'gcashnumber' => '09212312', 'sponsor_id'=>'1','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Michael Osorio','email' => 'michael.osorio@gmail.com', 'gcashnumber' => '0923911123', 'sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Jai Sorio','email' => 'jai.taribz@gmail.com', 'gcashnumber' => '0944121233','sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Noemy Praga','email' => 'dhanemhii27@gmail.com', 'gcashnumber' => '01923123841231', 'sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'John Paul Malinao','email' => 'malinaojohnpaul031@gmail.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Ryan Riogelon','email' => 'yhona14riogelon@yahoo.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Eldezar Reyes','email' => 'razidle07@gmail.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Joemer Banawa','email' => 'joealakim@gmail.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'3','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Mary Joy','email' => 'mary.joy@gmail.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'6','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Juharto Ponga','email' => 'juharto.ponga@gmail.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'10','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW'),
                array('name' => 'Wahida Ponga','email' => 'wahida.ponga@gmail.com', 'gcashnumber' => '09292938292', 'sponsor_id'=>'12','password'=>'$2y$10$3zKG3VuE6wZJAjvG3pHKVuEDRCRuZHn1GylnMm9fdG26z6uzjVQoW')
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
        Schema::dropIfExists('users');
    }
}

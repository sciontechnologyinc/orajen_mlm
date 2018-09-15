<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('address');
            $table->string('email');
            $table->string('mobileno');
            $table->string('sponsorid');
            $table->string('placementid');
            $table->string('activationcode');
            $table->string('user_id');
            $table->string('node_address');
            $table->boolean('active')->default(0);
            $table->boolean('qualified')->default(0);
            $table->decimal('income', 19, 4)->default(0);
            $table->decimal('product_voucher', 19, 4)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}

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
<<<<<<< HEAD
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('address');
            $table->string('memberemail');
            $table->string('memberpassword')->default('password');
            $table->string('mobileno');
            $table->string('sponsorid');
            $table->string('placementid');
            $table->string('activationcode');
=======
>>>>>>> a8662098407b17fbdbdb1cb92579e9beeb1937d1
            $table->string('user_id');
            $table->string('placement_id');
            $table->string('node_address');
            $table->string('activationcode');
            $table->boolean('is_main')->default(0);
            $table->boolean('is_active')->default(0);
            $table->boolean('is_qualified')->default(0);
            $table->decimal('income', 19, 2)->default(0);
            $table->decimal('product_voucher', 19, 2)->default(0);
            $table->decimal('direct_referral', 19, 2)->default(0);
            $table->decimal('pass_up', 19, 2)->default(0);
            $table->decimal('global_pool', 19, 2)->default(0);
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

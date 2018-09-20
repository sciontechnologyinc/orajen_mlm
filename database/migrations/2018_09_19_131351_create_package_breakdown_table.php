<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageBreakdownTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_breakdown', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->decimal('amount', 19, 4)->default(0);
            $table->timestamps();
        });
        DB::table('package_breakdown')->insert(
            array(
                array('name' => 'Products','amount' => '348'),
                array('name' => 'Bag/Brochure','amount' => '22'),
                array('name' => 'Global Pool','amount' => '210'),
                array('name' => 'Company Reward System','amount' => '200'),
                array('name' => 'Direct Referral','amount' => '100'),
                array('name' => 'Infinity Pass Up','amount' => '150'),
                array('name' => 'Mobile Stoclist','amount' => '50'),
                array('name' => 'Outright','amount' => '20'),
                array('name' => 'Tax/Legal Documents','amount' => '100'),
                array('name' => 'Net Income','amount' => '300')
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
        Schema::dropIfExists('package_breakdown');
    }
}

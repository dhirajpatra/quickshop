<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_plans', function (Blueprint $table) {
            $table->increments('store_plan_id');
            $table->string('store_plan_name');
            $table->integer('store_plan_price');
            $table->tinyInteger('store_plan_billing_cycle')->comment('1=monthly,2=yearly,3=half_yearly');
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
        Schema::dropIfExists('store_plans');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreOwnerPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_owner_plans', function (Blueprint $table) {
            $table->increments('store_owner_plan_id');
            $table->integer('store_owner_id')->unsigned()->index();
            $table->foreign('store_owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('store_owner_plan_type_id')->unsigned()->index();
            $table->foreign('store_owner_plan_type_id')->references('store_plan_id')->on('store_plans')->onDelete('cascade');
            $table->string('store_owner_plan_domain')->nullable();
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
        Schema::dropIfExists('store_owner_plans');
    }
}

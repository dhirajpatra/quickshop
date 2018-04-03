<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePlanFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_plan_features', function (Blueprint $table) {
            $table->increments('store_plan_feature_id');
            $table->integer('store_plan_feature_plan_id')->unsigned()->index();
            $table->foreign('store_plan_feature_plan_id')->references('store_plan_id')->on('store_plans')->onDelete('cascade');
            $table->string('store_plan_feature_name');
            $table->string('store_plan_feature_value');
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
        Schema::dropIfExists('store_plan_features');
    }
}

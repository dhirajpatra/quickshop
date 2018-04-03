<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreDbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_dbs', function (Blueprint $table) {
            $table->increments('store_db_id');
            $table->string('store_db_name');
            $table->integer('store_db_owner_plan_id')->unsigned()->index();
            $table->foreign('store_db_owner_plan_id')->references('store_owner_plan_id')->on('store_owner_plans')->onDelete('cascade');
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
        Schema::dropIfExists('store_dbs');
    }
}

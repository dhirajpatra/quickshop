<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_payments', function (Blueprint $table) {
            $table->increments('store_payment_id');
            $table->integer('store_payment_owner_plan_id')->unsigned()->index();
            $table->foreign('store_payment_owner_plan_id')->references('store_owner_plan_id')->on('store_owner_plans')->onDelete('cascade');
            $table->decimal('store_payment_amount', 11,2);
            $table->string('store_payment_method');
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
        Schema::dropIfExists('store_payments');
    }
}

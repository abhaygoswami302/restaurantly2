<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('phone');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('category_id');
            $table->string('item_name');
            $table->string('item_price');
            $table->longText('description');
            $table->string('quantity');
            $table->string('session_id');
            $table->string('total_price');
            $table->string('status')->default('ordered');
            $table->longText('user_address');
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
        Schema::dropIfExists('orders');
    }
}

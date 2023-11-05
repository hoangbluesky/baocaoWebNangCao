<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('orders'); // Xóa bảng orders (nếu tồn tại)

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('user_id')->nullable();
            $table->string('product_title')->nullable();
            $table->string('quantity')->nullable();
            $table->string('image')->nullable();
            $table->string('product_id')->nullable();
            $table->string('price')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('delivery_status')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }

};

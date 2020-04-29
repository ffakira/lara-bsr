<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('driver_id')->nullable(true);
            $table->string('order_number');
            $table->string('status')->default('Pending');
            $table->timestamp('order_at');
            $table->timestamp('ready_at');
            $table->timestamp('order_delivering_at')->default(now());
            $table->timestamp('order_complete_at')->default(now());
        });
    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('orders');
    }
}

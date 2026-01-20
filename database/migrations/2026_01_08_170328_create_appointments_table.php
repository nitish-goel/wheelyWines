<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('phone',100);
            $table->string('car_company',150);
            $table->string('car_name',150);
            $table->string('car_model',150);
            $table->integer('service_id');
            $table->string('service_name',200);
            $table->decimal('amount', 10, 2);
            $table->string('payment_id')->nullable();
            $table->string('order_id')->nullable();
            $table->boolean('status')->default(0); // 0 = Pending, 1 = Success
            $table->json('other')->nullable();
            $table->timestamps();
        });
        // $table->id();
        // $table->string('name');
        // $table->string('email');
        // $table->string('phone');
        // $table->decimal('amount', 10, 2);
        // $table->string('payment_id')->nullable();
        // $table->string('order_id')->nullable();
        // $table->boolean('status')->default(0); // 0 = Pending, 1 = Success
        // $table->json('other')->nullable();
        // $table->timestamps();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

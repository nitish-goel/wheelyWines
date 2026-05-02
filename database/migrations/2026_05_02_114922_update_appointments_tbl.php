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
        Schema::table('appointments', function (Blueprint $table) {
            // Step 1: Rename column
            $table->renameColumn('status', 'payment_status');
        });
    
        Schema::table('appointments', function (Blueprint $table) {
            // Step 2: Modify column
            $table->string('payment_status')->nullable()->change();
    
            // Step 3: Add new column
            $table->string('failure_reason')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            //
        });
    }
};

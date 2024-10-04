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
        Schema::create('vendor_bank_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger(column: 'vendor_id');
            $table->string('bank_name', 255)->nullable();
            $table->string('acc_no', 255)->nullable();
            $table->string('ifsc_code', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_bank_details');
    }
};

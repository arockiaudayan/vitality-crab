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
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 255);
            $table->string('gst', 255)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('pan_no')->nullable();
            $table->string('source_code');
            $table->integer('status')->default(value: 1);
            $table->bigInteger('added_user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendors');
    }
};

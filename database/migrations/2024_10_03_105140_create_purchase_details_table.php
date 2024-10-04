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
        Schema::create('purchase_details', function (Blueprint $table) {
            $table->id();
            $table->date('purchase_date');
            $table->date('received_date')->nullable();
            $table->string('purchase_code', 255)->nullable();
            $table->bigInteger('vendor_id')->nullable();
            $table->bigInteger('grade_id')->nullable();
            $table->decimal('rm_quantity', 10, 3)->nullable();
            $table->decimal('cc_quantity', 10, 3)->nullable();
            $table->decimal('rm_per_rate', 10, 2)->nullable();
            $table->decimal('amount', 10, 2);
            $table->bigInteger('added_user_id');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_details');
    }
};

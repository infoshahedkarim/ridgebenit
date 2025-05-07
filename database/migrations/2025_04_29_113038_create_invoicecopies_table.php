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
        Schema::create('invoicecopies', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no')->unique();
            $table->string('customer_name');
            $table->string('customer_email')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_address')->nullable();
            $table->foreignId('model_no')->constrained('products')->onDelete('cascade');
            $table->foreignId('description')->constrained('products')->onDelete('cascade');
            $table->integer('qty')->default(1);
            $table->integer('rate');
            $table->decimal('total', 10, 2);
            $table->decimal('advance', 10, 2)->nullable();
            $table->decimal('due', 10, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->string('payment_method')->nullable();
            $table->string('sellsman_name')->nullable();
            $table->dateTime('delivery_date')->nullable();
            $table->string('chalan_status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoicecopies');
    }
};

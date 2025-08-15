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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('trxn_id')->unique(); // Transaction ID provided by user
            $table->string('course_name'); // Name of the course purchased
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade'); // User who made the transaction
            $table->decimal('amount', 10, 2)->nullable(); // Transaction amount
            $table->string('payment_method')->nullable(); // Payment method (optional)
            $table->string('status')->default('pending'); // pending, verified, rejected
            $table->timestamp('verified_at')->nullable(); // When the transaction was verified
            $table->foreignId('verified_by')->nullable()->constrained('users')->onDelete('set null'); // Admin who verified
            $table->text('notes')->nullable(); // Additional notes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};

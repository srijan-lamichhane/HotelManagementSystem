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
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->string('billing_no');
            $table->string('name');
            $table->string('room_type');
            $table->string('room_number');
            $table->date('billing_date');
            $table->time('billing_time')->nullable();
            $table->date('arrival_date');
            $table->date('departure_date');
            $table->decimal('price', 8, 2);
            $table->integer('no_of_days_stay');
            $table->decimal('total', 8, 2);
            $table->string('transaction_type');
            $table->string('transaction_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('billings');
    }
};
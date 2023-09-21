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
        Schema::create('addrooms', function (Blueprint $table) {
            $table->Increments('id')->from(001)->unsigned();
            $table->string('room_number');
            $table->integer('floor');
            $table->decimal('price', 8, 2);
            $table->string('room_type');
            $table->boolean('status')->default(0);
            $table->timestamps();  
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencesTable extends Migration
{
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('status')->default(0); // Assuming this is the status for attendance (present/absent)
            $table->date('attendance_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendences');
    }
}

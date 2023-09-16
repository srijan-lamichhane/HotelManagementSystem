<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('emp_id'); // Use unsignedBigInteger for foreign keys
            $table->foreign('emp_id')->references('id')->on('employees')->onDelete('cascade');
            $table->unsignedInteger('uid')->default(0);
            $table->boolean('state')->default(0);
            $table->time('attendence_time')->default(date('H:i:s'));
            $table->date('attendence_date')->default(date('Y-m-d'));
            $table->boolean('status')->default(1);
            $table->boolean('type')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendences', function (Blueprint $table) {
            $table->dropForeign(['emp_id']);
           });
   
     

        Schema::dropIfExists('attendences');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addunits', function (Blueprint $table) {
            $table->integer('unit_code')->primary();
            $table->string('unit_name');
            $table->integer('course_code');
            $table->foreign('course_code')->references('course_code')->on('addcourses')->onDelete('cascade');
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
        Schema::dropIfExists('addunits');
    }
};

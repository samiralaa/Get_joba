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
        Schema::create('job_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('job_id')->references('id')->on('jobs')
            ->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('users')
            ->onDelete('cascade')->nullable();
            $table->string('email')->unique();
            $table->string("fullname");
            $table->integer("phone");
            $table->string("addres");
            $table->string("cv_file");
            $table->string("linkedin");
            $table->softDeletes();
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
        Schema::dropIfExists('job_requests');

    }
};

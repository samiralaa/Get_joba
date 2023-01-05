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
        Schema::create('campanies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('employment');
            $table->string('description');
            $table->string('logo');
            $table->string('total_emp');
            $table->foreignId('category_id')->references('id')->on('categories')
            ->onDelete('cascade');
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
        Schema::dropIfExists('campanies');
    }
};

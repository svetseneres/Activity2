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
        Schema::create('residents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname')->default();
            $table->string('lastname')->default();
            $table->integer('age');
            $table->string('gender')->default();
            $table->integer('birthday');
            $table->text('birthplace');
            $table->text('address');
            $table->integer('contact');
            $table->text('email');
            $table->string('occupation')->default();
            $table->text('religion');
            $table->unsignedBigInteger('created_by')->nullable();
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
        Schema::dropIfExists('residents');
    }
};

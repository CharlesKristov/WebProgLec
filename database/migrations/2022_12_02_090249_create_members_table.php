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
        Schema::create('members', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('Leader_id');
            $table->foreign('Leader_id')->references('id')->on('leaders');
            $table->string('Full_Name');
            $table->string('Leader_Name');
            $table->string('Email');
            $table->date('DOB');
            $table->string('Phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};

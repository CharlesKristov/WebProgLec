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
        Schema::create('leaders', function (Blueprint $table) {
            $table->string('Full_Name');
            $table->string('Role');
            $table->string('Team_Name');
            $table->string('ID_Card');
            $table->string('Email');
            $table->string('Password');
            $table->date('DOB');
            $table->string('Phone');
            $table->string('Competition')->nullable();
            $table->string('Payment_Status')->nullable();
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
        Schema::dropIfExists('leaders');
    }
};

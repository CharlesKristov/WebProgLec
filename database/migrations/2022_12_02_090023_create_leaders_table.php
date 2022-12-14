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
            $table->id()->autoIncrement();
            $table->string('Full_Name');
            $table->string('Role');
            $table->string('Team_Name');
            $table->string('ID_Card');
            $table->string('email');
            $table->string('password');
            $table->date('DOB');
            $table->string('Phone');
            $table->string('Competition')->nullable();
            $table->string('Payment_Status')->nullable();
            $table->string('Payment_Photo')->nullable();
            $table->string('remember_token')->nullable();
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

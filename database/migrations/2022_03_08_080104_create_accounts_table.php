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
        Schema::create('accounts', function (Blueprint $table) {
            $table->uuid('id')->unique()->primary();
            $table->string('user_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->integer('phone');
            $table->string('email');
            $table->string('address');
            $table->string('hobby')->nullable();
            $table->enum('gender',["male","female","others"])->nullable();
            $table->enum('country',["usa","india","pakistan"])->nullable();
            $table->enum('state',["goa","bihar","delhi"])->nullable();
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
        Schema::dropIfExists('accounts');
    }
};
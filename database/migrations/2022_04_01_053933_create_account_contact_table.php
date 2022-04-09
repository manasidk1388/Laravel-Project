<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('account_contact', function (Blueprint $table) {
            $table->id('id');
            $table->uuid('account_id')->foreign()->references('id')->nullable();
            $table->uuid('contact_id')->foreign()->references('id')->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('account_contact');
    }
};
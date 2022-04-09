<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('project_user', function (Blueprint $table) {
            $table->id();
            $table->uuid('project_id')->foreign()->references('id');
            $table->uuid('user_id')->foreign()->references('id');
            
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_user');
    }
};
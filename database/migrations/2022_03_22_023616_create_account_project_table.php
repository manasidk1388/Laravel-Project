<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('account_project', function (Blueprint $table) {
            $table->id();
            $table->uuid('account_id')->nullable()->foreign()->references('id');
            $table->uuid('project_id')->nullable()->foreign()->references('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('account_project');
    }
};
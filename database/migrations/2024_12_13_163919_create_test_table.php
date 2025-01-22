<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestTable extends Migration
{
    public function up()
    {
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Assure-toi d'avoir une colonne 'name'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('test');
    }
}

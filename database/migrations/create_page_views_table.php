<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('page_views', function (Blueprint $table) {
            $table->id();

            $table->nullableMorphs('trackable');
            $table->string('uri');
            $table->string('session')->nullable();
            $table->string('source')->nullable();
            $table->string('ip');
            $table->string('browser')->nullable();
            $table->string('device');
            $table->dateTime('visited_at');
            $table->dateTime('left_at')->nullable();

            $table->timestamps();
        });
    }
};

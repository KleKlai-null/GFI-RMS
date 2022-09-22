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
        Schema::create('form_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('form');
            $table->integer('total')->default(0);
            $table->integer('open')->default(0);
            $table->integer('closed')->default(0);
            $table->integer('archived')->default(0);
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
        Schema::dropIfExists('form_statistics');
    }
};

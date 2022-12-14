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
        Schema::create('return_slips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('withdrawal_form');
            $table->string('document_series_no')->unique();
            $table->string('department');
            $table->string('mr_no');
            $table->string('withdrawal_slip_no');
            $table->string('prepared_by');
            $table->string('approved_by');
            $table->string('received_by');
            $table->string('released_by');
            $table->string('checked_by');
            $table->string('noted_by');
            $table->enum('status', ['Open', 'Closed', 'Archived'])->default('Open');
            $table->softDeletes();
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
        Schema::dropIfExists('return_slips');
    }
};

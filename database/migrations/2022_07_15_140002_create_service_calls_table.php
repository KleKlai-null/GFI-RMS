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
        Schema::create('service_calls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_name');
            $table->string('document_series_no')->unique();
            $table->string('customer_name');
            $table->string('contact_person');
            $table->string('phone_no');
            $table->string('item_no');
            $table->string('description');
            $table->string('mfr_serial_no')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('subject');
            $table->string('origin');
            $table->string('problem_type');
            $table->string('assigned_to');
            $table->string('priority');
            $table->string('call_type')->nullable();
            $table->string('technician')->nullable();
            $table->mediumText('remarks')->nullable();
            $table->mediumText('resolution')->nullable();
            
            $table->string('prepared_by');
            $table->string('prepared_by_position');
            $table->string('checked_by');
            $table->string('checked_by_position');
            $table->string('noted_by');
            $table->string('noted_by_position');
            $table->string('approved_by');
            $table->string('approved_by_position');
            $table->string('requested_by');
            $table->string('requested_by_position');
            $table->string('released_by');
            $table->string('released_by_position');
            $table->string('received_by');
            $table->string('received_by_position');
            
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
        Schema::dropIfExists('service_calls');
    }
};

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
        Schema::create('memoranda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_name');
            $table->string('document_series_no')->unique();
            $table->string('id_no');
            $table->string('name_of_employee');
            $table->string('department');
            $table->string('section');
            $table->string('asset_code');
            $table->string('asset_type');
            $table->string('asset_description');
            $table->string('asset_serial_no');
            $table->string('asset_value');

            $table->string('prepared_by')->nullable();
            $table->string('prepared_by_position')->nullable();
            $table->string('checked_by')->nullable();
            $table->string('checked_by_position')->nullable();
            $table->string('noted_by')->nullable();
            $table->string('noted_by_position')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('approved_by_position')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('requested_by_position')->nullable();
            $table->string('released_by')->nullable();
            $table->string('released_by_position')->nullable();
            $table->string('received_by')->nullable();
            $table->string('received_by_position')->nullable();

            $table->string('accountable_person')->nullable();
            $table->string('accountable_person_position')->nullable();
            
            $table->mediumText('remarks')->nullable();
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
        Schema::dropIfExists('memoranda');
    }
};

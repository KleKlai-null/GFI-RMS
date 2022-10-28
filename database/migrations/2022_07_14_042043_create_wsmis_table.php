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
        Schema::create('wsmis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_name');
            $table->string('customer_name');
            $table->string('document_series_no')->unique();
            $table->string('cm_document_series_no')->unique()->nullable();
            $table->string('pallet_no')->nullable();
            $table->string('warehouse')->nullable();
            $table->string('wh_location')->nullable();
            $table->string('profit_center');
            $table->string('sub_profit_center')->nullable();
            $table->string('sales_order_number')->nullable();
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
            $table->mediumText('remarks')->nullable();
            $table->string('current_department')->nullable();
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
        Schema::dropIfExists('wsmis');
    }
};

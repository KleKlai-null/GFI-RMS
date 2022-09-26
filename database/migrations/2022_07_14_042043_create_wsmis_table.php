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
            $table->string('customer_name')->nullable();
            $table->string('document_series_no');
            $table->string('pallet_no');
            $table->string('warehouse');
            $table->string('wh_location'); 
            $table->string('profit_center')->nullable();
            $table->string('sub_profit_center')->nullable();
            $table->string('sales_order_number');
            $table->string('noted_by');
            $table->string('prepared_by');
            $table->string('approved_by');
            $table->string('checked_by');
            $table->string('released_by');
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

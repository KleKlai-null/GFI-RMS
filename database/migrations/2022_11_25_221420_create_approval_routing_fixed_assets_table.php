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
        Schema::create('approval_routing_fixed_assets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fixed_asset_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('property_custodian_SOPN')->nullable();
            $table->string('property_custodian_date')->nullable();
            $table->string('property_custodian_status')->nullable();
            $table->string('general_manager_SOPN')->nullable();
            $table->string('general_manager_date')->nullable();
            $table->string('general_manager_status')->nullable();
            $table->string('finance_SOPN')->nullable();
            $table->string('finance_date')->nullable();
            $table->string('finance_status')->nullable();
            $table->string('corporate_finance_SOPN')->nullable();
            $table->string('corporate_finance_date')->nullable();
            $table->string('corporate_finance_status')->nullable();
            $table->string('audit_SOPN')->nullable();
            $table->string('audit_date')->nullable();
            $table->string('audit_status')->nullable();
            $table->string('system_administrator_SOPN')->nullable();
            $table->string('system_administrator_date')->nullable();
            $table->string('system_administrator_status')->nullable();
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
        Schema::dropIfExists('approval_routing_fixed_assets');
    }
};

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
        Schema::create('document_tables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_partner_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('document_no_page_2')->nullable();
            $table->string('DN_1_individual')->nullable();
            $table->string('DN_1_corporation')->nullable();
            $table->string('DN_1_cooperative')->nullable();
            $table->string('DN_1_submitted')->nullable();
            $table->string('DN_1_RNS')->nullable();

            $table->string('DN_2_individual')->nullable();
            $table->string('DN_2_corporation')->nullable();
            $table->string('DN_2_cooperative')->nullable();
            $table->string('DN_2_submitted')->nullable();
            $table->string('DN_2_RNS')->nullable();

            $table->string('DN_3_individual')->nullable();
            $table->string('DN_3_corporation')->nullable();
            $table->string('DN_3_cooperative')->nullable();
            $table->string('DN_3_submitted')->nullable();
            $table->string('DN_3_RNS')->nullable();

            $table->string('DN_4_individual')->nullable();
            $table->string('DN_4_corporation')->nullable();
            $table->string('DN_4_cooperative')->nullable();
            $table->string('DN_4_submitted')->nullable();
            $table->string('DN_4_RNS')->nullable();

            $table->string('DN_5_individual')->nullable();
            $table->string('DN_5_corporation')->nullable();
            $table->string('DN_5_cooperative')->nullable();
            $table->string('DN_5_submitted')->nullable();
            $table->string('DN_5_RNS')->nullable();

            $table->string('DN_6_individual')->nullable();
            $table->string('DN_6_corporation')->nullable();
            $table->string('DN_6_cooperative')->nullable();
            $table->string('DN_6_submitted')->nullable();
            $table->string('DN_6_RNS')->nullable();

            $table->string('DN_7_individual')->nullable();
            $table->string('DN_7_corporation')->nullable();
            $table->string('DN_7_cooperative')->nullable();
            $table->string('DN_7_submitted')->nullable();
            $table->string('DN_7_RNS')->nullable();

            $table->string('DN_8_individual')->nullable();
            $table->string('DN_8_corporation')->nullable();
            $table->string('DN_8_cooperative')->nullable();
            $table->string('DN_8_submitted')->nullable();
            $table->string('DN_8_RNS')->nullable();

            $table->string('DN_9_individual')->nullable();
            $table->string('DN_9_corporation')->nullable();
            $table->string('DN_9_cooperative')->nullable();
            $table->string('DN_9_submitted')->nullable();
            $table->string('DN_9_RNS')->nullable();

            $table->string('DN_10_individual')->nullable();
            $table->string('DN_10_corporation')->nullable();
            $table->string('DN_10_cooperative')->nullable();
            $table->string('DN_10_submitted')->nullable();
            $table->string('DN_10_RNS')->nullable();

            $table->string('DN_11_individual')->nullable();
            $table->string('DN_11_corporation')->nullable();
            $table->string('DN_11_cooperative')->nullable();
            $table->string('DN_11_submitted')->nullable();
            $table->string('DN_11_RNS')->nullable();
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
        Schema::dropIfExists('document_tables');
    }
};

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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->string('user_name');
            $table->enum('status', ['Open', 'Closed', 'Archived','Pending'])->default('Open')->nullable();
            $table->string('remarks')->nullable();
            $table->string('document_series_no')->nullable();
            $table->string('date_processed')->nullable();
            $table->string('document_purpose_new_registration')->nullable();
            $table->string('document_purpose_information_update')->nullable();
            $table->string('status_update_active')->nullable();
            $table->string('status_update_inactive')->nullable();
            $table->string('date_from')->nullable();
            $table->string('date_to')->nullable();
            $table->string('item_type_items')->nullable();
            $table->string('item_type_labor')->nullable();
            $table->string('item_class_inventory_item')->nullable();
            $table->string('item_class_sales_item')->nullable();
            $table->string('item_class_purchasing_item')->nullable();
            $table->string('project_type_materials')->nullable();
            $table->string('project_type_equipment')->nullable();
            $table->string('project_type_labor_and_equipment')->nullable();
            $table->string('project_type_labor')->nullable();
            $table->string('item_group_DM')->nullable();
            $table->string('item_group_FG')->nullable();
            $table->string('item_group_MI')->nullable();
            $table->string('item_group_MRO')->nullable();
            $table->string('item_group_labor')->nullable();
            $table->string('item_group_landed')->nullable();
            $table->string('item_group_FA')->nullable();
            $table->string('item_group_MA')->nullable();
            $table->string('item_group_others')->nullable();
            $table->string('brand')->nullable();
            $table->string('model_specification')->nullable();
            $table->string('generic_description')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('uom_group')->nullable();
            $table->string('barcode')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('receiving_treshold')->nullable();
            $table->string('recall_treshold')->nullable();
            $table->string('shelf_life')->nullable();
            $table->string('wtax_liable_yes')->nullable();
            $table->string('wtax_liable_no')->nullable();
            $table->string('purchasing_data_preferred_vendor')->nullable();
            $table->string('purchasing_data_purchasing_uom')->nullable();
            $table->string('purchasing_data_packaging_uom')->nullable();
            $table->string('purchasing_data_items_per_purchase_unit')->nullable();
            $table->string('purchasing_data_qty_per_package')->nullable();
            $table->string('PVG_group_capital_goods')->nullable();
            $table->string('PVG_group_non_capital_goods')->nullable();
            $table->string('PVG_group_services')->nullable();
            $table->string('PVG_group_importations')->nullable();
            $table->string('PVG_group_non_taxable')->nullable();
            $table->string('PVG_group_zero_rated')->nullable();
            $table->string('PVG_group_exempt')->nullable();
            $table->string('PVG_group_others')->nullable();
            $table->string('sales_data_sales_uom')->nullable();
            $table->string('sales_data_packaging_uom')->nullable();
            $table->string('sales_data_items_per_sales_unit')->nullable();
            $table->string('sales_data_qty_per_packages')->nullable();
            $table->string('SVG_group_capital_goods')->nullable();
            $table->string('SVG_group_non_capital_goods')->nullable();
            $table->string('SVG_group_services')->nullable();
            $table->string('SVG_group_importations')->nullable();
            $table->string('SVG_group_non_taxable')->nullable();
            $table->string('SVG_group_zero_rated')->nullable();
            $table->string('SVG_group_exempt')->nullable();
            $table->string('SVG_group_others')->nullable();
            $table->string('set_accounts_warehouse')->nullable();
            $table->string('set_accounts_item_group')->nullable();
            $table->string('set_accounts_item_level')->nullable();
            $table->string('valuation_method_standard')->nullable();
            $table->string('valuation_method_moving_average')->nullable();
            $table->string('valuation_method_batch_serial')->nullable();
            $table->string('valuation_method_FIFO')->nullable();
            $table->string('manage_inventory_wh_yes')->nullable();
            $table->string('manage_inventory_wh_no')->nullable();
            $table->string('inventory_uom')->nullable();
            $table->string('default_warehouses')->nullable();
            $table->string('inventory_level_uom')->nullable();
            $table->string('inventory_level_minimum')->nullable();
            $table->string('inventory_level_maximum')->nullable();
            $table->string('planning_method_none')->nullable();
            $table->string('planning_method_mrp')->nullable();
            $table->string('procurement_method_buy')->nullable();
            $table->string('procurement_method_make')->nullable();
            $table->string('order_method_min_order_qty')->nullable();
            $table->string('order_method_lead_time')->nullable();
            $table->string('order_method_tolerance')->nullable();
            $table->string('phantom_item_yes')->nullable();
            $table->string('phantom_item_no')->nullable();
            $table->string('issue_method_backflush')->nullable();
            $table->string('issue_method_manual')->nullable();
            $table->string('properties')->nullable();
            $table->integer('revision')->nullable();
            $table->string('modified')->nullable();
            $table->string('updated_by')->nullable();
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
        Schema::dropIfExists('items');
    }
};

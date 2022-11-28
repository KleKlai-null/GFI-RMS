<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;

class Create extends Component
{
    public $document_series_no, $date_processed, $document_purpose_new_registration, $document_purpose_information_update, $status_update_active, $status_update_inactive, $date_from, $date_to,
    $item_type_new_registration, $item_type_information_update, $item_class_new_registration, $item_class_information_update, $project_type_new_registration, $project_type_information_update,
    $item_group_DM, $item_group_FG, $item_group_MI, $item_group_MRO, $item_group_labor, $item_group_landed, $item_group_FA,$item_group_MA , $item_group_others, $brand, $model_specification, $generic_description,
    $manufacturer, $uom_group, $barcode, $country_of_origin, $receiving_treshold, $recall_treshold, $shelf_life, $wtax_liable_yes, $wtax_liable_no;
    public $purchasing_data_preferred_vendor, $purchasing_data_purchasing_uom, $purchasing_data_packaging_uom, $purchasing_data_items_per_purchase_unit,
    $purchasing_data_qty_per_package, $purchasing_data_barcode, $purchasing_data_country;
    public $PVG_group_capital_goods, $PVG_group_non_capital_goods, $PVG_group_services, $PVG_group_importations, $PVG_group_non_taxable,
    $PVG_group_zero_rated, $PVG_group_exempt, $PVG_group_others;
    public $sales_data_sales_uom, $sales_data_packaging_uom, $sales_data_items_per_sales_unit, $sales_data_qty_per_packages, $sales_data_barcode, $sales_data_country;
    public $SVG_group_capital_goods, $SVG_group_non_capital_goods, $SVG_group_services, $SVG_group_importations,
    $SVG_group_non_taxable, $SVG_group_zero_rated, $SVG_group_exempt, $SVG_group_others;
    public $set_accounts_warehouse, $set_accounts_item_group, $set_accounts_item_level;
    public $valuation_method_standard, $valuation_method_moving_average, $valuation_method_batch_serial, $valuation_method_FIFO;
    public $manage_inventory_wh_yes, $manage_inventory_wh_no;
    public $inventory_uom, $default_warehouses;
    public $inventory_level_uom, $inventory_level_minimum, $inventory_level_maximum;
    public $planning_method_none, $planning_method_mrp;
    public $procurement_method_buy, $procurement_method_make;
    public $order_method_min_order_qty, $order_method_lead_time, $order_method_tolerance;
    public $phantom_item_yes, $phantom_item_no;
    public $issue_method_backflush, $issue_method_manual;
    public $properties;
    public $operations_SOPN, $operations_date, $operations_status;
    public $supply_chain_human_resource_SOPN, $supply_chain_human_resource_date, $supply_chain_human_resource_status;
    public $finance_SOPN, $finance_date, $finance_status;
    public $corporate_finance_SOPN, $corporate_finance_date, $corporate_finance_status;
    public $audit_SOPN, $audit_date, $audit_status;
    public $system_administrator_SOPN, $system_administrator_date, $system_administrator_status;

    public function render()
    {
        return view('livewire.form.information-sheet.item.create', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function create(){
        dd($this->document_purpose_new_registration);
    }
}

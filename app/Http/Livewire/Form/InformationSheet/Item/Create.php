<?php

namespace App\Http\Livewire\Form\InformationSheet\Item;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;
use Event;

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

    public $Item_model = 'App\Models\InformationSheet\Item\Item';
    public $Item_AR_model = 'App\Models\InformationSheet\Item\ApprovalRoutingItems';
    public function render()
    {
        return view('livewire.form.information-sheet.item.create', [
            'title' => 'Item Information Sheet'
        ])->layout('layouts.tabler.app');
    }

    public function rules(){
        return[
            'document_series_no'               => 'nullable',
            'date_processed'      => 'nullable|date',
            'document_purpose_new_registration'         => 'nullable',
            'document_purpose_information_update'             => 'nullable',
            'status_update_active'               => 'nullable',
            'status_update_inactive'           => 'nullable',
            'date_from'        => 'nullable|date',
            'date_to'       => 'nullable|date',
            'item_type_fix_asset'            => 'nullable',
            'item_class_sales_item'       => 'nullable',
            'item_group_fixed_asset'      => 'nullable',
            'item_details_brand'             => 'nullable',
            'item_details_model'          => 'nullable',
            'item_details_generic_description'                => 'nullable',
            'item_details_manufacturer'             => 'nullable',
            'item_details_uom_group'             => 'nullable',
            'item_details_barcode'                   => 'nullable',
            'item_details_country'         => 'nullable',
            'wtax_liable_yes'          => 'nullable',
            'wtax_liable_no'                  => 'nullable',
            'purchasing_data_preferred_vendor'    => 'nullable',
            'purchasing_data_purchasing_uom'  => 'nullable',
            'purchasing_data_packaging_uom'  => 'nullable',
            'purchasing_data_items_per_purchase_unit'  => 'nullable',
            'purchasing_data_qty_per_package'  => 'nullable',
            'purchasing_data_barcode'  => 'nullable',
            'purchasing_data_country'  => 'nullable',
            'PVG_group_capital_goods'  => 'nullable',
            'PVG_group_non_capital_goods'  => 'nullable',
            'PVG_group_services'  => 'nullable',
            'PVG_group_importations'  => 'nullable',
            'PVG_group_non_taxable'  => 'nullable',
            'PVG_group_zero_rated'  => 'nullable',
            'PVG_group_exempt'  => 'nullable',
            'PVG_group_others'  => 'nullable',
            'sales_data_sales_uom'  => 'nullable',
            'sales_data_packaging_uom'  => 'nullable',
            'sales_data_items_per_sales_unit'  => 'nullable',
            'sales_data_qty_per_packages'  => 'nullable',
            'sales_data_barcode'  => 'nullable',
            'sales_data_country'  => 'nullable',
            'SVG_group_capital_goods'    => 'nullable',
            'SVG_group_non_capital_goods'  => 'nullable',
            'SVG_group_services'  => 'nullable',
            'SVG_group_importations'  => 'nullable',
            'SVG_group_non_taxable'  => 'nullable',
            'SVG_group_zero_rated'  => 'nullable',
            'SVG_group_exempt'  => 'nullable',
            'SVG_group_others'  => 'nullable',
            'sales_uom_warehouse'  => 'nullable',
            'sales_uom_item_group'  => 'nullable',
            'sales_uom_item_level'  => 'nullable',
            'valuation_method_standard'  => 'nullable',
            'valuation_method_moving_average'  => 'nullable',
            'valuation_method_batch_serial'  => 'nullable',
            'valuation_method_FIFO'  => 'nullable',
            'manage_inventory_wh_yes'  => 'nullable',
            'manage_inventory_wh_no'  => 'nullable',
            'inventory_uom'  => 'nullable',
            'default_warehouses'  => 'nullable',
            'inventory_level_uom'  => 'nullable',
            'inventory_level_minimum'  => 'nullable',
            'inventory_level_maximum'  => 'nullable',
            'fixed_data_asset_class'    => 'nullable',
            'fixed_data_asset_group'  => 'nullable',
            'fixed_data_depreciation_group'  => 'nullable',
            'fixed_data_inventory_no'  => 'nullable',
            'fixed_data_serial_no'  => 'nullable',
            'fixed_data_location'  => 'nullable',
            'fixed_data_technician'  => 'nullable',
            'fixed_data_employee'  => 'nullable',
            'fixed_data_capitalization_date'  => 'nullable',
            'planning_method_none'  => 'nullable',
            'planning_method_mrp'  => 'nullable',
            'procurement_method_buy'  => 'nullable',
            'procurement_method_make'  => 'nullable',
            'order_method_min_order_qty'  => 'nullable',
            'order_method_lead_time'  => 'nullable',
            'order_method_tolerance'  => 'nullable',
            'phantom_item_yes'  => 'nullable',
            'phantom_item_no'  => 'nullable',
            'issue_method_backflush'  => 'nullable',
            'issue_method_manual'  => 'nullable',    
            'operations_SOPN'  => 'nullable',
            'operations_date'  => 'nullable|date',
            'operations_status'  => 'nullable',
            'supply_chain_human_resource_SOPN'  => 'nullable',
            'supply_chain_human_resource_date'  => 'nullable|date',
            'supply_chain_human_resource_status'  => 'nullable',
            'finance_SOPN'  => 'nullable',
            'finance_date'  => 'nullable|date',
            'finance_status'  => 'nullable',
            'corporate_finance_SOPN'  => 'nullable',
            'corporate_finance_date'  => 'nullable|date',
            'corporate_finance_status'  => 'nullable',
            'audit_SOPN'  => 'nullable',
            'audit_date'  => 'nullable|date',
            'audit_status'  => 'nullable',
            'system_administrator_SOPN'  => 'nullable',
            'system_administrator_date'  => 'nullable|date',
            'system_administrator_status'  => 'nullable',
        ];
    }

    public function create(){
        // $this->validate();
        try{
            DB::beginTransaction();

            $data = $this->Item_model::create([
                'document_series_no'               => $this->document_series_no,
                'date_processed'               => $this->date_processed,
                'document_purpose_new_registration'      => $this->document_purpose_new_registration,
                'document_purpose_information_update'      => $this->document_purpose_information_update,
                'status_update_active'         => $this->status_update_active,
                'status_update_inactive'         => $this->status_update_inactive,
                'date_from'             => $this->date_from,
                'date_to'               => $this->date_to,
                'item_type_new_registration'           => $this->item_type_new_registration,
                'item_type_information_update'        => $this->item_type_information_update,
                'item_class_new_registration'       => $this->item_class_new_registration,
                'item_class_information_update'            => $this->item_class_information_update,
                'project_type_new_registration'       => $this->project_type_new_registration,
                'project_type_information_update'      => $this->project_type_information_update,
                'item_group_DM'             => $this->item_group_DM,
                'item_group_FG'          => $this->item_group_FG,
                'item_group_MI'                => $this->item_group_MI,
                'item_group_MRO'             => $this->item_group_MRO,
                'item_group_labor'             => $this->item_group_labor,
                'item_group_landed'          => $this->item_group_landed,
                'item_group_FA'                => $this->item_group_FA,
                'item_group_MA'             => $this->item_group_MA,
                'item_group_others'             => $this->item_group_others,
                'brand'             => $this->brand,
                'model_specification'          => $this->model_specification,
                'generic_description'                => $this->generic_description,
                'manufacturer'             => $this->manufacturer,
                'uom_group'             => $this->uom_group,
                'barcode'          => $this->barcode,
                'country_of_origin'                => $this->country_of_origin,
                'receiving_treshold'             => $this->receiving_treshold,
                'recall_treshold'             => $this->recall_treshold,
                'shelf_life'             => $this->shelf_life,
                'wtax_liable_yes'             => $this->wtax_liable_yes,
                'wtax_liable_no'                   => $this->wtax_liable_no,
                'purchasing_data_preferred_vendor'         => $this->purchasing_data_preferred_vendor,
                'purchasing_data_purchasing_uom'          => $this->purchasing_data_purchasing_uom,
                'purchasing_data_packaging_uom'          => $this->purchasing_data_packaging_uom,
                'purchasing_data_items_per_purchase_unit'          => $this->purchasing_data_items_per_purchase_unit,
                'purchasing_data_qty_per_package'          => $this->purchasing_data_qty_per_package,
                'purchasing_data_barcode'          => $this->purchasing_data_barcode,
                'purchasing_data_country'          => $this->purchasing_data_country,
                'PVG_group_capital_goods'                  => $this->PVG_group_capital_goods,
                'PVG_group_non_capital_goods'                  => $this->PVG_group_non_capital_goods,
                'PVG_group_services'                  => $this->PVG_group_services,
                'PVG_group_importations'                  => $this->PVG_group_importations,
                'PVG_group_non_taxable'                  => $this->PVG_group_non_taxable,
                'PVG_group_zero_rated'                  => $this->PVG_group_zero_rated,
                'PVG_group_exempt'    => $this->PVG_group_exempt,
                'PVG_group_others'    => $this->PVG_group_others,
                'sales_data_sales_uom'    => $this->sales_data_sales_uom,
                'sales_data_packaging_uom'    => $this->sales_data_packaging_uom,
                'sales_data_items_per_sales_unit'    => $this->sales_data_items_per_sales_unit,
                'sales_data_qty_per_packages'  => $this->sales_data_qty_per_packages,
                'sales_data_barcode'  => $this->sales_data_barcode,
                'sales_data_country'  => $this->sales_data_country,
                'SVG_group_capital_goods'  => $this->SVG_group_capital_goods,
                'SVG_group_non_capital_goods'  => $this->SVG_group_non_capital_goods,
                'SVG_group_services'  => $this->SVG_group_services,
                'SVG_group_importations'  => $this->SVG_group_importations,
                'SVG_group_non_taxable'  => $this->SVG_group_non_taxable,
                'SVG_group_zero_rated'  => $this->SVG_group_zero_rated,
                'SVG_group_exempt'  => $this->SVG_group_exempt,
                'SVG_group_others'  => $this->SVG_group_others,
                'set_accounts_warehouse'  => $this->set_accounts_warehouse,
                'set_accounts_item_group'  => $this->set_accounts_item_group,
                'set_accounts_item_level'  => $this->set_accounts_item_level,
                'valuation_method_standard'  => $this->valuation_method_standard,
                'valuation_method_moving_average'  => $this->valuation_method_moving_average,
                'valuation_method_batch_serial'  => $this->valuation_method_batch_serial,
                'valuation_method_FIFO'  => $this->valuation_method_FIFO,
                'manage_inventory_wh_yes'  => $this->manage_inventory_wh_yes,
                'manage_inventory_wh_no'  => $this->manage_inventory_wh_no,
                'inventory_uom'  => $this->inventory_uom,
                'default_warehouses'  => $this->default_warehouses,
                'inventory_level_uom'  => $this->inventory_level_uom,
                'inventory_level_minimum'  => $this->inventory_level_minimum,
                'inventory_level_maximum'  => $this->inventory_level_maximum,
                'planning_method_none'  => $this->planning_method_none,
                'planning_method_mrp'  => $this->planning_method_mrp,
                'procurement_method_buy'  => $this->procurement_method_buy,
                'procurement_method_make'  => $this->procurement_method_make,
                'order_method_min_order_qty'  => $this->order_method_min_order_qty,
                'order_method_lead_time'  => $this->order_method_lead_time,
                'order_method_tolerance'  => $this->order_method_tolerance,
                'phantom_item_yes'  => $this->phantom_item_yes,
                'phantom_item_no'  => $this->phantom_item_no,
                'issue_method_backflush'  => $this->issue_method_backflush,
                'issue_method_manual'  => $this->issue_method_manual,
                'properties'  => $this->properties,
            ]);

            $this->Item_AR_model::create([
                'item_id'                  => $data->id,
                'operations_SOPN'                       => $this->operations_SOPN,
                'operations_date'  => $this->operations_date,
                'operations_status'  => $this->operations_status,
                'supply_chain_human_resource_SOPN'      => $this->supply_chain_human_resource_SOPN,
                'supply_chain_human_resource_date'      => $this->supply_chain_human_resource_date,
                'supply_chain_human_resource_status'    => $this->supply_chain_human_resource_status,
                'finance_SOPN'                          => $this->finance_SOPN,
                'finance_date'                          => $this->finance_date,
                'finance_status'                        => $this->finance_status,
                'corporate_finance_SOPN'                => $this->corporate_finance_SOPN,
                'corporate_finance_date'                => $this->corporate_finance_date,
                'corporate_finance_status'  => $this->corporate_finance_status,
                'audit_SOPN'  => $this->audit_SOPN,
                'audit_date'  => $this->audit_date,
                'audit_status'  => $this->audit_status,
                'system_administrator_SOPN'  => $this->system_administrator_SOPN,
                'system_administrator_date'  => $this->system_administrator_date,
                'system_administrator_status'  => $this->system_administrator_status,
            ]);

            DB::commit();
            $this->reset();
            return redirect()->route('item.show',$data);
        }catch(Exception $exception){
            DB::rollback();
            Log::error($exception);
            dd($exception);
        }catch (Throwable $throwable) {
            DB::rollback();
            Log::error($throwable);
            dd($throwable);
        }
    }
}

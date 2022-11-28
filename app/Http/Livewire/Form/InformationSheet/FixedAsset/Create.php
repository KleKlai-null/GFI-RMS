<?php

namespace App\Http\Livewire\Form\InformationSheet\FixedAsset;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Throwable;
use Event;
class Create extends Component
{
    public $document_series_no, $date_processed, $document_purpose_new_registration, $document_purpose_information_update, $status_update_active, $status_update_inactive, $date_from, $date_to,
    $item_type_fix_asset, $item_class_sales_item, $item_group_fixed_asset;
    public $item_details_brand, $item_details_model, $item_details_generic_description, $item_details_manufacturer, $item_details_uom_group, $item_details_barcode, $item_details_country;
    public $wtax_liable_yes, $wtax_liable_no;
    public $purchasing_data_preferred_vendor, $purchasing_data_purchasing_uom, $purchasing_data_packaging_uom, $purchasing_data_items_per_purchase_unit,
    $purchasing_data_qty_per_package, $purchasing_data_barcode, $purchasing_data_country;
    public $PVG_group_capital_goods, $PVG_group_non_capital_goods, $PVG_group_services, $PVG_group_importations, $PVG_group_non_taxable,
    $PVG_group_zero_rated, $PVG_group_exempt, $PVG_group_others;
    public $sales_data_sales_uom, $sales_data_packaging_uom, $sales_data_items_per_sales_unit, $sales_data_qty_per_packages, $sales_data_barcode, $sales_data_country;
    public $SVG_group_capital_goods, $SVG_group_non_capital_goods, $SVG_group_services, $SVG_group_importations,
    $SVG_group_non_taxable, $SVG_group_zero_rated, $SVG_group_exempt, $SVG_group_others;
    public $sales_uom_warehouse, $sales_uom_item_group, $sales_uom_item_level;
    public $valuation_method_standard, $valuation_method_moving_average, $valuation_method_batch_serial, $valuation_method_FIFO;
    public $manage_inventory_wh_yes, $manage_inventory_wh_no;
    public $inventory_uom, $default_warehouses;
    public $inventory_level_uom, $inventory_level_minimum, $inventory_level_maximum;
    public $fixed_data_asset_class, $fixed_data_asset_group, $fixed_data_depreciation_group, $fixed_data_inventory_no, $fixed_data_serial_no,
    $fixed_data_location, $fixed_data_technician, $fixed_data_employee, $fixed_data_capitalization_date;
    public $planning_method_none, $planning_method_mrp;
    public $procurement_method_buy, $procurement_method_make;
    public $order_method_min_order_qty, $order_method_lead_time, $order_method_tolerance;
    public $phantom_item_yes, $phantom_item_no;
    public $issue_method_backflush, $issue_method_manual;
    public $property_custodian_SOPN, $property_custodian_date, $property_custodian_status;
    public $general_manager_SOPN, $general_manager_date, $general_manager_status;
    public $finance_SOPN, $finance_date, $finance_status;
    public $corporate_finance_SOPN, $corporate_finance_date, $corporate_finance_status;
    public $audit_SOPN, $audit_date, $audit_status;
    public $system_administrator_SOPN, $system_administrator_date, $system_administrator_status;

    public $FA_model = 'App\Models\InformationSheet\FixedAsset\FixedAsset';
    public $FA_AR_model = 'App\Models\InformationSheet\FixedAsset\ApprovalRoutingFixedAsset';
    public function render()
    {
        return view('livewire.form.information-sheet.fixed-asset.create', [
            'title' => 'Fixed Asset Sheet'
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
            'property_custodian_SOPN'  => 'nullable',
            'property_custodian_date'  => 'nullable|date',
            'property_custodian_status'  => 'nullable',
            'general_manager_SOPN'  => 'nullable',
            'general_manager_date'  => 'nullable|date',
            'general_manager_status'  => 'nullable',
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
        $this->validate();
        try{
            DB::beginTransaction();

            $data = $this->FA_model::create([
                'document_series_no'               => $this->document_series_no,
                'date_processed'               => $this->date_processed,
                'document_purpose_new_registration'      => $this->document_purpose_new_registration,
                'document_purpose_information_update'      => $this->document_purpose_information_update,
                'status_update_active'         => $this->status_update_active,
                'status_update_inactive'         => $this->status_update_inactive,
                'date_from'             => $this->date_from,
                'date_to'               => $this->date_to,
                'item_type_fix_asset'           => $this->item_type_fix_asset,
                'item_class_sales_item'        => $this->item_class_sales_item,
                'item_group_fixed_asset'       => $this->item_group_fixed_asset,
                'item_details_brand'            => $this->item_details_brand,
                'item_details_model'       => $this->item_details_model,
                'item_details_generic_description'      => $this->item_details_generic_description,
                'item_details_manufacturer'             => $this->item_details_manufacturer,
                'item_details_uom_group'          => $this->item_details_uom_group,
                'item_details_barcode'                => $this->item_details_barcode,
                'item_details_country'             => $this->item_details_country,
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
                'sales_uom_warehouse'  => $this->sales_uom_warehouse,
                'sales_uom_item_group'  => $this->sales_uom_item_group,
                'sales_uom_item_level'  => $this->sales_uom_item_level,
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
                'fixed_data_asset_class'  => $this->fixed_data_asset_class,
                'fixed_data_asset_group'  => $this->fixed_data_asset_group,
                'fixed_data_depreciation_group'  => $this->fixed_data_depreciation_group,
                'fixed_data_inventory_no'  => $this->fixed_data_inventory_no,
                'fixed_data_serial_no'  => $this->fixed_data_serial_no,
                'fixed_data_location'  => $this->fixed_data_location,
                'fixed_data_technician'  => $this->fixed_data_technician,
                'fixed_data_employee'  => $this->fixed_data_employee,
                'fixed_data_capitalization_date'  => $this->fixed_data_capitalization_date,
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
            ]);

            $this->FA_AR_model::create([
                'fixed_asset_id'                  => $data->id,
                'property_custodian_SOPN'                       => $this->property_custodian_SOPN,
                'property_custodian_date'  => $this->property_custodian_date,
                'property_custodian_status'  => $this->property_custodian_status,
                'general_manager_SOPN'      => $this->general_manager_SOPN,
                'general_manager_date'      => $this->general_manager_date,
                'general_manager_status'    => $this->general_manager_status,
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
            // return redirect()->route('business-partner.show',$data);
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

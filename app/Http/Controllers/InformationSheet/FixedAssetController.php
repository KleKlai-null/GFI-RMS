<?php

namespace App\Http\Controllers\InformationSheet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformationSheet\FixedAsset\FixedAsset;
use App\Models\InformationSheet\FixedAsset\ApprovalRoutingFixedAsset;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;
use Event;
use App\Events\PDF\fixedassetinformationsheet;
use Carbon\Carbon;

class FixedAssetController extends Controller
{
    public function update(Request $request){
        
        $now = Carbon::now();
        $modified_now = $now->format('Y-m-d H:i:s');

        try{
            DB::beginTransaction();

            $data = FixedAsset::create([
                'document_series_no'                                => $request->document_series_no,
                'date_processed'                                    => $request->date_processed,
                'document_purpose_new_registration'                 => $request->document_purpose_new_registration,
                'document_purpose_information_update'               => $request->document_purpose_information_update,
                'status_update_active'                              => $request->status_update_active,
                'status_update_inactive'                            => $request->status_update_inactive,
                'date_from'                                         => $request->date_from,
                'date_to'                                           => $request->date_to,
                'item_type_fix_asset'                               => $request->item_type_fix_asset,
                'item_class_sales_item'                             => $request->item_class_sales_item,
                'item_group_fixed_asset'                            => $request->item_group_fixed_asset,
                'item_details_brand'                                => $request->item_details_brand,
                'item_details_model'                                => $request->item_details_model,
                'item_details_generic_description'                  => $request->item_details_generic_description,
                'item_details_manufacturer'                         => $request->item_details_manufacturer,
                'item_details_uom_group'                            => $request->item_details_uom_group,
                'item_details_barcode'                              => $request->item_details_barcode,
                'item_details_country'                              => $request->item_details_country,
                'wtax_liable_yes'                                   => $request->wtax_liable_yes,
                'wtax_liable_no'                                    => $request->wtax_liable_no,
                'purchasing_data_preferred_vendor'                  => $request->purchasing_data_preferred_vendor,
                'purchasing_data_purchasing_uom'                    => $request->purchasing_data_purchasing_uom,
                'purchasing_data_packaging_uom'                     => $request->purchasing_data_packaging_uom,
                'purchasing_data_items_per_purchase_unit'           => $request->purchasing_data_items_per_purchase_unit,
                'purchasing_data_qty_per_package'                   => $request->purchasing_data_qty_per_package,
                'PVG_group_capital_goods'                           => $request->PVG_group_capital_goods,
                'PVG_group_non_capital_goods'                       => $request->PVG_group_non_capital_goods,
                'PVG_group_services'                                => $request->PVG_group_services,
                'PVG_group_importations'                            => $request->PVG_group_importations,
                'PVG_group_non_taxable'                             => $request->PVG_group_non_taxable,
                'PVG_group_zero_rated'                              => $request->PVG_group_zero_rated,
                'PVG_group_exempt'                                  => $request->PVG_group_exempt,
                'PVG_group_others'                                  => $request->PVG_group_others,
                'sales_data_sales_uom'                              => $request->sales_data_sales_uom,
                'sales_data_packaging_uom'                          => $request->sales_data_packaging_uom,
                'sales_data_items_per_sales_unit'                   => $request->sales_data_items_per_sales_unit,
                'sales_data_qty_per_packages'                       => $request->sales_data_qty_per_packages,            
                'SVG_group_capital_goods'                           => $request->SVG_group_capital_goods,
                'SVG_group_non_capital_goods'                       => $request->SVG_group_non_capital_goods,
                'SVG_group_services'                                => $request->SVG_group_services,
                'SVG_group_importations'                            => $request->SVG_group_importations,
                'SVG_group_non_taxable'                             => $request->SVG_group_non_taxable,
                'SVG_group_zero_rated'                              => $request->SVG_group_zero_rated,
                'SVG_group_exempt'                                  => $request->SVG_group_exempt,
                'SVG_group_others'                                  => $request->SVG_group_others,
                'sales_uom_warehouse'                               => $request->sales_uom_warehouse,
                'sales_uom_item_group'                              => $request->sales_uom_item_group,
                'sales_uom_item_level'                              => $request->sales_uom_item_level,
                'valuation_method_standard'                         => $request->valuation_method_standard,
                'valuation_method_moving_average'                   => $request->valuation_method_moving_average,
                'valuation_method_batch_serial'                     => $request->valuation_method_batch_serial,
                'valuation_method_FIFO'                             => $request->valuation_method_FIFO,
                'manage_inventory_wh_yes'                           => $request->manage_inventory_wh_yes,
                'manage_inventory_wh_no'                            => $request->manage_inventory_wh_no,
                'inventory_uom'                                     => $request->inventory_uom,
                'default_warehouses'                                => $request->default_warehouses,
                'inventory_level_uom'                               => $request->inventory_level_uom,
                'inventory_level_minimum'                           => $request->inventory_level_minimum,
                'inventory_level_maximum'                           => $request->inventory_level_maximum,
                'fixed_data_asset_class'                            => $request->fixed_data_asset_class,
                'fixed_data_asset_group'                            => $request->fixed_data_asset_group,
                'fixed_data_depreciation_group'                     => $request->fixed_data_depreciation_group,
                'fixed_data_inventory_no'                           => $request->fixed_data_inventory_no,
                'fixed_data_serial_no'                              => $request->fixed_data_serial_no,
                'fixed_data_location'                               => $request->fixed_data_location,
                'fixed_data_technician'                             => $request->fixed_data_technician,
                'fixed_data_employee'                               => $request->fixed_data_employee,
                'fixed_data_capitalization_date'                    => $request->fixed_data_capitalization_date,
                'planning_method_none'                              => $request->planning_method_none,
                'planning_method_mrp'                               => $request->planning_method_mrp,
                'procurement_method_buy'                            => $request->procurement_method_buy,
                'procurement_method_make'                           => $request->procurement_method_make,
                'order_method_min_order_qty'                        => $request->order_method_min_order_qty,
                'order_method_lead_time'                            => $request->order_method_lead_time,
                'order_method_tolerance'                            => $request->order_method_tolerance,
                'phantom_item_yes'                                  => $request->phantom_item_yes,
                'phantom_item_no'                                   => $request->phantom_item_no,
                'issue_method_backflush'                            => $request->issue_method_backflush,
                'issue_method_manual'                               => $request->issue_method_manual,
                'revision'                                          => $request->revision_number,
                'modified'                                          => $modified_now,
                'remarks'                                           => $request->remarks,
                'updated_by'                                        => auth()->user()->username,
            ]);

            ApprovalRoutingFixedAsset::create([
                'fixed_asset_id'                                    => $data->id,
                'property_custodian_SOPN'                           => $request->property_custodian_SOPN,
                'property_custodian_date'                           => $request->property_custodian_date,
                'property_custodian_status'                         => $request->property_custodian_status,
                'general_manager_SOPN'                              => $request->general_manager_SOPN,
                'general_manager_date'                              => $request->general_manager_date,
                'general_manager_status'                            => $request->general_manager_status,
                'finance_SOPN'                                      => $request->finance_SOPN,
                'finance_date'                                      => $request->finance_date,
                'finance_status'                                    => $request->finance_status,
                'corporate_finance_SOPN'                            => $request->corporate_finance_SOPN,
                'corporate_finance_date'                            => $request->corporate_finance_date,
                'corporate_finance_status'                          => $request->corporate_finance_status,
                'audit_SOPN'                                        => $request->audit_SOPN,
                'audit_date'                                        => $request->audit_date,
                'audit_status'                                      => $request->audit_status,
                'system_administrator_SOPN'                         => $request->system_administrator_SOPN,
                'system_administrator_date'                         => $request->system_administrator_date,
                'system_administrator_status'                       => $request->system_administrator_status,
            ]);

            DB::commit();

            Event::dispatch(new fixedassetinformationsheet($data));

            return redirect()->route('fix-asset.show',$data);

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

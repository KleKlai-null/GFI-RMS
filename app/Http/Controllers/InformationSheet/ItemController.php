<?php

namespace App\Http\Controllers\InformationSheet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InformationSheet\Item\Item;
use App\Models\InformationSheet\Item\ApprovalRoutingItems;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Exception;
use Throwable;
use Event;
use App\Events\PDF\iteminformormationsheet;
use Carbon\Carbon;

class ItemController extends Controller
{


    public function update(Request $request){


        // dd($request);
        $now = Carbon::now();
        $modified_now = $now->format('Y-m-d H:i:s');

        try{    
            DB::beginTransaction();

            $data = Item::create([
                'document_series_no'                        => $request->document_series_no,
                'date_processed'                            => $request->date_processed,
                'document_purpose_new_registration'         => $request->document_purpose_new_registration,
                'document_purpose_information_update'       => $request->document_purpose_information_update,
                'status_update_active'                      => $request->status_update_active,
                'status_update_inactive'                    => $request->status_update_inactive,
                'date_from'                                 => $request->date_from,
                'date_to'                                   => $request->date_to,
                'item_type_items'                           => $request->item_type_items,
                'item_type_labor'                           => $request->item_type_labor,
                'item_class_inventory_item'                 => $request->item_class_inventory_item,
                'item_class_sales_item'                     => $request->item_class_sales_item,
                'item_class_purchasing_item'                => $request->item_class_purchasing_item,
                'project_type_materials'                    => $request->project_type_materials,
                'project_type_equipment'                    => $request->project_type_equipment,
                'project_type_labor_and_equipment'          => $request->project_type_labor_and_equipment,
                'project_type_labor'                        => $request->project_type_labor,
                'item_group_DM'                             => $request->item_group_DM,
                'item_group_FG'                             => $request->item_group_FG,
                'item_group_MI'                             => $request->item_group_MI,
                'item_group_MRO'                            => $request->item_group_MRO,
                'item_group_labor'                          => $request->item_group_labor,
                'item_group_landed'                         => $request->item_group_landed,
                'item_group_FA'                             => $request->item_group_FA,
                'item_group_MA'                             => $request->item_group_MA,
                'item_group_others'                         => $request->item_group_others,
                'brand'                                     => $request->brand,
                'model_specification'                       => $request->model_specification,
                'generic_description'                       => $request->generic_description,
                'manufacturer'                              => $request->manufacturer,
                'uom_group'                                 => $request->uom_group,
                'barcode'                                   => $request->barcode,
                'country_of_origin'                         => $request->country_of_origin,
                'receiving_treshold'                        => $request->receiving_treshold,
                'recall_treshold'                           => $request->recall_treshold,
                'shelf_life'                                => $request->shelf_life,
                'wtax_liable_yes'                           => $request->wtax_liable_yes,
                'wtax_liable_no'                            => $request->wtax_liable_no,
                'purchasing_data_preferred_vendor'          => $request->purchasing_data_preferred_vendor,
                'purchasing_data_purchasing_uom'            => $request->purchasing_data_purchasing_uom,
                'purchasing_data_packaging_uom'             => $request->purchasing_data_packaging_uom,
                'purchasing_data_items_per_purchase_unit'   => $request->purchasing_data_items_per_purchase_unit,
                'purchasing_data_qty_per_package'           => $request->purchasing_data_qty_per_package,
                'PVG_group_capital_goods'                   => $request->PVG_group_capital_goods,
                'PVG_group_non_capital_goods'               => $request->PVG_group_non_capital_goods,
                'PVG_group_services'                        => $request->PVG_group_services,
                'PVG_group_importations'                    => $request->PVG_group_importations,
                'PVG_group_non_taxable'                     => $request->PVG_group_non_taxable,
                'PVG_group_zero_rated'                      => $request->PVG_group_zero_rated,
                'PVG_group_exempt'                          => $request->PVG_group_exempt,
                'PVG_group_others'                          => $request->PVG_group_others,
                'sales_data_sales_uom'                      => $request->sales_data_sales_uom,
                'sales_data_packaging_uom'                  => $request->sales_data_packaging_uom,
                'sales_data_items_per_sales_unit'           => $request->sales_data_items_per_sales_unit,
                'sales_data_qty_per_packages'               => $request->sales_data_qty_per_packages,
                'SVG_group_capital_goods'                   => $request->SVG_group_capital_goods,
                'SVG_group_non_capital_goods'               => $request->SVG_group_non_capital_goods,
                'SVG_group_services'                        => $request->SVG_group_services,
                'SVG_group_importations'                    => $request->SVG_group_importations,
                'SVG_group_non_taxable'                     => $request->SVG_group_non_taxable,
                'SVG_group_zero_rated'                      => $request->SVG_group_zero_rated,
                'SVG_group_exempt'                          => $request->SVG_group_exempt,
                'SVG_group_others'                          => $request->SVG_group_others,
                'set_accounts_warehouse'                    => $request->set_accounts_warehouse,
                'set_accounts_item_group'                   => $request->set_accounts_item_group,
                'set_accounts_item_level'                   => $request->set_accounts_item_level,
                'valuation_method_standard'                 => $request->valuation_method_standard,
                'valuation_method_moving_average'           => $request->valuation_method_moving_average,
                'valuation_method_batch_serial'             => $request->valuation_method_batch_serial,
                'valuation_method_FIFO'                     => $request->valuation_method_FIFO,
                'manage_inventory_wh_yes'                   => $request->manage_inventory_wh_yes,
                'manage_inventory_wh_no'                    => $request->manage_inventory_wh_no,
                'inventory_uom'                             => $request->inventory_uom,
                'default_warehouses'                        => $request->default_warehouses,
                'inventory_level_uom'                       => $request->inventory_level_uom,
                'inventory_level_minimum'                   => $request->inventory_level_minimum,
                'inventory_level_maximum'                   => $request->inventory_level_maximum,
                'planning_method_none'                      => $request->planning_method_none,
                'planning_method_mrp'                       => $request->planning_method_mrp,
                'procurement_method_buy'                    => $request->procurement_method_buy,
                'procurement_method_make'                   => $request->procurement_method_make,
                'order_method_min_order_qty'                => $request->order_method_min_order_qty,
                'order_method_lead_time'                    => $request->order_method_lead_time,
                'order_method_tolerance'                    => $request->order_method_tolerance,
                'phantom_item_yes'                          => $request->phantom_item_yes,
                'phantom_item_no'                           => $request->phantom_item_no,
                'issue_method_backflush'                    => $request->issue_method_backflush,
                'issue_method_manual'                       => $request->issue_method_manual,
                'properties'                                => $request->properties,
                'revision'                                  => $request->revision_number,
                'modified'                                  => $modified_now,
                'remarks'                                   => $request->remarks,
                'updated_by'                                => auth()->user()->username,
            ]);

            ApprovalRoutingItems::create([
                'item_id'                                   => $data->id,
                'operations_SOPN'                           => $request->operations_SOPN,
                'operations_date'                           => $request->operations_date,
                'operations_status'                         => $request->operations_status,
                'supply_chain_human_resource_SOPN'          => $request->supply_chain_human_resource_SOPN,
                'supply_chain_human_resource_date'          => $request->supply_chain_human_resource_date,
                'supply_chain_human_resource_status'        => $request->supply_chain_human_resource_status,
                'finance_SOPN'                              => $request->finance_SOPN,
                'finance_date'                              => $request->finance_date,
                'finance_status'                            => $request->finance_status,
                'corporate_finance_SOPN'                    => $request->corporate_finance_SOPN,
                'corporate_finance_date'                    => $request->corporate_finance_date,
                'corporate_finance_status'                  => $request->corporate_finance_status,
                'audit_SOPN'                                => $request->audit_SOPN,
                'audit_date'                                => $request->audit_date,
                'audit_status'                              => $request->audit_status,
                'system_administrator_SOPN'                 => $request->system_administrator_SOPN,
                'system_administrator_date'                 => $request->system_administrator_date,
                'system_administrator_status'                => $request->system_administrator_status,
            ]);

            DB::commit();

            Event::dispatch(new iteminformormationsheet($data));

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

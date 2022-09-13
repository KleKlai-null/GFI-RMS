<?php

namespace App\Http\Resources;

use App\Http\Resources\FormApprovalResource;
use App\Http\Resources\FormItemsResource;
use App\Http\Resources\FormStatusResource;
use Illuminate\Http\Resources\Json\JsonResource;

class WsmiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'                    => $this->id,
            'author'                => $this->user_name,
            'customer_name'         => $this->customer_name,
            'document_series_no'    => $this->document_series_no,
            'pallet_no'             => $this->pallet_no,
            'warehouse'             => $this->warehouse,
            'wh_location'           => $this->wh_location,
            'profit_center'         => $this->profit_center,
            'sub_profit_center'     => $this->sub_profit_center,
            'sales_order_number'    => $this->sales_order_number,
            'prepared_by'           => $this->prepared_by,
            'approved_by'           => $this->approved_by,
            'released_by'           => $this->released_by,
            'checked_by'            => $this->checked_by,
            'noted_by'              => $this->noted_by,
            'status'                => $this->status,
            'created_date'          => $this->created_at->format('M d, Y'),
            'created_time'          => $this->created_at->format('h:i A'),
            'items'                 => FormItemsResource::collection($this->items),
            'approval_department'   => FormApprovalResource::collection($this->approval)
        ];
    }
}

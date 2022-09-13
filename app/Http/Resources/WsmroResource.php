<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WsmroResource extends JsonResource
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
            'document_series_no'    => $this->document_series_no,
            'profit_center'         => $this->profit_center,
            'sub_profit_center'     => $this->sub_profit_center,
            'cost_center'           => $this->cost_center,
            'prepared_by'           => $this->prepared_by,
            'approved_by'           => $this->approved_by,
            'released_by'           => $this->released_by,
            'checked_by'            => $this->checked_by,
            'noted_by'              => $this->noted_by,
            'items'                 => FormItemsResource::collection($this->items)
            // 'approval_department'   => FormApprovalResource::collection($this->approval)
        ];
    }
}

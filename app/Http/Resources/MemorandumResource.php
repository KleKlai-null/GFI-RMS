<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MemorandumResource extends JsonResource
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
            'id_no'                 => $this->id_no,
            'name_of_employee'      => $this->name_of_employee,
            'department'            => $this->department,
            'section'               => $this->section,
            'asset_code'            => $this->asset_code,
            'asset_type'            => $this->asset_type,
            'asset_description'     => $this->asset_description,
            'asset_serial_no'       => $this->asset_serial_no,
            'asset_value'           => $this->asset_value,
            'prepared_by'           => $this->prepared_by,
            'approved_by'           => $this->approved_by,
            'released_by'           => $this->released_by,
            'checked_by'            => $this->checked_by,
            'noted_by'              => $this->noted_by,
            'created_date'          => $this->created_at->format('M d, Y'),
            'created_time'          => $this->created_at->format('h:i A')
        ];
    }
}

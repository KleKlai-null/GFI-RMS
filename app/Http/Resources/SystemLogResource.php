<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SystemLogResource extends JsonResource
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
            'date_time'     => $this->created_at->format('M d, Y h:i A'),
            'event'         => $this->event,
            'description'   => $this->description,
            'properties'    => $this->properties
        ];
    }
}

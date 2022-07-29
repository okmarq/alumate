<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SchoolsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (string) $this->id,
            'name' => $this->name,
            'state' => $this->state,
            'country' => $this->country,
            'logo' => $this->logo,
            'type' => $this->type,
            'image_id' => $this->image_id,
            'city_id' => $this->city_id,
            'verified' => $this->verified,
            'city' => $this->city,
            'user_id' => $this->user_id,
            'state_id' => $this->state_id,
            'color' => $this->color,
            'status' => $this->status,
            'year' => $this->year,
        ];
    }
}

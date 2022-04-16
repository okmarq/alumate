<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlumniResource extends JsonResource
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
            'id' => $this->id,
            'group_id' => $this->group,
            'user_id' => $this->user,
            'school_id' => $this->school,
            'description' => $this->description,
            'is_admin' => $this->is_admin,
            'admission_year' => $this->admission_year,
            'graduation_year' => $this->graduation_year
        ];
    }
}

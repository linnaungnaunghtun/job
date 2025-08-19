<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'company_name' => $this->company_name,
            'description' => $this->description,
            'image' => $this->image,
            'salary' => $this->salary,
            'working_hours' => $this->working_hours,
            'location' => $this->location,
            'category' => $this->category,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecommedResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
        $answers = [
            $this->problem,
            $this->environment,
            $this->work,
            $this->subject,
            $this->motivate,
            $this->stress,
            $this->skill,
            $this->success,
            $this->personality,
            $this->creativity,
        ];

        $counts = array_count_values($answers);
        $mostFrequent = array_search(max($counts), $counts);
        return [
            'id' => $this->id,
            'problem' => $this->problem,
            'environment' => $this->environment,
            'work' => $this->work,
            'subject' => $this->subject,
            'motivate' => $this->motivate,
            'stress' => $this->stress,
            'skill' => $this->skill,
            'success' => $this->success,
            'personality' => $this->personality,
            'creativity' => $this->creativity,
            'user_id' => $this->user,
            'most_frequent_answer' => $mostFrequent,
        ];
    }
}

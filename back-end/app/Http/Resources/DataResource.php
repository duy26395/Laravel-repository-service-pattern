<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $dataResource = parent::toArray($request);
        return [
            "total" => $dataResource['total'],
            "current_page" => $dataResource['current_page'],
            "data" => $dataResource['data'],
        ];
    }
}

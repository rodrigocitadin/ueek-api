<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "cep" => $this->cep,
            "city" => $this->city,
            "street" => $this->street,
            "district" => $this->district,
            "number" => $this->number,
            "state" => $this->state,
        ];
    }
}

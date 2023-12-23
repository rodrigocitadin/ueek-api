<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'selected_numbers' => $this->selected_numbers,
            'amount' => $this->amount,
            'user_id' => $this->user_id,
            'numbers_id' => $this->numbers_id
        ];
    }
}

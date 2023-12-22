<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'is_paid',
        'selected_numbers',
        'user_id',
        'numbers_id'
    ];

    protected $casts = [
        'selected_numbers' => 'array'
    ];
}

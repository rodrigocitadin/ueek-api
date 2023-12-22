<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Numbers extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    protected $fillable = [
        'available',
        'taken',
        'price'
    ];

    protected $casts = [
        'available' => 'array',
        'taken' => 'array',
        'price' => 'decimal:<8,2>'
    ];
}

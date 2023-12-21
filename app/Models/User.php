<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function numbers()
    {
        return $this->belongsToMany(
            Numbers::class,
            'transactions',
            'user_id',
            'numbers_id'
        );
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    protected $fillable = [];
}

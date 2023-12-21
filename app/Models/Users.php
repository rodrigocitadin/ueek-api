<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function numbers()
    {
        return $this->belongsToMany(Numbers::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}

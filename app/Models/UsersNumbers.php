<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersNumbers extends Model
{
    use HasFactory;

    public function transaction()
    {
        return $this->hasOne(Transactions::class);
    }
}

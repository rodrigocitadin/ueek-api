<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function getAllUsers()
    {
        return User::all();
    }
}

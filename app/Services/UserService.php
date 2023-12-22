<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function getAll()
    {
        $users = User::all();

        return $users;
    }

    public static function getById(string $id)
    {
        $user = User::findOrFail($id);

        return $user;
    }

    public static function create($data)
    {
        $user = User::create($data);

        return $user;
    }
}

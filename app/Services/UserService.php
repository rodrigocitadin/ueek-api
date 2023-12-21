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

    public static function getByCpf(string $cpf)
    {
        $user = User::firstWhere('cpf', $cpf) ?? null;

        return $user;
    }

    public static function getByEmail(string $email)
    {
        $user = User::firstWhere('email', $email) ?? null;

        return $user;
    }

    public static function create($data)
    {
        $user = User::create($data);

        return $user;
    }

    public static function update($data, int $id)
    {
        $user = User::find((int)$id)->update($data);

        return $user;
    }
}

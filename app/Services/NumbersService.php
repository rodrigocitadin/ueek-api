<?php

namespace App\Services;

use App\Models\Numbers;

class NumbersService
{
    public static function getAll()
    {
        $numbers = Numbers::all();

        return $numbers;
    }

    public static function getById(string $id)
    {
        $numbers = Numbers::findOrFail($id);

        return $numbers;
    }

    public static function create($data)
    {
        $numbers = Numbers::create($data);

        return $numbers;
    }

    public static function update($data, $id)
    {
        $numbers = NumbersService::getById($id)->update($data);

        return (bool) $numbers;
    }
}

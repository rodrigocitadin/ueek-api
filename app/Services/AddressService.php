<?php

namespace App\Services;

use App\Models\Address;

class AddressService
{
    public static function getAll()
    {
        return Address::all();
    }

    public static function getById(int $id)
    {
        $address = Address::find((int)$id);

        return $address;
    }

    public static function create($data)
    {
        $address = Address::create($data);

        return $address;
    }
}

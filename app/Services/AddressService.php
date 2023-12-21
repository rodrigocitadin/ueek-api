<?php

namespace App\Services;

use App\Models\Address;

class AddressService
{
    public static function getAll()
    {
        $addresses = Address::all();

        return $addresses;
    }

    public static function getById($id)
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

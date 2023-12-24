<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAddressRequest;
use App\Http\Resources\AddressResource;
use App\Services\AddressService;

class AddressController extends Controller
{
    public function index()
    {
        $users = AddressService::getAll();

        return AddressResource::collection($users);
    }

    public function show(string $id)
    {
        $user = AddressService::getById($id);

        return new AddressResource($user);
    }

    function store(StoreAddressRequest $request)
    {
        $data = $request->validated();

        $user = AddressService::create($data);

        return new AddressResource($user);
    }
}

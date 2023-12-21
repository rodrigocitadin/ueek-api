<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\AddressService;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserService::getAll();

        return UserResource::collection($users);
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $address = AddressService::create($request->address);

        $request['address_id'] = $address['id'];

        $user = UserService::create($request->all());

        return new UserResource($user);
    }
}

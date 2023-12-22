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

        $data = $request->all();

        $address = AddressService::create($data['address']);

        $data['address_id'] = $address['id'];

        $user = UserService::create($data);

        return new UserResource($user);
    }
}

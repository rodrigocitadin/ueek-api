<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Address;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserService::getAllUsers();

        return UserResource::collection($users);
    }

    // function create(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'cpf' => 'required',
    //         'phone' => 'required',
    //         'address' => 'required',
    //     ]);

    //     $addr = Address::create($request->address);

    //     $request['address_id'] = $addr['id'];

    //     $user = User::create($request->all());

    //     return response()->json($user);
    // }
}

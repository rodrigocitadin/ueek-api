<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $addr = Address::create($request->address);

        $request['address_id'] = $addr['id'];

        $user = User::create($request->all());

        return response()->json($user);
    }
}

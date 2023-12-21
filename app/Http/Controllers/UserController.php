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

        // $address = Address::create([

        // ]);

        // $user = User::create([
        //     'name' => $content->name,
        //     'email' => $content->email,
        //     'cpf' => $content->cpf,
        //     'phone' => $content->phone,
        //     'address' => $address->id,
        //     'name' => $content->name,
        // ]);

        return response()->json($addr);
    }
}

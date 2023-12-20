<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function create(Request $request)
    {
        return response()->json(['sla' => false]);
    }
}

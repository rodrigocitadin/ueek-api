<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;

class UserController extends Controller
{
    public function index()
    {
        $users = UserService::getAll();

        return UserResource::collection($users);
    }

    public function show(string $id)
    {
        $user = UserService::getById($id);

        return new UserResource($user);
    }

    function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        $user = UserService::create($data);

        return new UserResource($user);
    }
}

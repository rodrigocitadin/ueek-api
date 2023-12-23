<?php

namespace App\Http\Controllers;

use App\Http\Resources\NumbersResource;
use App\Services\NumbersService;
use Illuminate\Http\Request;

class NumbersController extends Controller
{
    public function index()
    {
        $numbers = NumbersService::getAll();

        return NumbersResource::collection($numbers);
    }

    public function show(string $id)
    {
        $numbers = NumbersService::getById($id);

        return new NumbersResource($numbers);
    }

    public function update(Request $request, string $id)
    {
        $numbers = NumbersService::update($request->all(), $id);

        if (!$numbers) return response()->json(['error' => 'bad request'], 400);

        return response()->json(['success' => 'ok'], 200);
    }
}

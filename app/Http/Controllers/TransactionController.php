<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Services\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = TransactionService::getAll();

        return TransactionResource::collection($transactions);
    }

    public function show(string $id)
    {
        $transaction = TransactionService::getById($id);

        return new TransactionResource($transaction);
    }

    public function store(Request $request)
    {
        $request->validate([
            'selected_numbers' => 'required',
            'user_id' => 'required',
            'numbers_id' => 'required',
        ]);

        $transaction = TransactionService::create($request->all());

        return new TransactionResource($transaction);
    }
}

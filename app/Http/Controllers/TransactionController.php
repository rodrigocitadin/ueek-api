<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTransactionRequest;
use App\Http\Resources\TransactionResource;
use App\Services\TransactionService;

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

    public function store(StoreTransactionRequest $request)
    {
        $data = $request->validated();

        $transaction = TransactionService::create($data);

        if (array_key_exists('message', $transaction)) {
            return response()->json(
                $transaction,
                422
            );
        }

        return new TransactionResource($transaction);
    }
}

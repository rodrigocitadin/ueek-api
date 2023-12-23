<?php

namespace App\Services;

use App\Models\Transaction;

class TransactionService
{
    public static function getAll()
    {
        $transactions = Transaction::all();

        return $transactions;
    }

    public static function getById(string $id)
    {
        $transaction = Transaction::findOrFail($id);

        return $transaction;
    }

    public static function getByNumber(array $number)
    {
        $transaction = Transaction::where('numbers', [$number]);

        return $transaction;
    }


    public static function create($data)
    {
        $user = UserService::getById($data['user_id']);
        $numbers = NumbersService::getById($data['numbers_id']);

        if ($user && $numbers) {
            $isNumbersNotAvailable = in_array($numbers->taken, $data['selected_numbers']);

            if ($isNumbersNotAvailable) return response()->json(['error' => 'bad request'], 400);
        }

        $transaction = Transaction::create($data);

        return $transaction;
    }
}

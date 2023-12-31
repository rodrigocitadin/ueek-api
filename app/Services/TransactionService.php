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

        if (!$user) return ['message' => 'user not found'];

        if (!$numbers) return ['message' => 'numbers not found'];

        $notAvailable = TransactionService::verifyNumbersDisponibility(
            $numbers['taken'],
            $data['selected_numbers']
        );

        if ($notAvailable) return ['message' => 'unavailable numbers'];

        $data['is_paid'] = true;
        $data['amount'] = (float) ($numbers['price'] * count($data['selected_numbers']));

        $transaction = Transaction::create($data);

        $numbersToUpdate = [
            'taken' => array_merge($numbers['taken'], $transaction['selected_numbers']),
            'available' => array_diff($numbers['available'], $transaction['selected_numbers'])
        ];

        NumbersService::update($numbersToUpdate, $numbers['id']);

        return $transaction;
    }

    private static function verifyNumbersDisponibility($numbers, $selected_numbers)
    {
        foreach ($selected_numbers as $num) {
            if (in_array($num, $numbers)) return true;
        }
    }
}

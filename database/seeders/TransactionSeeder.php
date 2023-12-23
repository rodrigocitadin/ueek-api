<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    public const SELECTED_NUMBERS = [9, 17, 28, 34, 55, 62, 63, 77, 80];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $numbers = implode(',', TransactionSeeder::SELECTED_NUMBERS);
        $now = Carbon::now();

        $data = [
            'user_id' => 1,
            'numbers_id' => 1,
            'selected_numbers' => "[$numbers]",
            'amount' => count(TransactionSeeder::SELECTED_NUMBERS) * NumbersSeeder::PRICE,
            'is_paid' => true,
            'created_at' => $now,
            'updated_at' => $now
        ];

        DB::table('transaction')->insert($data);
    }
}

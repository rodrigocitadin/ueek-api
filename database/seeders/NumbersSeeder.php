<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumbersSeeder extends Seeder
{
    public const PRICE = 5;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $available = array_diff(range(1, 80), TransactionSeeder::SELECTED_NUMBERS);

        $taken = implode(',', TransactionSeeder::SELECTED_NUMBERS);
        $available = implode(',', $available);

        $now = Carbon::now();

        $data = [
            'available' => "[$available]",
            'taken' => "[$taken]",
            'price' => NumbersSeeder::PRICE,
            'created_at' => $now,
            'updated_at' => $now
        ];

        DB::table('numbers')->insert($data);
    }
}

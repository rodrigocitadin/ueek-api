<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumbersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $available = implode(',', range(1, 65));
        $taken = implode(',', range(66, 80));

        DB::table('numbers')->insert([
            'available' =>  "[$available]",
            'taken' => "[$taken]",
            'price' => 4.5
        ]);
    }
}

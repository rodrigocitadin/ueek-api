<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            'name' => 'Rodrigo Lorenzetti',
            'email' => 'rodrigo@ueek.digital',
            'cpf' => '00000000000',
            'phone' => '49991009190',
            'address_id' => 1,
            'created_at' => $now,
            'updated_at' => $now
        ];

        DB::table('user')->insert($data);
    }
}

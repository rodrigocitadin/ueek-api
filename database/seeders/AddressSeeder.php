<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        $data = [
            'cep' => '88501000',
            'city' => 'lajaika',
            'street' => 'rua das laranjas',
            'district' => 'centro',
            'number' => 1349,
            'state' => 'santa catarina',
            'created_at' => $now,
            'updated_at' => $now
        ];

        DB::table('address')->insert($data);
    }
}

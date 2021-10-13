<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccreditationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accreditation')->insert([
            [
                'accreditation' => 'A',
            ],
            [
                'accreditation' => 'B',
            ],
            [
                'accreditation' => 'C'
            ],
            [
                'accreditation' => 'Belum terakreditasi',
            ],
            [
                'accreditation' => 'Tidak terakreditasi'
            ]
        ]);
    }
}

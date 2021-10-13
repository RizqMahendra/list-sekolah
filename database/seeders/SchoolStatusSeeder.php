<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school_status')->insert([
            [
                'status' => 'Negeri',
            ],
            [
                'status' => 'Swasta',
            ],
        ]);
    }
}

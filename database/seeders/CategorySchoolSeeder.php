<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_school')->insert([
            [
                'category' => 'Institut',
            ],
            [
                'category' => 'Universitas',
            ],
            [
                'category' => 'Politeknik'
            ],
            [
                'category' => 'Sekolah Tinggi',
            ],
            [
                'category' => 'Akademi'
            ]
        ]);
    }
}

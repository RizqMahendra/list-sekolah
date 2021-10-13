<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    const PROVINCE_URL = 'https://dev.farizdotid.com/api/daerahindonesia/provinsi';

    public function run()
    {
        $response = Http::get(self::PROVINCE_URL);
        $data = $response->json()['provinsi'];
        foreach($data as $value) {
            DB::table('province')->insert([
                'id'   => $value['id'],
                'nama' => $value['nama'],
            ]);
        }
    }
}

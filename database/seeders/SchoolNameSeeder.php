<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SchoolNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('school')->insert([
            [
                'accreditation_id'   => 1,
                'category_school_id' => 1,
                'school_status_id'   => 1,
                'province_id'        => 31,
                'school_logo'        => 'https://file.maukuliah.id/img/logo/_thumb/s/1592470860.webp',
                'school_photo'       => json_encode(['https://file.maukuliah.id/img/gallery/032009//1592550023_DSC00461.png','https://file.maukuliah.id/img/gallery/032009//1592550013_DSC00167.png','https://file.maukuliah.id/img/gallery/032009//1592549985_DSC00158.png']),
                'address'            => 'Jl. Yos Sudarso Kav 85 No.87, RT.9/RW.11, Sunter, Jakarta Utara, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14350',
                'website'            => null,
                'phone'              => '(021) 65307062',
                'socials'            => json_encode(['https://facebook.com/kkgsob','https://twitter.com/kwikkiangie_edu','https://instagram.com/kwikkiangie_edu']),
                'name'               => 'Institut Bisnis Dan Informatika Kwik Kian Gie',
                'description'        => '"1987 Institut Bisnis Indonesia Berdiri di prakasai oleh Kwik Kian Gie bersama praktisi-praktisi bisnis yang berprestasi dalam bidangnya yaitu, yaitu Kaharudin Ongko dan Djoenaedi Joesoef. 1993 Institut Bisnis Indonesia berubah menjadi Sekolah Tinggi Ilmu Ekonomi (STIE). STIE IBII menyelenggarakan pendidikan jenjang Sarjana yaitu Program Studi Manajemen dan Program Studi Akuntansi. Mulai tahun ini pula STIE IBII menyelengarakan pendidikan jenjang Program Magister dengan membuka Program Studi Magister Manajemen dengan konsentrasi Manajemen Keuangan dan Manajemen Pemasaran 2004 STIE IBII melengkapi pelayanannya dengan membuka Program Doktoral ilmu manajemen 2005 STIE IBII membuka Program Studi Magister Akuntansi. Pada bulan Maret, STIE IBII berubah menjadi Institut Bisnis dan Informatika Indonesia (IBII) dan menambah empat program studi baru jenjang S1 yaitu: Sistem Informasi, Teknik Informatika, Ilmu Komunikasi, dan Ilmu Administrasi. 2012 IBII berubah nama menjadi Institut Bisnis dan Informatika Kwik Kian Gie atau biasa disebut Kwik Kian Gie School of Business."',
                'created_at'         => Carbon::now(),
                'majors'             => 'Sistem Informasi, Teknik Informatika, Manajemen Bisnis, Akuntansi, Bahasa Mandarin',
                'updated_at'         => Carbon::now(),
                'operational_hour'   => null,
                'longtitude'         => null,
                'lattitude'          => null,
                'costs'              => null,
                'registration_time'  => null,

            ]
        ]);
    }
}

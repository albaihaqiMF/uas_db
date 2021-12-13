<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $mk_table = DB::table('mata_kuliah');
        $mahasiswa_table = DB::table('mahasiswa');
        $dosen_table = DB::table('dosen');
        $bm_table = DB::table('bidang_minat');
        $mk_mahasiswa_table = DB::table('mahasiswa_mata_kuliah');

        $bm = [
            [
                'kode_bm'        => 1,
                'nama_bm'   => 'TIK',
            ],
            [
                'kode_bm'        => 2,
                'nama_bm'   => 'SI',
            ],
            [
                'kode_bm'        => 3,
                'nama_bm'   => 'Bidcom',
            ],
            [
                'kode_bm'        => 4,
                'nama_bm'   => 'FTV',
            ]
        ];

        $bm_table->insert($bm);


        $dosen = [
            [
                'kode_dose'     => 11,
                'nama_dosen'    => 'Bayu',
                'alamat'        => 'Malang',
                'bidang_minat'  => '1',
            ],
        ];
    }
}

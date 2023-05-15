<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([

        'nama'=>'joselyn',
        'nomor_induk'=>'3312',
        'alamat'=>'Washington DC',
        'created_at'=>date('y-m-d H:i:s')

        ]);

        DB::table('siswa')->insert([

        'nama'=>'jolyne',
        'nomor_induk'=>'3313',
        'alamat'=>'Florida',
        'created_at'=>date('y-m-d H:i:s')

        ]);

        DB::table('siswa')->insert([

        'nama'=>'josuke',
        'nomor_induk'=>'3314',
        'alamat'=>'Morioh',
        'created_at'=>date('y-m-d H:i:s')

        ]);
    }
}

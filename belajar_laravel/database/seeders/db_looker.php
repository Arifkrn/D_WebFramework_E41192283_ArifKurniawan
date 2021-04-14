<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class db_looker extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaan')->insert([
            'nama' => 'PT majumundur',
            'alamat' => 'surabaya',
            'nohp' => '088888',
        ]);

        DB::table('info')->insert([
            'deskripsi' => 'merupakan perusahaan di bidang IT',
        ]);

        DB::table('lokasi')->insert([
            'lokasi' => 'surabaya',
        ]);

        DB::table('pelamar')->insert([
            'pelamar' => 'jono',
        ]);
    }
}

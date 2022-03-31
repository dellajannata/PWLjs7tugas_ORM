<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            [
                'nim' => '2041720119',
                'nama' => 'Delia',
                'tanggalLahir' => '2001-01-12',
                'kelas' => 'TI-2E',
                'jurusan' => 'Teknologi Informasi',
                'nohp' => '081344446666',
                'email' => 'del@gmail.com'
            ]
        ]);
    }
}

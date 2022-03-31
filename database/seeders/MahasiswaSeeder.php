<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
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
                'nim' => '2041720034',
                'nama' => 'Della Jannata F',
                'kelas' => 'TI-2E',
                'jurusan' => 'Teknologi Informasi',
                'nohp' => '081344446666'
            ],
            [
                'nim' => '2041720035',
                'nama' => 'Dea Nada',
                'kelas' => 'TI-2E',
                'jurusan' => 'Teknologi Informasi',
                'nohp' => '081344447777'
            ]
        ]);
    }
}

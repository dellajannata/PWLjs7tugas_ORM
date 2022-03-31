<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggan')->insert([
            [
            'nama' => 'Dea Nada',
            'alamat' => 'Jember',
            'email' => 'deanada@gmail.com',
            'foto' => 'p1.png',
            'noTelp' => '085816281922',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Sezha Dwi',
            'alamat' => 'Mojokerto',
            'email' => 'sezha@gmail.com',
            'foto' => 'p2.png',
            'noTelp' => '085817771922',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Lisa Ayu',
            'alamat' => 'Mojokerto',
            'email' => 'lisaAyu@gmail.com',
            'foto' => 'p3.png',
            'noTelp' => '085816281933',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Dina P.',
            'alamat' => 'Jogja',
            'email' => 'din@gmail.com',
            'foto' => 'p4.png',
            'noTelp' => '085816281222',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Zahra Nisva',
            'alamat' => 'Jogja',
            'email' => 'Zahra@gmail.com',
            'foto' => 'p5.png',
            'noTelp' => '085216281922',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Daffa R',
            'alamat' => 'Jombang',
            'email' => 'Daff@gmail.com',
            'foto' => 'p6.png',
            'noTelp' => '085816281333',
            'jenisKelamin' => '0'
            ],
            [
            'nama' => 'Puspita Rahma',
            'alamat' => 'Mojokerto',
            'email' => 'Puspita@gmail.com',
            'foto' => 'p7.png',
            'noTelp' => '085816281955',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Izzatur',
            'alamat' => 'Mojokerto',
            'email' => 'Izz@gmail.com',
            'foto' => 'p8.png',
            'noTelp' => '085816281977',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Fifi',
            'alamat' => 'Jogja',
            'email' => 'fif@gmail.com',
            'foto' => 'p9.png',
            'noTelp' => '085815551922',
            'jenisKelamin' => '1'
            ],
            [
            'nama' => 'Faizal N.',
            'alamat' => 'Jogja',
            'email' => 'faizal@gmail.com',
            'foto' => 'p10.png',
            'noTelp' => '085812221922',
            'jenisKelamin' => '0'
            ]
        ]);
    }
}
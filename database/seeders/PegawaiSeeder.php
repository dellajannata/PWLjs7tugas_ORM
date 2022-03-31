<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawai')->insert([
            [
            'foto' => 'Amirul Anam.jpg',
            'nama' => 'Amirul Anam',
            'jenisKelamin' => '0',
            'profesi' => 'Customer Service',
            'email' => 'amirul@gmail.com'
            ],
            [
            'foto' => 'Boy Candra.jpg',
            'nama' => 'Boy Candra',
            'jenisKelamin' => '0',
            'profesi' => 'Maintener',
            'email' => 'boy@gmail.com'
            ],
            [
            'foto' => 'Ika Sari.jpg',
            'nama' => 'Ika Sari',
            'jenisKelamin' => '1',
            'profesi' => 'Customer Service',
            'email' => 'ika@gmail.com'
            ],
            [
            'foto' => 'Bima Pratama.jpg',
            'nama' => 'Bima Pratama',
            'jenisKelamin' => '0',
            'profesi' => 'Maintener',
            'email' => 'bima@gmail.com'
            ],
            [
            'foto' => 'Cindy Putri.jpg',
            'nama' => 'Cindy Putri',
            'jenisKelamin' => '1',
            'profesi' => 'Customer Service',
            'email' => 'cindy@gmail.com'
            ],
            [
            'foto' => 'Violanda Dewi.jpg',
            'nama' => 'Violanda Dewi',
            'jenisKelamin' => '1',
            'profesi' => 'Maintener',
            'email' => 'viola@gmail.com'
            ],
            [
            'foto' => 'Sekar Ayu.jpg',
            'nama' => 'Sekar Ayu',
            'jenisKelamin' => '1',
            'profesi' => 'Maintener',
            'email' => 'sekar@gmail.com'
            ]

            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
            'namaBarang' => 'Charming Hosting SSD',
            'harga' => 'Rp. 10.900/bln',
            'deskripsi' => 'SSD Space 400 MB, Bandwidth/bulan Unmetered, Panel cPanel ',
            'gambar' => 'b1.png'
            ],
            [
            'namaBarang' => 'Cute Hosting SSD',
            'harga' => 'Rp. 19.900/bln',
            'deskripsi' => 'SSD Space 2 GB, Bandwidth/bulan Unmetered, Panel cPanel, Gratis Domain Baru 1 tahun',
            'gambar' => 'b2.png'
            ],
            [
            'namaBarang' => 'Awesome Hosting SSD',
            'harga' => 'Rp. 26.900/bln',
            'deskripsi' => 'SSD Space 5 GB, Bandwidth/bulan Unmetered, Panel cPanel, Gratis 1 Domain Seumur Hidup',
            'gambar' => 'b3.png'
            ],
            [
            'namaBarang' => 'Fantastic Hosting SSD',
            'harga' => 'Rp. 86.900/bln',
            'deskripsi' => 'SSD Space 8 GB, Bandwidth/bulan Unmetered, Panel cPanel, Gratis 1 Domain Seumur Hidup',
            'gambar' => 'b4.png'
            ],
            [
            'namaBarang' => 'Corporate Hosting SSD',
            'harga' => 'Rp. 300.900/bln',
            'deskripsi' => 'SSD Space 15 GB, Bandwidth/bulan Unmetered, Panel cPanel, Gratis 1 Domain Seumur Hidup',
            'gambar' => 'b5.png'
            ]
        ]);
    }
}
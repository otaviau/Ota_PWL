<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'KTG01', 'kategori_nama' => 'Makanan'],
            ['kategori_kode' => 'KTG02', 'kategori_nama' => 'Minuman'],
            ['kategori_kode' => 'KTG03', 'kategori_nama' => 'Snack'],
            ['kategori_kode' => 'KTG04', 'kategori_nama' => 'ATK'],
            ['kategori_kode' => 'KTG05', 'kategori_nama' => 'Elektronik'],
        ];

        foreach ($data as $item) {
            DB::table('m_kategori')->insert([
                'kategori_kode' => $item['kategori_kode'],
                'kategori_nama' => $item['kategori_nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
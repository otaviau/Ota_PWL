<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $barang = [];

        $no = 1;
        for ($supplier = 1; $supplier <= 3; $supplier++) {
            for ($i = 1; $i <= 5; $i++) {

                $barang[] = [
                    'kategori_id' => rand(1,5),
                    'supplier_id' => $supplier,
                    'barang_kode' => 'BRG'.str_pad($no, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Barang '.$no,
                    'harga_beli' => rand(10000,30000),
                    'harga_jual' => rand(35000,60000),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $no++;
            }
        }

        DB::table('m_barang')->insert($barang);
    }
}
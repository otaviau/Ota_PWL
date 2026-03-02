<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $details = [];

        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {

            $barangTerpilih = collect(range(1,15))->shuffle()->take(3);

            foreach ($barangTerpilih as $barang) {

                $harga = DB::table('m_barang')
                    ->where('barang_id', $barang)
                    ->value('harga_jual');

                $details[] = [
                    'penjualan_id' => $penjualan,
                    'barang_id' => $barang,
                    'harga' => $harga,
                    'jumlah' => rand(1,5),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($details);
    }
}
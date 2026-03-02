<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $stok = [];

        for ($barang = 1; $barang <= 15; $barang++) {
            $stok[] = [
                'barang_id' => $barang,
                'user_id' => 1,
                'stok_tanggal' => now(),
                'stok_jumlah' => rand(10,100),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('t_stok')->insert($stok);
    }
}
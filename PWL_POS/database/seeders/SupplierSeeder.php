<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        $suppliers = [
            ['supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Sumber Jaya'],
            ['supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Makmur Abadi'],
            ['supplier_kode' => 'SUP03', 'supplier_nama' => 'PT Berkah Sentosa'],
        ];

        foreach ($suppliers as $s) {
            DB::table('m_supplier')->insert([
                'supplier_kode' => $s['supplier_kode'],
                'supplier_nama' => $s['supplier_nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
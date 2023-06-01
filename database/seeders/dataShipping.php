<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class dataShipping extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('data_shipping')->insert([
            [
                'resi'=>339202,
                'tanggal_pengiriman'=>'2023-06-01',
                'deskripsi_pengiriman'=>'2023-06-01',
                'estimasi_sampai'=>'2023-06-04',
                'resi'=>null,
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataPengemasan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_pengemasan')->insert([
            [
                'id_pengemasan'=>1,
                'id_pesanan'=>1,
                'nama_pengguna'=>'pawpaw',
                'alamat'=>'Sukapura',
                'no_hp'=>123,
                'jumlah_pesanan'=>3,
                'status'=>'siap dikirim dan diserahkan kepada pihak perngiriman',
                'resi'=>null,
                'nama_barang'=>'kursi',
                'deskripsi'=>'Kursi kakinya ada enam',
                'tanggal_pengiriman'=>null,
                'deskripsi_pengiriman'=>null,
                'estimasi_sampai'=>null,
            ],
            [
                'id_pengemasan'=>12,
                'id_pesanan'=>122,
                'nama_pengguna'=>'pawpaw',
                'alamat'=>'Sukapura',
                'no_hp'=>123,
                'jumlah_pesanan'=>3,
                'status'=>'siap dikirim dan diserahkan kepada pihak perngiriman',
                'resi'=>null,
                'nama_barang'=>'kursi',
                'deskripsi'=>'Kursi kakinya ada enam',
                'tanggal_pengiriman'=>null,
                'deskripsi_pengiriman'=>null,
                'estimasi_sampai'=>null,
            ]
            ]);
    }
}

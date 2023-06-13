<?php

namespace App\Http\Controllers;

use App\Models\DataPengembalian;
use Illuminate\Http\Request;
use App\Models\data_pengemasan;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class DataPengembalianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function return()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://furniplus-inven.test/api/refund/data');
        $body = json_decode($response->getBody()->getContents(), true);
        // dd($body);
        $data = $body['data_barang'];
        $order = 0;
        if (DataPengembalian::exists()){
            foreach ($data as $v){
                DataPengembalian::updateOrCreate([
                    'id_refund' => $data[$order]['id_refund']
                ],[
                    'id_refund' => $data[$order]['id_refund'],
                    'id' => $data[$order]['id'],
                    // 'id_barang' => $data[$order]['id_barang'],
                    // 'id_user' => $data[$order]['id_user'],
                    'nama_pengguna' => $data[$order]['nama_pengguna'],
                    'alamat' => $data[$order]['alamat'],
                    'no_hp' => $data[$order]['no_hp'],
                    'jumlah_pesanan' => $data[$order]['jumlah_pesanan'],
                    // 'total_harga' => $data[$order]['total_harga'],
                    'status' => $data[$order]['status'],
                    'resi' => $data[$order]['resi'],
                    'nama_barang' => $data[$order]['nama_barang'],
                    'alasan_refund' => $data[$order]['alasan_refund'],
                    'deskripsi' => $data[$order]['deskripsi']
                ]);
                $order += 1;
            }
        }else{
            foreach ($data as $v){
                DataPengembalian::create([
                    'id_refund' => $data[$order]['id_refund'],
                    'id' => $data[$order]['id'],
                    // 'id_barang' => $data[$order]['id_barang'],
                    // 'id_user' => $data[$order]['id_user'],
                    'nama_pengguna' => $data[$order]['nama_pengguna'],
                    'alamat' => $data[$order]['alamat'],
                    'no_hp' => $data[$order]['no_hp'],
                    'jumlah_pesanan' => $data[$order]['jumlah_pesanan'],
                    // 'total_harga' => $data[$order]['total_harga'],
                    'status' => $data[$order]['status'],
                    'resi' => $data[$order]['resi'],
                    'nama_barang' => $data[$order]['nama_barang'],
                    'alasan_refund' => $data[$order]['alasan_refund'],
                    'deskripsi' => $data[$order]['deskripsi'],
                ]);
                $order += 1;
        }
    }
    }















    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPengembalian $dataPengembalian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataPengembalian $dataPengembalian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataPengembalian $dataPengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataPengembalian $dataPengembalian)
    {
        //
    }
}

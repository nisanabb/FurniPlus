<?php

namespace App\Http\Controllers;

use App\Models\data_pengemasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\PengemasanModel;
use GuzzleHttp\Client;




class DataPengemasanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function fetchDataFromAPI()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://127.0.0.1:8001/api/pengiriman/kirim');
        $body = json_decode($response->getBody()->getContents(), true);
        $value = $body['response'];
        $urutan = 0;
        foreach ($value as $v){
            PengemasanModel::updateOrCreate([
                'id_pesanan' => $value[$urutan]['id_pesanan']
            ],[
                'id_pesanan' => $value[$urutan]['id_pesanan'],
                'nama_pengguna' => $value[$urutan]['nama_pengguna'],
                'alamat' => $value[$urutan]['alamat'],
                'no_hp' => $value[$urutan]['no_hp'],
                'jumlah_pesanan' => $value[$urutan]['jumlah_pesanan'],
                'status' => $value[$urutan]['status'],
                'nama_barang' => $value[$urutan]['nama_barang'],
                'deskripsi' => $value[$urutan]['deskripsi'],
            ]);
            $urutan += 1;
        };
    /**
     * Display a listing of the resource.
     */

    }
    public function index()
    {
        return PengemasanModel::all();
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
    public function showbyid($id)
    {
        // Fetch the updated data from the API
        $this->fetchDataFromAPI();

        try {
            // Retrieve the updated data from the database
            $data = PengemasanModel::findOrFail($id);

            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data pengemasan']);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(data_pengemasan $data_pengemasan)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_pengemasan)
    {
        $update = PengemasanModel::find($id_pengemasan);
        if ($update){
            $update -> update($request->all());
            return $update;
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_pengemasan $data_pengemasan)
    {
        //
    }
}

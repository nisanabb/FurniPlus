<?php

namespace App\Http\Controllers;

use App\Models\data_pengemasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\PengemasanModel;



class DataPengemasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //ambil database dari inventory = 
        try {
            $response = Http::get('http://127.0.0.1:8000/api/pesanan');
            $data= $response->json();
            return response()->json($data);

        } catch(RequestException $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang']);
        }
    }

    /**
     * Show the form for creating a new resource.
     */


    public function fetchDataFromAPI()
    {
        $response = Http::get('http://127.0.0.1:8000/api/pesanan');
        $data = $response->json();

    foreach ($data as $item) {
        $model = new PengemasanModel();
        $model->id_pengemasan = $item['id_pengemasan'];
        $model->id_pesanan = $item['id_pesanan'];
        $model->id_barang = $item['id_barang'];
        $model->id_user = $item['id_user'];
        $model->nama_pengguna = $item['nama_pengguna'];
        $model->alamat = $item['alamat'];
        $model->no_hp = $item['no_hp'];
        $model->jumlah_harga = $item['jumlah_harga'];
        $model->total_harga = $item['total_harga'];
        $model->status = $item['status'];
        $model->resi = $item['resi'];
        $model->save();
    }
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
    public function showbyid($id_pengemasan)
    {
        try {
            // $response = Http::get("http://127.0.0.1:8001/api/data-barang/{$id_barang}");
            $response = Http::get("http://127.0.0.1:8000/api/pesanan/{$id_pengemasan}");
            $data = $response->json();
            return response()->json($data);
        } catch (RequestException $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang']);
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
    public function update(Request $request, $id_barang)
    {
        try {
            $response = Http::get("http://127.0.0.1:8001/api/data-barang/{$id_barang}");
            $existingData = $response->json();

            // Validate request data
            $validatedData = $request->validate([
                'resi.no_resi' => 'required',
                'resi.tanggal_pengiriman' => 'required',
                'resi.estimasi' => 'required',
                'resi.status' => 'required',
                'status' => 'required',
                'message' => 'required',
            ]);

            // Update 
            $updatedData = array_merge($existingData, [
                'resi' => [
                    [
                        'no_resi' => $validatedData['resi']['no_resi'],
                        'tanggal_pengiriman' => $validatedData['resi']['tanggal_pengiriman'],
                        'estimasi' => $validatedData['resi']['estimasi'],
                        'status' => $validatedData['resi']['status'],
                    ]
                ],
                'status' => $validatedData['status'],
                'message' => $validatedData['message'],
            ]);
            return response()->json(['success' => 'Data resi berhasil diperbarui']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal memperbarui data resi']);
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

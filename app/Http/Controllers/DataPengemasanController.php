<?php

namespace App\Http\Controllers;

use App\Models\data_pengemasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class DataPengemasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try {
            $response = Http::get('http://127.0.0.1:8000/api/data-barang');
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
    public function showbyid($id_barang)
    {
        try {
            $response = Http::get("http://127.0.0.1:8000/api/data-barang/{$id_barang}");
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
            $response = Http::get("http://127.0.0.1:8000/api/data-barang/{$id_barang}");
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

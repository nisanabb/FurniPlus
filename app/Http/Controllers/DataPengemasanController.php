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
        try {
            $response = Http::get('http://127.0.0.1:8001/api/data-barang');
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
    public function show($id_barang = null)
    {
        try {
            $response = Http::get('http://127.0.0.1:8000/api/data-barang');
            $data = $response->json();
    
            if ($id_barang) {
                $filteredData = collect($data)->where('id', $id_barang)->first();
    
                if ($filteredData) {
                    return response()->json($filteredData);
                } else {
                    return response()->json(['error' => 'Data tidak ditemukan'], 404);
                }
            } else {
                return response()->json($data);
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang'], 500);
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
    public function update(Request $request, data_pengemasan $data_pengemasan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_pengemasan $data_pengemasan)
    {
        //
    }
}

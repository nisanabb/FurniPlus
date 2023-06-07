<?php

namespace App\Http\Controllers;

use App\Models\data_pengemasan;
use Illuminate\Http\Request;



class DataPengemasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(data_pengemasan $data_pengemasan)
    {
        //
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

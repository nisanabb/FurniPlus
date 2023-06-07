<?php

namespace App\Http\Controllers;

use App\Models\data_shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(data_shipping $data_shipping)
    {
        //
    }
    
    // Pengembalian Barang PROBIS 3.5
    public function return()
    {
        try {
            $response = Http::get("http://127.0.0.1:8000/api/pengiriman/kirim");
            $data= $response->json();
            return response()->json($data);

        } catch(RequestException $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang']);

        } catch (\Exception $e) {
            return response()->json(['error' => 'Gagal dalam mengambil data barang']);
        }
    }
    
    public function returnbyid($id)
    {
        try {
            $response = Http::get("http://127.0.0.1:8000/api/pengiriman/kirim/{$id}");
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
    public function edit(data_shipping $data_shipping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, data_shipping $data_shipping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(data_shipping $data_shipping)
    {
        //
    }
}

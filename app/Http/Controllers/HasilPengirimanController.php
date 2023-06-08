<?php

namespace App\Http\Controllers;

use App\Models\hasil_pengiriman;
use Illuminate\Http\Request;

class HasilPengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        

        $status_kirim = hasil_pengiriman ::where('deskripsi_pengiriman', 'selesai dikirim')->get();
        return response()->json([
            'status_kirim' => $status_kirim
        ]);

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
    public function show(hasil_pengiriman $hasil_pengiriman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hasil_pengiriman $hasil_pengiriman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hasil_pengiriman $hasil_pengiriman)
    {
        //
        {
            $kiriman = hasil_pengiriman::findorfail($id_pengiriman);
            $kiriman ->update($request->all());
            return $kiriman;
    
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hasil_pengiriman $hasil_pengiriman)
    {
        //
    }
}

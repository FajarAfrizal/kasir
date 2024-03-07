<?php

namespace App\Http\Controllers;

use App\Models\detailPenjualan;
use App\Models\pelanggan;
use App\Models\penjualan;
use App\Models\Produk;
use DateTime;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function buyying($produkId)
    {
        $produk = Produk::where('id','=', $produkId)->first();
        $pelanggan = pelanggan::all();
        return view('produk.buyying', compact('produk', 'pelanggan'));
    }


    public function index()
    {
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $penjualan = Penjualan::create([
            'tanggalPenjulan' => now(),
            'pelanggan_id' => $request->pelanggan_id,
            'totalHarga' => $request->totalHarga
        ]);
        

        DetailPenjualan::create([
            'penjualan_id' => $penjualan->id, 
            'produk_id' => $request->produk_id,
            'jumlahProduk' => $request->jumlahProduk,
            'subtotal' => $penjualan->totalHarga
        ]);

        $product = Produk::findOrFail($request->produk_id);
             
        $product->decrement('stock', $request->jumlahProduk);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(penjualan $penjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penjualan $penjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, penjualan $penjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penjualan $penjualan)
    {
        //
    }
}

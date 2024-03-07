<?php

namespace App\Http\Controllers;

use App\Models\detailPenjualan;
use App\Models\penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penjualan = Penjualan::create([
            'tanggalPenjualan' => now(),
            'penlanggan_id' => $request->pelanggan_id,
        ]);
        
        // Menghitung total harga produk
        $totalHarga = $request->jumlahProduk * $request->hargaProduk; // Pastikan harga produk telah disediakan dalam permintaan Anda
        
        // Membuat entri detail penjualan dengan penjualan_id yang baru dibuat dan total harga produk
        $detailPenjualan = DetailPenjualan::create([
            'penjualan_id' => $penjualan->id, // Menggunakan ID penjualan yang baru dibuat
            'product_id' => $request->product_id,
            'jumlahProduk' => $request->jumlahProduk,
            'subtotal' => $totalHarga,
        ]);
        
        // Mengupdate total harga di entri penjualan
        $penjualan->update([
            'totalHarga' => $penjualan->totalHarga + $totalHarga // Menambahkan subtotal ke totalHarga
        ]);      

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
class TrackMobilController extends Controller
{
    public function index()
    {
        $transaksi = [
            [
                'id_mobil' => 'Civic Turbo',
                'tanggal' => '2023-12-03 19:51:51',
                'status' => 'Lunas',
            ],
            [
                'id_mobil' => 'Accord Hybrid',
                'tanggal' => '2023-12-05 14:30:00',
                'status' => 'Dalam Pengiriman',
            ],
            // ...tambahkan transaksi lainnya jika diperlukan
        ];

        return view('contentCustomer.trackMobil', compact('transaksi'));
    }

    public function updateStatus(Request $request)
    {
        $transaksi = Transaksi::find($request->id);
        $transaksi->status = 'Telah Diterima';
        $transaksi->save();

        // Redirect back with a message
        return back()->with('status', 'Status berhasil diperbarui!');
    }


}

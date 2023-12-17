<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    /**
     * Menampilkan daftar pembayaran.
     */
    public function index()
    {
        $payments = Pembayaran::with(['pemesanan', 'pemesanan.user'])->get();
        return response()->json(['data' => $payments], 200);
    }

    /**
     * Menyimpan pembayaran baru.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pemesanan' => 'required|exists:pemesanans,id',
            'jumlah_pembayaran' => 'required|numeric',
            'tanggal_pembayaran' => 'required|date',
            // Tambahkan validasi lain jika diperlukan
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $payment = Pembayaran::create($request->all());
            return response()->json(['message' => 'Payment recorded successfully', 'data' => $payment], 201);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menampilkan detail pembayaran spesifik.
     */
    public function show($id)
    {
        try {
            $payment = Pembayaran::with(['pemesanan', 'pemesanan.user'])->find($id);
            return response()->json(['data' => $payment], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
    }

    /**
     * Memperbarui pembayaran yang ada.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'jumlah_pembayaran' => 'numeric',
            'tanggal_pembayaran' => 'date',
            'status' => 'string',
            // Tambahkan validasi lain jika diperlukan
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            $pembayaran = Pembayaran::find($id);
            $pembayaran->update($request->all());

            return response()->json(['message' => 'Payment updated successfully', 'data' => $pembayaran], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menghapus pembayaran.
     */
    public function destroy($id)
    {
        try {
            $payment = Pembayaran::find($id);
            $payment->delete();
            return response()->json(['message' => 'Payment deleted successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Payment not found'], 404);
        }
    }
}

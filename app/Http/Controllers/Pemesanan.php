<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PemesananController extends Controller
{

    /**
     * Menampilkan daftar pemesanan dengan pagination.
     */
    public function index()
    {
        $orders = Pemesanan::with('user')->paginate(10);
        return response()->json(['data' => $orders], 200);
    }

    /**
     * Menyimpan pemesanan baru.
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'id_user' => 'required|exists:users,id',
            'id_mobil' => 'required|exists:mobil,id',
            'metode_pembayaran' => 'required|in:MANDIRI,BCA,BRI,BNI',
            // Tambahkan validasi lain sesuai kebutuhan
        ])->validate();

        try {
            DB::beginTransaction();
            $order = Pemesanan::create($request->all());
            DB::commit();
            return response()->json(['message' => 'Order created successfully', 'data' => $order], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menampilkan detail pemesanan spesifik.
     */
    public function show($id)
    {
        try {
            $order = Pemesanan::with('user')->findOrFail($id);
            return response()->json(['data' => $order], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }

    /**
     * Memperbarui pemesanan yang ada.
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            // Tambahkan validasi untuk field yang dapat diperbarui
            'status' => 'string',
            // ...
        ])->validate();

        try {
            $pemesanan = Pemesanan::findOrFail($id);
            $pemesanan->update($request->all());
            return response()->json(['message' => 'Order updated successfully', 'data' => $pemesanan], 200);
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 400);
        }
    }

    /**
     * Menghapus pemesanan.
     */
    public function destroy($id)
    {
        try {
            $order = Pemesanan::findOrFail($id);
            $order->delete();
            return response()->json(['message' => 'Order deleted successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }
}

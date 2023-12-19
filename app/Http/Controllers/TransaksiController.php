<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TransaksiController extends Controller
{

    /**
     * Menampilkan daftar pemesanan dengan pagination.
     */
    public function index()
    {
        $orders = Transaksi::with(['user', 'mobil'])->paginate(10);
        return response()->json(['data' => $orders], 200);
    }

    /**
     * Menyimpan pemesanan baru.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required|exists:users,id',
            'id_mobil' => 'required|exists:mobil,id',
            'metode_pembayaran' => 'required|in:MANDIRI,BCA,BRI,BNI',
            // Tambahkan validasi lain sesuai kebutuhan
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        try {
            DB::beginTransaction();

            $transaksi = new Transaksi($validator->validated());
            $transaksi->status = 'Dibayar'; // Atau status awal yang lain
            $transaksi->save();


            DB::commit();
            return response()->json(['message' => 'Pemesanan berhasil disimpan', 'data' => $transaksi], 201);
        } catch (Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Terjadi kesalahan pada saat menyimpan pemesanan', 'error' => $e->getMessage()], 400);
        }
    }

    /**
     * Menampilkan detail pemesanan spesifik.
     */
    public function show($id)
    {
        try {
            $order = Transaksi::with('user')->findOrFail($id);
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
            $pemesanan = Transaksi::findOrFail($id);
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
            $order = Transaksi::findOrFail($id);
            $order->delete();
            return response()->json(['message' => 'Order deleted successfully'], 200);
        } catch (Exception $e) {
            return response()->json(['message' => 'Order not found'], 404);
        }
    }

    // Dalam TransaksiController atau controller yang relevan

    // Contoh isi dari TransaksiController.php
    public function showFormPembayaran()
    {
        $metodePembayaran = ['MANDIRI', 'BCA', 'BRI', 'BNI']; // Contoh data
        return view('contentCustomer.transaksi', compact('metodePembayaran'));
    }


    

    // public function showTransaction()
    // {
    //     $trx = [
    //         'id' => 1,
    //         'nama_mobil' => 'CIVIC TURBO',
    //         // Informasi transaksi lainnya
    //     ];

    //     return view('nama_view', compact('trx'));
    // }

}

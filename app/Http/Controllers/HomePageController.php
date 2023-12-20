<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Comment;
use Illuminate\Http\Request;
// use Illuminate\Mail\Mailables\Content;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $mobil = Mobil::where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('merk', 'like', '%' . $request->search . '%')
                ->orWhere('tipe_mobil', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $mobil = Mobil::latest()->get();
        }
        return view('contentCustomer.homePage', compact('mobil'));
    }

    public function liatMobil($id)
    {
        if (Auth::check()) {
            $user = Auth::user()->id;
            $userLogin = User::find($user);

            $mobil = Mobil::find($id);
            $komentarMobil = Comment::with('mobil', 'user')->where('id_mobil', $id)->get();

            return view('contentCustomer.liatMobil', compact('userLogin', 'mobil', 'komentarMobil'));
        }
    }

    public function hapusComment($id)
    {
        $komentar = Comment::find($id);
        $komentar->delete();
        return redirect()->back();
    }


    public function getData($id)
    {

        if (Auth::check()) {
            $user = Auth::user()->id;
            $userLogin = User::find($user);

            $mobil = Mobil::find($id);

            return view('contentCustomer.pemesanan', compact('userLogin', 'mobil'));
        }
    }

    public function metodePembayaran(Request $request, $id)
    {
        if (Auth::check()) {
            $user = Auth::user()->id;
            $userlogin = User::find($user);

            $idMobil = Mobil::find($id);

            if ($idMobil->stok > 0) {

                $idMobil->stok--;
                $idMobil->save();

                $transaksi = Transaksi::create([
                    'id_user' => $userlogin->id,
                    'id_mobil' => $idMobil->id,
                    'metode_pembayaran' => $request->metode_Pembayaran,
                    'tanggal' => now(),
                ]);

                sleep(2);

                return view('contentCustomer.pembayaran', compact('transaksi'));
            } else {

                return "kosonng";
            }
        }
    }

    public function Pembayaran($id)
    {
        $transaksi = Transaksi::find($id);
        if ($transaksi) {
            // Update the transaction with the status and date
            $transaksi->status = 'Dibayar';
            $transaksi->save();
        }

        sleep(2);

        return redirect('trackMobil');
    }

    public function Diterima($id)
    {

        $transaksi = Transaksi::find($id);

        if ($transaksi) {
            // Update the transaction with the status and date
            $transaksi->status = 'Diterima';
            $transaksi->save();
        }


        return redirect('profile');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);

        if ($transaksi) {
            $mobil = $transaksi->mobil;

            $mobil->stok += 1;
            $mobil->save();
            $transaksi->delete();
        }

        return redirect('home');
    }

    public function createComment(Request $request, $id)
    {

        if (Auth::check()) {
            $user = Auth::user()->id;
            $userlogin = User::find($user);

            $idMobil = Mobil::find($id);

            Comment::create([
                'id_user' => $userlogin->id,
                'id_mobil' => $idMobil->id,
                'ulasan' => $request->ulasan,
            ]);

            return redirect()->back();
        }
    }

    public function updateComment(Request $request, $id)
    {
        $komentar = Comment::find($id);

        $komentar->update([
            'ulasan' => $request->ulasan,
        ]);

        return redirect()->back();
    }
}

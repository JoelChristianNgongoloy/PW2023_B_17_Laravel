<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $transaksi = Transaksi::where('id_user', $userId)->get();
        }
        return view('contentCustomer.profile', compact('transaksi'));
    }

    public function trackMobil()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $transaksi = Transaksi::where('id_user', $userId)->get();
        }
        return view('contentCustomer.trackMobil', compact('transaksi'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('contentCustomer.profile', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'img_profil' => 'required'
        ]);

        if ($request->hasFile('img_profil')) {
            if ($user->img_profil && file_exists(public_path('public/images/' . $user->img_profil))) {
                unlink(public_path('public/images/' . $user->img_profil));
            }
            $image = $request->file('img_profil');
            $extension = $image->getClientOriginalExtension();
            $currentDateTime = date('Ymd_His');
            $image_Name = $currentDateTime . '.' . $extension;
            $image->move(public_path('public/images/'), $image_Name);

            $user->update(['img_profil' => $image_Name]);
        }

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->back();
    }
}

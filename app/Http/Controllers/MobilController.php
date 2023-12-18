<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MobilController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $mobil = Mobil::where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('merk', 'like', '%' . $request->search . '%')
                ->orWhere('tipe_mobil', 'like', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $mobil = Mobil::latest()->paginate(5);
        }
        return view('viewAdmin.adminMobil', compact('mobil'));
    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'nama' => 'required|string',
            'tipe_mobil' => 'required|string',
            'tahun_produksi' => 'required|integer',
            'harga_mobil' => 'required|integer',
            'warna' => 'required|string',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'merk' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_Name = $image->getClientOriginalName();
            $image->move(public_path('/public/images/'), $image_Name);
        }


        $mobil = Mobil::create([
            'nama' => $request->nama,
            'tipe_mobil' => $request->tipe_mobil,
            'tahun_produksi' => $request->tahun_produksi,
            'harga_mobil' => $request->harga_mobil,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'merk' => $request->merk,
            'image' => $image_Name,
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        $mobil = Mobil::find($id);
        return view('viewAdmin.adminMobil', compact('mobil'));
    }

    public function update(Request $request, $id)
    {
        $mobil = Mobil::find($id);

        $this->validate($request, [
            'nama' => 'required|string',
            'tipe_mobil' => 'required|string',
            'tahun_produksi' => 'required|integer',
            'harga_mobil' => 'required|integer',
            'warna' => 'required|string',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'merk' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            if ($mobil->image) {
                unlink(public_path('public/images/' . $mobil->image));
            }

            $image = $request->file('image');
            $image_Name = $image->getClientOriginalExtension();
            $image->move(public_path('public/images/'), $image_Name);

            $mobil->update(['image' => $image_Name]);
        }

        $mobil->update([
            'nama' => $request->nama,
            'tipe_mobil' => $request->tipe_mobil,
            'tahun_produksi' => $request->tahun_produksi,
            'harga_mobil' => $request->harga_mobil,
            'warna' => $request->warna,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'merk' => $request->merk,
        ]);

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();
        return redirect()->back();
    }
}

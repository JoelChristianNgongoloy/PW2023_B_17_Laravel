<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiMobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::all();

        if(count($mobil) > 0){
            return response([
                'message' => 'Retrieve All Success',
                'data' => $mobil
            ],200);
        }

        return response([
            'message'=> 'empty',
            'data'=> null
        ],400);
    }


    public function store(Request $request)
    {

        $request->validate([
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
            $encodedImage = base64_encode($image->get());
            $shortenedImage = substr($encodedImage, 0, 100);

            $request['image'] = $shortenedImage;
        }
    // @if(isset($request['image']))
    // <img src="data:image/jpeg;base64,{{ $request['image'] }}" alt="Encoded Image">
        
        $mobil = Mobil::create($request->all());

        return response([
            'message' => 'Add Content Success',
            'data'=> $mobil
        ],200);
    }

    public function update(Request $request, string $id)
    {
        $mobil = Mobil::find($id);
        if(is_null($mobil)){
            return response([
                'message'=> 'Content Not Found',
                'data'=> null
            ] ,400);
        }

        $updateData = $request->all();

        $validate = Validator::make($updateData,[
            'nama' => 'required|string',
            'tipe_mobil' => 'required|string',
            'tahun_produksi' => 'required|integer',
            'harga_mobil' => 'required|integer',
            'warna' => 'required|string',
            'deskripsi' => 'required|string',
            'stok' => 'required|integer',
            'merk' => 'required|string',
        ]);

        if( $validate->fails())
            return response(['message' => $validate->errors()],400);
            $mobil->nama = $updateData['nama'] ?? $mobil->nama;
            $mobil->tipe_mobil = $updateData['tipe_mobil'] ?? $mobil->tipe_mobil;
            $mobil->tahun_produksi = $updateData['tahun_produksi'] ?? $mobil->tahun_produksi;
            $mobil->harga_mobil = $updateData['harga_mobil'] ?? $mobil->harga_mobil;
            $mobil->warna = $updateData['warna'] ?? $mobil->warna;
            $mobil->deskripsi = $updateData['deskripsi'] ?? $mobil->deskripsi;
            $mobil->stok = $updateData['stok'] ?? $mobil->stok;
            $mobil->merk = $updateData['merk'] ?? $mobil->merk;

        if( $mobil->save() ){
            return response([
                'message' => 'Update Content Succes',
                'data'=> $mobil
                ] ,200);
        }
            return response([
                'message' => 'Update Content Fail',
                'data'=> null
                ] ,400);

    }

    public function destroy(string $id)
    {
        $mobil = Mobil::find($id);
        if(is_null($mobil)){
            return response([
                'message'=> 'Content Not Found',
                'data'=> null
                ] ,400);
        }
        if( $mobil->delete() ){
            return response([
                'message' => 'Delete Success',
                'data'=> $mobil
                ] ,200);
        }
        return response([
            'message'=> 'Delete Content Failed',
            'data'=> null
            ] ,400);
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $mobils = Mobil::where('nama', 'like', '%' . $search . '%')
            ->orWhere('merk', 'like', '%' . $search . '%')
            ->orWhere('tipe_mobil', 'like', '%' . $search . '%')
            ->get();
    
        if ($mobils->isEmpty()) {
            return response([
                'message' => " $search tidak ditemukan. Coba cari berdasarkan Nama / Merk / Tipe Mobil",
                'data' => null
            ], 404);
        }
    
        return response([
            'message' => 'Search Success',
            'data' => $mobils
        ], 200);
    }
}

@extends('dashAdmin')

@section('content')
    <!-- Main content -->
    <style>
        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }

            th,
            td {
                display: table-cell;
                text-align: center;
            }

            .action-button {
                width: 100px;
                height: 30px;

            }
        }
    </style>

    <div class="content" style="background-color: white;">
        <div class="container-fluid pt-2">
            <h1><strong>Data Mobil</strong></h1>

            <form action="{{ url('admin/tampilMobil') }}" class="d-flex justify-content-end mb-2" method="GET">
                <div class="col-5">
                    <input type="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                        name="search" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 70px;">Search</button>
            </form>

            <table class="table table-striped text-center">
                <tr>
                    <td style="background-color: black; color: white;">No</td>
                    <td style="background-color: black; color: white;">Image</td>
                    <td style="background-color: black; color: white;">Nama</td>
                    <td style="background-color: black; color: white;">Tipe</td>
                    <td style="background-color: black; color: white;">Tahun</td>
                    <td style="background-color: black; color: white;">Warna</td>
                    <td style="background-color: black; color: white;">Stock</td>
                    <td style="background-color: black; color: white;">Deskripsi</td>
                    <td style="background-color: black; color: white;">Harga</td>
                    <td style="background-color: black; color: white;">Merk</td>
                    <td style="background-color: black; color: white;">Manage</td>
                </tr>
                @php
                    $i = 1;
                @endphp
                @forelse ($mobil as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <img src="{{ asset('/public/images/' . $item->image) }}" alt="Image">
                        </td>                        
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['tipe_mobil'] }}</td>
                        <td>{{ $item['tahun_produksi'] }}</td>
                        <td>{{ $item['warna'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                        <td>{{ $item['deskripsi'] }}</td>
                        <td>{{ $item['merk'] }}</td>
                        <td>{{ $item['harga_mobil'] }}</td>
                        <td>

                            <a href="{{ url('admin/tampilMobil/' . $item->id) }}" class="btn btn-primary"
                                style="width: 70px" data-bs-toggle="modal" data-bs-target="#Backdrop{{ $item->id }}">
                                Edit
                            </a>
                            <div class="modal fade" id="Backdrop{{ $item->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ url('admin/tampilMobil/' . $item->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fw-bold" id="staticBackdropLabel">Edit Mobil</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Nama</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="nama"
                                                            value="{{ isset($item['nama']) ? $item['nama'] : old('nama') }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Tipe
                                                            Mobil</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="tipe_mobil"
                                                            value="{{ old('tipe_mobil', $item->tipe_mobil) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Tahun
                                                            Produksi</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="tahun_produksi"
                                                            value="{{ old('tahun_produksi', $item->tahun_produksi) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">warna</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="warna"
                                                            value="{{ old('warna', $item->warna) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">stok</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="number" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="stok"
                                                            value="{{ old('stok', $item->stok) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6"
                                                            class="col-form-label">deskripsi</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="deskripsi"
                                                            value="{{ old('deskripsi', $item->deskripsi) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">merk</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="merk"
                                                            value="{{ old('merk', $item->merk) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">harga</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="harga_mobil"
                                                            value="{{ old('harga_mobil', $item->harga_mobil) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Image</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="file" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="image"
                                                            value="{{ old('image', $item->image) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <form action="{{ url('admin/tampilMobil/' . $item->id) }}" class="d-inline" method="POST"
                                onsubmit="return confirm('Apakah anda yakin akan menghapus Mobil ini?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="width: 70px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data Kelas Masih Kosong
                    </div>
                @endforelse
            </table>
            <a class="btn btn-success" style="width: 80px" data-bs-toggle="modal" data-bs-target="#Backdrop">
                Tambah
            </a>
            <div class="modal fade" id="Backdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <form action="{{ url('admin/tampilMobil/action') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fw-bold" id="staticBackdropLabel">Tambah Mobil</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Nama</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="nama">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Tipe
                                            Mobil</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="tipe_mobil">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Tahun
                                            Produksi</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="tahun_produksi">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">warna</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="warna">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">stok</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="stok">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">deskripsi</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="deskripsi">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">merk</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="merk">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">harga</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="number" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="harga_mobil">
                                    </div>
                                </div>
                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                    <div class="col-auto">
                                        <label for="inputPassword6" class="col-form-label">Image</label>
                                    </div>
                                    <div class="col-8">
                                        <input type="file" id="inputPassword6" class="form-control"
                                            aria-describedby="passwordHelpInline" name="image">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{ $mobil->links() }}
    </div>
    <!-- Modal -->
@endsection

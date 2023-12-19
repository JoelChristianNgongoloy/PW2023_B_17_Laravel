@extends('dashAdmin')

@section('title')
    Halaman tampil User by {{ Auth::user()->name }}
@endsection

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
            <h1><strong>Data User</strong></h1>

            <form action="{{ url('admin/tampilUser') }}" class="d-flex justify-content-end mb-2" method="GET">
                <div class="col-5">
                    <input type="search" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline"
                        name="search" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 70px;">Search</button>
            </form>


            <table class="table table-striped text-center">
                <tr>
                    <td style="background-color: black; color: white;">No</td>
                    <td style="background-color: black; color: white;">Nama</td>
                    <td style="background-color: black; color: white;">Username</td>
                    <td style="background-color: black; color: white;">Email</td>
                    <td style="background-color: black; color: white;">Alamat</td>
                    <td style="background-color: black; color: white;">Telepon</td>
                    <td style="background-color: black; color: white;">Manage</td>
                </tr>
                @php
                    $i = 1;
                @endphp
                @forelse ($user as $item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['username'] }}</td>
                        <td>{{ $item['email'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['no_telp'] }}</td>
                        <td>

                            <a href="{{ url('admin/tampilUser/' . $item->id) }}" class="btn btn-primary" style="width: 70px"
                                data-bs-toggle="modal" data-bs-target="#Backdrop{{ $item->id }}">
                                Edit
                            </a>
                            <div class="modal fade" id="Backdrop{{ $item->id }}" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <form action="{{ url('admin/tampilUser/' . $item->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fw-bold" id="staticBackdropLabel">Edit User by
                                                    {{ Auth::user()->name }}</h1>
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
                                                            aria-describedby="passwordHelpInline" name="name"
                                                            value="{{ isset($item['name']) ? $item['name'] : old('name') }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Username</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="username"
                                                            value="{{ old('username', $item->username) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Email</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="email"
                                                            value="{{ old('email', $item->email) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">Alamat</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="alamat"
                                                            value="{{ old('alamat', $item->alamat) }}">
                                                    </div>
                                                </div>
                                                <div class="row g-3 align-items-center justify-content-between mb-2">
                                                    <div class="col-auto">
                                                        <label for="inputPassword6" class="col-form-label">No
                                                            Telepon</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="inputPassword6" class="form-control"
                                                            aria-describedby="passwordHelpInline" name="no_telp"
                                                            value="{{ old('no_telp', $item->no_telp) }}">
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
                            <form action="{{ url('admin/tampilUser/' . $item->id) }}" class="d-inline" method="POST"
                                onsubmit="return confirm('Apakah anda yakin akan menghapus user ini?')">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger" style="width: 70px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger">
                        Data User Masih Kosong
                    </div>
                @endforelse
            </table>
        </div>
        {{ $user->links() }}
    </div>
    <!-- Modal -->
@endsection

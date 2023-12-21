@extends('dashboard')
@section('title')
    Profile: {{ Auth::user()->name }}
@endsection
@section('content')
    <style>
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            top: 500;
            margin-top: 250px;
        }

        .container {
            top: 500;
            margin-bottom: 100px;
        }

        @media screen and (max-width: 576px) {
            .content {
                margin-top: 100px;
                width: 100%;
            }
        }
    </style>

    <div class="container">
        <div class="content">
            <div class="row align-items-start">
                <div class="col-lg-2">
                    <div class="card card-body h-100 justify-content-center">
                        <img style="border-radius: 50%, width: 100px, height:100px,"
                            @if (Auth::user()->img_profil !== null)
                            src="{{ asset('/public/images/' . Auth::user()->img_profil)}} "
                            @else
                            src="{{ asset('img/default.jpg')}} "
                            @endif
                           
                            class="img-fluid rounded img-bukti-ngantor" alt="Foto Profil" />
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="card card-body h-100 justify-content-center">
                        <h1 class="fw-bold">{{ Auth::user()->name }}</h1>
                        <h5 class="mb-3">{{ Auth::user()->username }}</h5>
                        <div class="d-flex flex-wrap" style="justify-content:space-between">
                            <div>
                                <div>
                                    <h5><strong>Nomor Handphone</strong></h5>
                                    <h5>{{ Auth::user()->no_telp }}</h5>
                                </div>
                                <div class="mt-3">
                                    <h5><strong>Alamat</strong></h5>
                                    <h5>{{ Auth::user()->alamat }}</h5>
                                </div>
                            </div>
                            <div>
                                <h5><strong>Email</strong></h5>
                                <h5>{{ Auth::user()->email }}</h5>
                            </div>
                        </div>
                        <div class=" btndan mt-2 d-grid col-4 ">
                            <div class="d-flex justify-content-arround gap-3">
                                <a class="btn btn-danger" href="{{ route('actionLogout') }}"><i class="fa fa-user"></i>
                                    Logout</a>
                                <a href="{{ url('profile/edit/' . Auth::user()->id) }}" class="btn btn-primary"
                                    style="width: 70px;" data-bs-toggle="modal" data-bs-target="#Backdrop">
                                    Edit
                                </a>
                                <div class="modal fade" id="Backdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <form action="{{ url('profile/edit/' . Auth::user()->id) }}" method="POST"
                                            enctype="multipart/form-data">
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
                                                                value="{{ isset(Auth::user()['name']) ? Auth::user()['name'] : old('name') }}">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-items-center justify-content-between mb-2">
                                                        <div class="col-auto">
                                                            <label for="inputPassword6"
                                                                class="col-form-label">Username</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" id="inputPassword6" class="form-control"
                                                                aria-describedby="passwordHelpInline" name="username"
                                                                value="{{ old('username', Auth::user()->username) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-items-center justify-content-between mb-2">
                                                        <div class="col-auto">
                                                            <label for="inputPassword6" class="col-form-label">Email</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" id="inputPassword6" class="form-control"
                                                                aria-describedby="passwordHelpInline" name="email"
                                                                value="{{ old('email', Auth::user()->email) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-items-center justify-content-between mb-2">
                                                        <div class="col-auto">
                                                            <label for="inputPassword6"
                                                                class="col-form-label">Alamat</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="text" id="inputPassword6" class="form-control"
                                                                aria-describedby="passwordHelpInline" name="alamat"
                                                                value="{{ old('alamat', Auth::user()->alamat) }}">
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
                                                                value="{{ old('no_telp', Auth::user()->no_telp) }}">
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-items-center justify-content-between mb-2">
                                                        <div class="col-auto">
                                                            <label for="inputPassword6" class="col-form-label">Foto
                                                                Profile</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <input type="file" id="inputPassword6"
                                                                class="form-control" aria-describedby="passwordHelpInline"
                                                                name="img_profil" required>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <h1><strong>History</strong></h1>
            <hr>
            @if ($transaksi->count() > 0)
                @foreach ($transaksi as $item)
                    <div class="row mt-3">
                        <div class="col-lg-10">
                            <div class="card card-body h-100 justify-content-center">
                                <h1><strong>{{ $item->mobil->nama }}</strong></h1>
                                <h4>Tanggal Pembayaran: {{ $item->tanggal }}</h4>
                                <h5>Status: <span
                                        class="badge rounded-pill text-bg-{{ $item->status === 'Dibayar' ? 'danger' : ($item->status === 'Diterima' ? 'success' : 'info') }}">{{ $item->status }}</span>
                                </h5>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card card-body h-100 justify-content-center">
                                <img style="border-radius: 4px;"
                                    src="{{ asset('/public/images/' . $item->mobil->image) }}" alt="gambarmobil">
                                <div class="" style="text-align: center;">
                                    <h4><strong>{{ $item->mobil->nama }}</strong></h4>
                                    @if ($item->status == 'Dibayar')
                                        <form action="{{ url('Diterima/' . $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Apakah sudah Diterima?</button>
                                        </form>
                                    @else
                                        <button disabled class="btn btn-primary">Sudah Diterima!</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No transactions available.</p>
            @endif


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script>
        document.getElementById('btnlog').addEventListener("click", function() {
            window.location.href = "{{ url('/') }}";
        });
    </script> --}}
@endsection

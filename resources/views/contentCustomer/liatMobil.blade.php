@extends('dashboard')
@section('title')
Mobil {{ $mobil->nama }}
@endsection

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<style>
    .img-fluid {
        max-width: 70%;
        height: 20%;
        display: block;
        margin-left: auto;
        margin-right: 30px;
        border-radius: 10%;
    }

    .commenter-info {
        display: flex;
        align-items: center;
    }

    .commenter-info img {
        width: 40px;
        /* Sesuaikan ukuran sesuai kebutuhan */
        height: 40px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .audi-section {
        padding: 10px;
        align-items: center;
        margin: 100px auto 50px;
        max-width: 900px;
    }

    .car-info h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #000;
    }

    .car-info p {
        margin-bottom: 15px;
        color: #555;
    }

    .btn-danger,
    .btn-light {
        border-radius: 5px;
        padding: 10px 20px;
        display: inline-block;
    }

    .btn-light {
        background-color: #e0e0e0;
        color: #000;
        border: none;
        cursor: pointer;
    }

    .fas-fa-share-alt {
        margin-right: 5px;
    }

    .custom-footer {
        margin-top: 50px;
    }

    .card-shadow {
        border-radius: 3px;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1), 0 6px 20px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    }

    .card-img-side {
        width: 30%;
        object-fit: cover;
    }

    .card-content-side {
        padding: 20px;
    }

    .card-shadow {
        display: flex;
        align-items: center;
        padding: 20px;
    }

    .card-img-side {
        flex: 0 0 40%;
        max-width: 100%;
        margin-right: 10px;
        border-radius: 5px;
    }

    .card-content-side {
        flex: 1;
        padding: 30px;
    }

    .img-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 60%;
        width: 50%;
    }

    .img-large {
        max-width: 90%;
        max-height: 90%;
    }

    .car-info {
        flex: 1;
        padding: 20px;
    }

    .card:hover {
        transform: scale(1.1);
    }

    .card {
        font-size: 15px;
        border-radius: 20px;
        transition: transform 0.2s ease-in-out;
    }

    .card h2 {
        font-size: 2.0em;
    }

    .card p {
        font-size: 1.1em;
    }

    .card .btn {
        font-size: 1em;
        padding: 10px 20px;
        width: auto;
        min-width: unset;
        height: auto;
    }

    @media screen and (max-width: 576px) {
        .card {
            font-size: 10px;
        }
    }
</style>

<div class="audi-section">
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="card card-shadow d-flex flex-row">
                <div class="col-md-6 img-container">
                    <img src="{{ asset('/public/images/' . $mobil->image) }}" class="card-img" alt="Bandingkan Motor">
                </div>
                <div class="col-md-6 car-info">
                    <h1>{{ $mobil->nama }} | {{ $mobil->tipe_mobil }}</h1>
                    <h4 class="mt-4">Merk: {{ $mobil->merk }}</h4>
                    <p class="fw-bold">Tahun: {{ $mobil->tahun_produksi }}</p>
                    <p class="fw-bold">Stok: {{ $mobil->stok }}</p>
                    <p>{{ $mobil->deskripsi }}</p>
                    <p class="fw-bold mt-2">Rp. {{ number_format($mobil['harga_mobil'], 0, ',', '.') }}</p>

                    @if ($mobil->stok == 0)
                    <p><button disabled class="btn btn-primary px-4">Stok Kosong</button></p>
                    @else
                    <p><a href="{{ url('pemesanan/' . $mobil->id) }}" class="btn btn-primary px-4">Beli</a></p>
                    @endif

                    <p>
                        {{-- <button class="btn btn-light"><i class="fas fa-share-alt"></i> Bagikan</button> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-2">
    <h2 class="mb-4">Car Reviews</h2>
    <hr>
    <div class="card mb-4">
        <div class="card-body">
            <h2>Leave Comment</h2>
            <form action="{{ url('liatMobil/comment/' . $mobil->id) }}" method="POST">
                @csrf
                <textarea class="form-control" name="ulasan" id="" cols="170" rows="5" style="resize: none"></textarea>
                <div class="d-flex justify-content-end mt-2">
                    <button type="submit" class="btn btn-primary">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
    @forelse ($komentarMobil as $komentar)
    <div class="card mb-4">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <div class="commenter-info">
                    <img src="{{ asset('/public/images/' . $komentar->user->img_profil) }}" alt="">
                    <h5><strong>{{ $komentar->user->name }}</strong></h5>
                </div>
            </div>
            <p>{{ $komentar->ulasan }}</p>
            @if (Auth::check() && $komentar->user->id == Auth::user()->id)
            <div class="d-flex" style="justify-content: end">
                <button type="button" class="btn btn-sm btn-primary ml-2" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop" data-id="{{ $komentar->id }}">Edit</button>
                <form action="{{ url('liatMobil/comment/' . $komentar->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger ml-2">Delete</button>
                </form>
            </div>
            @endif
        </div>
    </div>
    @empty
    <p>No comments yet.</p>
    @endforelse
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editCommentForm" method="post">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Komentar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Edit Komentar</label>
                        <textarea class="form-control" name="ulasan" id="" cols="170" rows="5"
                            style="resize: none"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var editModal = document.getElementById('staticBackdrop');
        editModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var komentarId = button.getAttribute('data-id');
            var form = document.getElementById('editCommentForm');
            form.action = '{{ url("liatMobil/comment/") }}/' + komentarId;
        });
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
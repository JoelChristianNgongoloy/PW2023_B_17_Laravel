@extends('dashboard')
@section('title')
    Mobil {{ $mobil->nama }}
@endsection

@section('content')
    <style>
        .img-fluid {
            max-width: 70%;
            height: 20%;
            display: block;
            margin-left: auto;
            margin-right: 30px;
            border-radius: 10%;
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

        /* .card{
                            
                        } */

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

    <div class="container mt-">
        <h1 class="mb-4">Average Rating of Civic Turbo Sport Edition</h1>

        <h2 class="display-4">4.7/5</h2>

        <div class="mb-2">
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 84%" aria-valuenow="84"
                    aria-valuemin="0" aria-valuemax="100">420 ⭐⭐⭐⭐⭐</div>
            </div>
        </div>

        <div class="mb-2">
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 7%" aria-valuenow="7"
                    aria-valuemin="0" aria-valuemax="100">35 ⭐⭐⭐⭐</div>
            </div>
        </div>

        <div class="mb-2">
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 2.4%" aria-valuenow="2.4"
                    aria-valuemin="0" aria-valuemax="100">12 ⭐⭐⭐</div>
            </div>
        </div>

        <div class="mb-2">
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 1%" aria-valuenow="1"
                    aria-valuemin="0" aria-valuemax="100">5 ⭐⭐</div>
            </div>
        </div>

        <div class="mb-4">
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 0.4%" aria-valuenow="0.4"
                    aria-valuemin="0" aria-valuemax="100">2 ⭐</div>
            </div>
        </div>

        <p>508 Reviews</p>

        <h2 class="mb-4">Car Reviews</h2>
        <hr>

        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <h5 class="mr-2">⭐⭐⭐⭐⭐</h5>
                        <h5><strong>Alex P.</strong></h5>
                    </div>
                </div>
                <p><strong>Fuel Efficiency:</strong> Excellent</p>
                <p><strong>Comfort:</strong> Top-notch</p>
                <p><strong>Tech Features:</strong> Modern and user-friendly</p>
                <p>"Just got my Civic Turbo last month. The fuel efficiency is impressive, and the ride is super smooth.
                    Highly recommend to anyone in the market for a new car."</p>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <h5 class="mr-2">⭐⭐⭐⭐</h5>
                        <h5><strong>Pak Rehan.</strong></h5>
                    </div>
                </div>
                <p><strong>Fuel Efficiency:</strong> Excellent</p>
                <p><strong>Comfort:</strong> Top-notch</p>
                <p><strong>Tech Features:</strong> Modern and user-friendly</p>
                <p>"Just got my Civic Turbo last month. The fuel efficiency is impressive, and the ride is super smooth.
                    Highly recommend to anyone in the market for a new car."</p>
            </div>
        </div>

    </div>
@endsection

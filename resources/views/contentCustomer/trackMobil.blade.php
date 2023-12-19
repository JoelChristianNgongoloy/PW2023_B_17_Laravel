@extends('dashboard')
@section('content')

<style>
    button {
        border: none;
        background-color: #4CAF50;
        color: #fff;
        padding: 5px 10px;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #388E3C;
    }

    .status-container {
        display: flex;
        align-items: center;
        margin: 20px 0;
    }

    .status-labels {
        display: flex;
        justify-content: space-between;
        margin-top: 5px;
        color: #888;
    }

    .details {
        list-style-type: none;
        padding-left: 0;
        margin-top: 20px;
    }

    .circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #ccc;
        display: inline-block;
        border: 2px solid transparent;
    }

    .circle.active {
        background-color: #007bff;
        /* Warna biru */
        border-color: #007bff;
        /* Warna biru */
    }

    .line {
        flex-grow: 1;
        height: 4px;
        background-color: #ccc;
        display: inline-block;
        margin: 0 2px;
        /* Mengurangi margin untuk garis lebih pendek */
        vertical-align: middle;
        /* Menambahkan properti ini */
    }


    /* Mengatur lebar (width) garis aktif agar lebih pendek */
    .line.active {
        background-color: #007bff;
        /* Warna biru */
        width: 20px;
        /* Lebar garis aktif */
    }

    .details li {
        margin-bottom: 10px;
    }

    .card {
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .highlighted-title h3 {
        font-size: 18px;
        /* Ubah nilai sesuai dengan ukuran yang Anda inginkan */
        background-color: #FFFFFF;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
    }

    .status-labels span {
        display: flex;
        align-items: center;
    }

    .status-labels span {
        display: flex;
        align-items: center;
        justify-content: center;
        /* Menambahkan properti ini */
    }
</style>

@php
$transaksi = [
[
'id' => 1,
'id_mobil' => 'Civic Turbo',
'id_user' => 2,
'metode_pembayaran' => 'BCA',
'status' => 'Lunas',
'tanggal' => '2023-12-03 19:51:51'
],
[
'id' => 2,
'id_mobil' => 'Accord Hybrid',
'id_user' => 3,
'metode_pembayaran' => 'Mandiri',
'status' => 'Telah Diterima',
'tanggal' => '2023-12-05 14:30:00'
],
[
'id' => 3,
'id_mobil' => 'Hybrid',
'id_user' => 4,
'metode_pembayaran' => 'Mandiri',
'status' => 'Lunas',
'tanggal' => '2023-12-05 14:30:00'
],
// Tambahkan lebih banyak transaksi sesuai kebutuhan
];
@endphp

<div class="container mt-5 pt-5">
    @foreach ($transaksi as $trx)
    <div class="card mb-3">
        <div class="card-body">
             <div class="header">
                <h3>{{ $trx['id_mobil'] }}</h3>
            </div>
            <p>Dikirimkan pada {{ $trx['tanggal'] }}</p>
            <div class="status-container">
                @if ($trx['status'] == 'Lunas')
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                <div class="line"></div>
                <div class="circle"></div>
                @elseif ($trx['status'] == 'Telah Diterima')
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                @endif
            </div>
            <div class="status-labels d-flex justify-content-between mt-2">
                <span>Lunas</span>
                <span style="padding-left: 50px;">Dalam pengiriman</span>
                <span>Telah diterima</span>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
@extends('dashboard')
@section('content')

<style>
    button {
        padding: 10px 15px;
        border: none;
        outline: none;
        background: #333;
        color: #fff;
        padding: 5px 10px;
        margin-right: 5px;
        border: none;
        background-color: #4CAF50;
        border-radius: 3px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .status-container {
        display: flex;
        justify-content: space-between;
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
        margin-bottom: 10px;
    }

    .circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #E0E0E0;
        border: 2px solid transparent;
    }

    .circle.active {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }

    .line {
        flex-grow: 1;
        height: 4px;
        background-color: #E0E0E0;
    }

    .line.active {
        background-color: #4CAF50;
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

    .details li {
        margin-bottom: 10px;
    }

    button:hover {
        background-color: #388E3C;
    }

    .card {
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #ccc;
        margin: 0 10px;
    }

    .circle.active {
        background-color: #007bff;
    }

    .line {
        height: 2px;
        width: 40px;
        background-color: #ccc;
        margin: 0 10px;
    }

    .line.active {
        background-color: #007bff;
    }

    .details li {
        margin-top: 10px;
    }

    .circle,
    .line {
        margin-right: 0;
        margin-left: 0;
    }

    .circle {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: #ccc;
        display: inline-block;
    }

    .circle.active {
        background-color: #007bff;
    }

    .line {
        height: 2px;
        width: 40px;
        background-color: #ccc;
        display: inline-block;
    }

    .line.active {
        background-color: #007bff;
    }

    .highlighted-title h3 {
        font-size: 28px;
        background-color: #FFFFFF;
        padding: 10px;
        border-radius: 5px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container mt-5 pt-5">
    <div class="card">
        <div class="card-body">
            <div class="header">
                <div class="highlighted-title">
                    <h3>Civic Turbo</h3>
                </div>
            </div>
            <p>Dikirimkan pada 13 Nov 2023</p>
            <div class="status-container d-flex align-items-center">
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
            </div>
            <div class="status-labels d-flex justify-content-between mt-2">
                <span>Menunggu Pembayaran</span>
                <span>Dalam proses</span>
                <span>Dalam pengiriman</span>
                <span>Telah diterima</span>
            </div>
            <ul class="details mt-3">
                <li>13 Nov 2023 - 11:45 Terima kasih sudah Membeli di Mobil Pilihan!</li>
                <li>21 Nov 2023 - 20:47 Pesanan anda sudah sampai terima kasih karena telah memilih Mobil Pillihan.<a href="#"></a></li>
            </ul>
        </div>
    </div>
    <div class="card mt-2">
        <div class="card-body">
            <div class="header">
                <div class="highlighted-title">
                    <h3>Mitsubishi L300</h3>
                </div>
            </div>
            <p>Dikirimkan pada 13 Nov 2023</p>
            <div class="status-container d-flex align-items-center">
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                <div class="line active"></div>
                <div class="circle active"></div>
                <div class="line"></div>
                <div class="circle"></div>
            </div>
            <div class="status-labels d-flex justify-content-between mt-2">
                <span>Menunggu Pembayaran</span>
                <span>Dalam proses</span>
                <span>Dalam pengiriman</span>
                <span>Telah diterima</span>
            </div>
            <ul class="details mt-3">
                <li>13 Nov 2023 - 11:45 Terima kasih sudah Membeli di Mobil Pilihan!</li>
                <li>21 Nov 2023 - 20:47 Pesanan anda dalam proses pengiriman oleh jasa pengiriman Mobil Pillihan dengan nomor resi MPOS-3255543812-8988.<a href="#"></a></li>
            </ul>
        </div>
    </div>
</div>

@endsection
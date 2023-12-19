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
        @if ($transaksi->count() > 0)
            @foreach ($transaksi as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="header">
                        <h3>{{  $item->mobil->nama  }}</h3>
                    </div>
                    <p>Dikirimkan pada {{$item->tanggal }}</p>
                    <div class="status-container">
                        @if ($item->status == 'Dibayar')
                            <div class="circle active"></div>
                            <div class="line active"></div>
                            <div class="circle active"></div>
                            <div class="line"></div>
                            <div class="circle"></div>
                        @elseif ($item->status == 'Diterima')
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
        @else
            <p>No track Record</p>
        @endif
    </div>
@endsection

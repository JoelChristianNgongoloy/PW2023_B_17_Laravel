@extends('dashboard')
@section('content')

<title></title>

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
        <div class="row">
            <div class="col-lg-2">
                <div class="card card-body h-100 justify-content-center">
                    <img style="border-radius: 50%;" src="{{asset('img/images3.jpg')}}" class="img-fluid rounded img-bukti-ngantor" alt="Bukti ngantor (sudah dihapus)" />
                </div>
            </div>
            <div class="col-lg-10">
                <div class="card card-body h-100 justify-content-center">
                    <h1 class="fw-bold mb-3">Joel Christian Ngongoloy</h1>
                    <div class="d-flex flex-wrap" style="justify-content:space-between">
                        <div>
                            <div>
                                <h5><strong>Nomor Handphone</strong></h5>
                                <h5>08313456473</h5>
                            </div>
                            <div class="mt-3">
                                <h5><strong>Alamat</strong></h5>
                                <h5>Jln.Babarsari No.01</h5>
                            </div>
                        </div>
                        <div>
                            <h5><strong>Email</strong></h5>
                            <h5>joel03@yahoo.com</h5>
                        </div>
                    </div>
                    <div class=" btndan mt-2 d-grid col-3 ">
                        <button type="submit" id="btnlog" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #ffffff
                                    }
                                </style>
                                <path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                            </svg> Log Out
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <h1><strong>History</strong></h1>
        <hr>
        <div class="row">
            <div class="col-lg-10">
                <div class="card card-body h-100 justify-content-center">
                    <h1><strong>CIVIC TURBO</strong></h1>
                    <h4>Tanggal Pembayaran : 5-Oct-2023</h4>
                    <h5>Status : <span class="badge rounded-pill text-bg-success">Lunas</span></h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-body h-100 justify-content-center">
                    <img style="border-radius: 4px;" src="https://www.carmudi.co.id/journal/wp-content/uploads/2017/08/Civic-Type-R-Carmudi-2-1024x768.jpg" alt="gambarmobil">
                    <div class="" style="text-align: center;">
                        <h4><strong>CIVIC TURBO</strong></h4>
                        <p>Telah diterima</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-10">
                <div class="card card-body h-100 justify-content-center">
                    <h1><strong>Mitsubishi L300</strong></h1>
                    <h4>Tanggal Pembayaran : 10-Oct-2023</h4>
                    <h5>Status : <span class="badge rounded-pill text-bg-danger">Belum Lunas</span></h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card card-body h-100 justify-content-center">
                    <img style="border-radius: 4px;" src="https://www.sunstarmotor.id/wp-content/uploads/2020/05/l300-web-catalogue.jpg" alt="gambarmobil">
                    <div class="" style="text-align: center;">
                        <h4><strong>Mitsubishi L300</strong></h4>
                        <p>Belum diterima</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.getElementById('btnlog').addEventListener("click", function() {
        window.location.href = "{{url('/')}}";
    });
</script>
@endsection
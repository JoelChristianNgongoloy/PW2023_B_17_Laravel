@extends('dashboard')
@section('content')

<style>
    .content {
        display: flex;
        justify-content: center;
        margin-top: 180px;
    }

    hr {
        border: 1px solid grey;
    }


    @media screen and (max-width: 576px) {
        .form-floating {
            width: 280px;
        }
    }
</style>

<div class="content">
    <div class="row d-flex justify-content-center col-lg-9">
        <div class="col-lg-7">
            <div>
                <div class="card card-body justify-content-center">

                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputText6" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="inputText6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="Joel Christian Ngongoloy" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputnumber6" class="col-form-label">No Telepon</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="inputText6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="081932479234" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputalamat6" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="inputEmail6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="jln. Babarsari No.01" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputemail6" class="col-form-label">Email</label>
                        </div>
                        <div class="col-6">
                            <input type="email" id="inputEmail6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="joel@yahoo.com" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div class="card card-body justify-content-center">
                    <h1>Pembayaran</h1>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputemail6" class="col-form-label">Metode</label>
                        </div>
                        <div class="col-6">
                            <select class="form-select" id="metodePembayaran" aria-label="Default select example"
                                name="metode_pembayaran">
                                <option selected>Pilih Metode</option>
                                @foreach($metodePembayaran as $metode)
                                <option value="{{ $metode }}">{{ $metode }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div>
                <div class="card card-body h-100">
                    <h4>Mobil Pilihan</h4>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <img width="150px"
                                src="https://www.carmudi.co.id/journal/wp-content/uploads/2017/08/Civic-Type-R-Carmudi-2-1024x768.jpg"
                                alt="">
                        </div>
                        <div class="col-auto">
                            <p>Civic Turbo</p>
                            <p>1 x 1.000.000.000</p>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Sub Total</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp.1.000.000.000</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Pengiriman</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp.0</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Discount</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp.0</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Pajak</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp.1.000.000</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Total</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp.1.001.000.000</p>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center" style="justify-content:space-between;">
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="button" class="btn btn-danger" id="batal" style="border-radius: 10px;">
                                Batalkan</button>
                        </div>
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="button" id="showModalBtn" class="btn btn-link btn-sm" data-bs-toggle="modal"
                                style="background-color: green; color: white; font-size: 17px; padding: 6px; border-radius: 10px; text-decoration: none;">
                                Bayar <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <style>
                                        svg {
                                            fill: #ffffff
                                        }
                                    </style>
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg>
                            </button>
                        </div>
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true"
                                    data-bs-autohide="true" style="background-color: green; color: white;">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            <i class="fas fa-check" style="margin-right: 5px;"></i>Berhasil Membayar!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

<!-- <script>
    document.getElementById('batal').addEventListener("click", function () {
        window.location.href = "{{url('homePage')}}"
    });
</script> -->



@endsection
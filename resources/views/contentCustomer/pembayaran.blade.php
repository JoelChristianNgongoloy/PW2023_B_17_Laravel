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

    #loadingAnimation,
    #successAnimation {
        transition: opacity 1s ease-in-out;
        position: absolute;
        width: 300px;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .hidden {
        opacity: 2;
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
                    <h1>Informasi Customer</h1>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputText6" class="col-form-label">Nama Lengkap</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="inputText6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="{{ $transaksi->user->name }}" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputnumber6" class="col-form-label">No Telepon</label>
                        </div>
                        <div class="col-6">
                            <input type="number" id="inputText6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="{{ $transaksi->user->no_telp }}" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputalamat6" class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-6">
                            <input type="text" id="inputEmail6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="{{ $transaksi->user->alamat }}" disabled>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="inputemail6" class="col-form-label">Email</label>
                        </div>
                        <div class="col-6">
                            <input type="email" id="inputEmail6" class="form-control"
                                style="border-top: none; border-right:none; border-left:none; border-bottom: 1px solid grey;"
                                aria-describedby="passwordHelpInline" value="{{ $transaksi->user->email }}" disabled>
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
                            {{-- <form action="{{ url('metodePembayaran/' . $mobil->id) }}" method="POST"> --}}
                                {{-- @csrf --}}
                                <select class="form-select" id="metodePembayaran" name="metode_Pembayaran"
                                    aria-label="Default select example">
                                    <option value="" selected disabled>{{ $transaksi->metode_pembayaran }}</option>
                                </select>
                                <div class="d-flex justify-content-end mt-2">
                                    <button disabled type="submit" class="btn btn-primary">
                                        Simpan Metode
                                    </button>
                                </div>
                                {{--
                            </form> --}}
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
                            <img width="150px" src="{{ asset('/public/images/' . $transaksi->mobil->image) }}"
                                alt="Foto mobil">
                        </div>
                        <div class="col-auto">
                            <p>{{ $transaksi->mobil->nama }}</p>
                            <p>1 x Rp. {{ number_format($transaksi->mobil['harga_mobil'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="row g-3 mt-2 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Sub Total</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp. {{ number_format($transaksi->mobil['harga_mobil'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Pengiriman</label>
                        </div>
                        <div class="col-auto">
                            <p> Rp. {{ number_format(0.01 * $transaksi->mobil['harga_mobil'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Discount</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp. {{ number_format(0.1 * $transaksi->mobil['harga_mobil'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Pajak</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp. {{ number_format(0.05 * $transaksi->mobil['harga_mobil'], 0, ',', '.') }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row g-3 align-items-center" style="justify-content: space-between;">
                        <div class="col-auto">
                            <label for="input6" class="col-form-label">Total</label>
                        </div>
                        <div class="col-auto">
                            <p>Rp.
                                {{ number_format($transaksi->mobil['harga_mobil'] + 0.01 *
                                $transaksi->mobil['harga_mobil'] - 0.1 * $transaksi->mobil['harga_mobil'] + 0.05 *
                                $transaksi->mobil['harga_mobil'], 0, ',', '.') }}
                            </p>

                        </div>
                    </div>
                    <div class="row g-3 align-items-center" style="justify-content:space-between;">
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <form action="{{ url('delete/' . $transaksi->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" id="batal" style="border-radius: 10px;"><svg class="mb-1"
                                        xmlns="http://www.w3.org/2000/svg" height="1em"
                                        viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <style>
                                            svg {
                                                fill: #ffffff
                                            }
                                        </style>
                                        <path
                                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                                    </svg> Batalkan</button>
                            </form>
                        </div>
                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Lanjutkan <svg xmlns="http://www.w3.org/2000/svg" height="1em"
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

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Pembayaran Pemesanan
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div id="modalOverlay"
                                                style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6);">
                                            </div>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <p>Nama Mobil</p>
                                                    </td>
                                                    <td>
                                                        <p> : {{ $transaksi->mobil->nama }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Tipe Mobil</p>
                                                    </td>
                                                    <td>
                                                        <p> : {{ $transaksi->mobil->tipe_mobil }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Deskripsi</p>
                                                    </td>
                                                    <td>
                                                        <p> : {{ $transaksi->mobil->deskripsi }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Harga Mobil</p>
                                                    </td>
                                                    <td>
                                                        <p> : Rp.
                                                            {{ number_format($transaksi->mobil['harga_mobil'], 0, ',',
                                                            '.') }}
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Bank</p>
                                                    </td>
                                                    <td>
                                                        <p> : {{ $transaksi->metode_pembayaran }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p>Batas Pembayaran</p>
                                                    </td>
                                                    <td>
                                                        <p> : {{ date('d-M-Y') }}</p>
                                                    </td>
                                                </tr>
                                            </table>
                                            <form action="{{ url('Pembayaran/' . $transaksi->id) }}" method="POST">
                                                <div class="form-floating" style="padding-right: 20px;">
                                                    <input id="debit" type="number" required class="form-control" />
                                                    <label>Masukkan Kartu Debit </label>
                                                </div>
                                                <div class="modal-footer">
                                                    @csrf <button type="button" class="btn btn-secondary" data - bs -
                                                        dismiss="modal"> Close </button> <button type="submit"
                                                        class="btn btn-primary" onclick="SimpanMetode()"> Bayar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                                    <div id="liveToast" class="toast" role="alert" aria - live="assertive" aria -
                                        atomic="true" data - bs - autohide="true"
                                        style="background-color: green; color: white;">
                                        <div class="d-flex">
                                            <div class="toast-body">
                                                <i class="fas fa-check" style="margin-right: 5px;"> </i>Berhasil
                                                Membayar!
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
    <script script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <script>
        function switchAnimation() {
            var loadingAnimation = document.getElementById('loadingAnimation');
            var successAnimation = document.getElementById('successAnimation');
            var modalOverlay = document.getElementById('modalOverlay');

            modalOverlay.style.display = 'block';
            loadingAnimation.style.display = 'block';

            setTimeout(function () {
                loadingAnimation.style.display = 'none';
                successAnimation.style.display = 'block';

                setTimeout(function () {
                    window.location.href = '/trackMobil';
                    modalOverlay.style.display = 'none';
                }, 3000);
            }, 1000);
        }
    </script>

    <script>
        function SimpanMetode() {
            var metodePembayaran = document.getElementById('debit').value;
            if (metodePembayaran !== "") {
                showSuccessToast();
            } else {
            }

        }

        function showSuccessToast() {
            var toast = new bootstrap.Toast(document.getElementById('liveToast'), {
                delay: 3000 // Set the duration in milliseconds (3 seconds in this example)
            });
            toast.show();
        }
    </script>

    @endsection
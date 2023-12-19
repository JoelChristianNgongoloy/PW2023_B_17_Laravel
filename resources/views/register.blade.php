<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/MpLogo.png') }}" type="image/x-icon">
    <title>Register: MobilPillihan.com</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        h1,
        h2,
        p,
        h5 {
            font-family: 'Poppins', sans-serif;
        }

        .carousel {
            float: left;
            width: 50%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            overflow: hidden;
        }



        .sideRight {
            margin-left: 50%;
            background-color: white;
            width: 50%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .pass-icon {
            width: 30px;
            height: 30px;
            cursor: pointer;
            margin-top: 10px;
            vertical-align: middle;
            margin-left: -35px;
        }

        @media screen and (max-width: 576px) {
            .carousel {
                float: none;
                width: 0%;
            }

            .sideRight {
                margin-left: 0%;
                background-color: white;
                width: 100%;
                object-fit: cover;
                position: static;
                top: 0;
                left: 0;
                z-index: 1;
                overflow-x: hidden;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: larger;
            }

            h5 {
                font-size: medium;
            }

            h6 {
                font-size: small;
            }

            .btn {
                font-size: medium;
            }
        }
    </style>
</head>

<body>
    <div class="container ">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/Login3.jpg') }}" class="imgLogin d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Login4.jpg') }}" class="imgLogin d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Login1.jpg') }}" class="imgLogin d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="sideRight">

            <div class="col-9" style="margin-top: 100px;">
                <h1>Create an account</h1>
                <h5 style="color: grey">Please Sign In to Continue</h5>

            </div>
            <div class="col-9">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        <b>Oops!</b>{{ session('error') }}
                    </div>
                @endif
                <form action="{{ route('actionRegister') }}" method="post">
                    @csrf
                    <div class="form-floating mt-5">
                        <input type="input" class="form-control @error('name') is-invalid @enderror"
                            id="floatingInput" placeholder="yourname"
                            style="border-right: none; border-left: none; border-top: none;" name="name" required>
                        <label for="floatingInput">Nama Lengkap</label>
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <input type="input" class="form-control @error('username') is-invalid @enderror"
                            id="floatingInput" placeholder="yourusername"
                            style="border-right: none; border-left: none; border-top: none;" name="username" required>
                        <label for="floatingInput">Username</label>
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="floatingInput" placeholder="email@gmail.com"
                            style="border-right: none; border-left: none; border-top: none;" name="email" required>
                        <label for="floatingInput">Email</label>
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mt-3 d-flex">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password"
                            style="border-right: none; border-left: none; border-top: none;" name="password" required>
                        <img class="pass-icon" id="pass-icon" onclick="pass()" src="{{ asset('img/hide.png') }}"
                            alt="hide">
                        <label for="password">Password</label>
                    </div>
                    @error('password')
                        {{ $message }}
                    @enderror

                    <div class="form-floating mt-3">
                        <input type="number" class="form-control @error('no_telp') is-invalid @enderror"
                            id="floatingInput" placeholder="No Telp"
                            style="border-right: none; border-left: none; border-top: none;" name="no_telp" required>
                        <label for="floatingInput">No Telepon</label>
                        @error('no_telp')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-floating mt-3">
                        <input type="input" class="form-control @error('alamat') is-invalid @enderror"
                            id="floatingInput" placeholder="yourAddres"
                            style="border-right: none; border-left: none; border-top: none;" name="alamat" required>
                        <label for="floatingInput">Alamat Lengkap</label>
                    </div>
                    @error('alamat')
                        {{ $message }}
                    @enderror
                    <div class="d-grid gap-2 col-5 mt-5 mx-auto">
                        <button class="btn btn-dark btn-lg" type="submit">Create account</button>
                    </div>
                </form>
            </div>

            <div class="d-flex mt-5">
                <h6>Already have an account?</h6>
                <h6><a href="{{ url('/') }}">Log in</a></h6>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        let a;

        function pass() {
            if (a == 1) {
                document.getElementById('password').type = 'password';
                document.getElementById('pass-icon').src = "{{ asset('img/hide.png') }}";
                a = 0;
            } else {
                document.getElementById('password').type = 'text';
                document.getElementById('pass-icon').src = "{{ asset('img/view.png') }}";
                a = 1;
            }
        }
    </script>
</body>

</html>

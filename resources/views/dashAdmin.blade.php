<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <style>
        .center-modal {
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: auto;
        }

        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }

            th,
            td {
                display: table-cell;
                text-align: center;
            }

            .wrapper {
                width: 750px;
                margin: 0 auto;
            }

            .navbar {
                width: 750px;
            }

            #sidebar-overlay {
                height: 660px;
            }

        }
    </style>
    <link rel="shortcut icon" href="{{ asset('img/MpLogo.png') }}" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Boostrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper" style="background-color: #f0f0f0;">
        <nav class="main-header navbar navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>

        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #d2d2d4">

            <a href="#" class="brand-link"
                style="background-color: #d0c4c4;width: 260px;; height: 120px; color:black;text-decoration: none; border-bottom: none; padding-top: 50px;margin-left: -10px;">
                <img src=" {{ asset('img/MpLogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-5"
                    style="width: 50px; height: 100px;">
                <span class="brand-text font-weight-light"><strong>Mobil Pillihan</strong></span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('admin') }}" class="nav-link">
                                <i class="nav-icon far fa-circle" style="color: rgba(128, 128, 128, 0.5);"></i>
                                <p style="color: black;"><strong> Welcome Admin </strong></p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/tampilMobil') }}" class="nav-link">
                                <i class="nav-icon far fa-circle" style="color: rgba(128, 128, 128, 0.5);"></i>
                                <p style="color: black;"><strong>Data Mobil</strong> </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/tampilUser') }}" class="nav-link">
                                <i class="nav-icon far fa-circle" style="color: rgba(128, 128, 128, 0.5);"></i>
                                <p style="color: black;"><strong>Data User</strong> </p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="d-flex justify-content-center" style="position: absolute; bottom: 0; width: 100%;">
                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </button>
            </div>
        </aside>
        <div class="content-wrapper" style="background-color: white;">
            @yield('content')
        </div>
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                Kelompok 17
            </div>
            <strong>Copyright &copy; {{ date('Y') }} <a href="#">MobilPillihan</a>. </strong> All rights
            reserved.
        </footer>
    </div>


    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="width: 70%; margin-left: 100px;">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white;">Apakah ingin Logout
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a class="btn btn-danger" href="{{ route('actionLogout') }}"><i class="fa fa-user"></i>
                        Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    <script>
        const myModal = document.getElementById('staticBackdrop')
        const myInput = document.getElementById('staticBackdropLabel')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>

</html>

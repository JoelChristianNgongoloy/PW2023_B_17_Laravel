<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('img/MpLogo.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #003366;
            padding: 10px 20px;
            width: 100%;
            position: fixed;
            top: 0;
            height: 8vh;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .container-content {
            flex-grow: 1;
        }

        .wrapper {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .logo-link {
            display: inline-block;
            padding: 20px;
        }

        .logo {
            font-size: 30px;
            font-weight: bold;
            color: white;
            letter-spacing: 1px;
            height: auto;
            width: 150px;
            margin-top: -10px;
        }

        .search-container {
            display: flex;
            padding: 4px 10px 4px 10px;
            border-radius: 50px;
            background-color: #FFFFFF;
            max-width: 400px;
            width: 340px;
        }

        .search-input {
            flex-grow: 1;
            padding-left: 30px;
            width: 260px;
            border: none;
            outline: none;
            font-size: 16px;
        }

        .search-button {
            padding: 10px 15px;
            border: none;
            background-color: #003366;
            color: white;
            cursor: pointer;
            border-radius: 25px;
            margin-right: -25px;
        }

        .search-button:hover {
            background-color: #FF6347;
            transition: background-color 0.3s ease;
        }

        .nav-icons {
            display: flex;
            gap: 30px;
        }

        .nav-icons i {
            font-size: 30px;
            color: #3498db;
            transition: transform 0.3s ease, color 0.3s ease;
        }

        .nav-icons i:hover {
            color: #ff4500;
            transform: scale(1.1);
        }

        .fab {
            font-size: 24px;
            color: #555;
            transition: color 0.3s;
        }

        .fab:hover {
            color: #333;
        }

        @media screen and (max-width: 576px) {
            .wrapper {
                width: 100%;
            }

            .navbar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #003366;
                padding: 10px 20px;
                width: 100%;
                position: fixed;
                top: 0;
                height: 8vh;
            }

            .logo {
                font-size: 5px;
                font-weight: bold;
                color: white;
                letter-spacing: 1px;
                height: auto;
                width: 70px;
                margin-left: -24px;
                margin-top: -10px;
            }

            .search-container {
                display: flex;
                padding: 5px 5px;
                border-radius: none;
                background-color: none;
                max-width: 600px;
                width: auto;
                margin: 0 10px;
                margin-top: -35px;
                margin-left: 65px;
            }

            .search-input {
                flex-grow: 1;
                padding: 5px;
                border: none;
                outline: none;
                font-size: 10px;
            }

            .search-button {
                flex-shrink: 1;
                padding: 5px 10px;
                border: none;
                font-size: small;
                background-color: #003366;
                color: white;
                cursor: pointer;
                border-radius: 25px;
                margin-right: 2px;
            }

            .nav-icons {
                margin-top: -37px;
                margin-left: 300px;
            }

            .icon {
                width: 7px;
            }
        }
    </style>


</head>

<body>
    <div class="wrapper">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a href="{{ url('home') }}">
                    <img src="{{ asset('img/MpLogo.png') }}" alt="Mobil Pilihan" class="logo">
                </a>
                <div class="search-container" style="margin-right: 100px">
                    <form action="{{ url('home') }}" method="GET">
                        <input type="text" placeholder="Cari harga, spek dan lainnya" class="search-input"
                            id="searchInput" name="search">
                        <button class="search-button" id="searchButton">Cari</button>
                    </form>
                </div>
                <div class="nav-icons">
                    <a href="{{ url('trackMobil') }}" class="icon"><i class="fas fa-map-marker-alt"></i></a>
                    <a href="{{ url('profile') }}" class="icon"><i class="fas fa-user"></i></a>
                </div>
            </div>
        </nav>
        <div class="container-content">
            @yield('content')
        </div>

        <div class="container-fluid bg-light">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                        <img src="{{ asset('img/MpLogo.png') }}" alt="Mobil Pilihan" width="150" height="80">
                        <div class="ml-3">
                            <h4>Mobil Pillihan</h4>
                            <p>www.mobilpilihan.com</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <p>Copyright &copy; 2021 Private Oracle</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">PRIVACY POLICY</a></li>
                            <li class="list-inline-item"><a href="#">TERMS AND CONDITIONS</a></li>
                            <li class="list-inline-item"><a href="#">CONTACT US</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Keep In Touch</h5>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                        <p>You must be of legal adult age as per your country's requirements to use this service. Please
                            note this service is for entertainment purposes only, you are responsible for all your life
                            decisions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

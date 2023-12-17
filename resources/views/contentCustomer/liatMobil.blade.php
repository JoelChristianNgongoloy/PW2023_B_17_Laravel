@extends('dashboard')
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

    .rating-container {
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .rating-overview {
        display: inline-flex;
        align-items: baseline;
    }

    .rating-star {
        color: #ffc107;
        font-size: 2rem;
        /* 32px */
        margin-right: .25rem;
    }

    .rating-value {
        font-size: 4rem;
        /* 64px */
        color: #333;
    }

    .rating-out-of {
        font-size: 1rem;
        /* 16px */
        color: #6c757d;
    }

    .satisfaction-text {
        color: #28a745;
        font-size: 1rem;
    }

    .rating-details span {
        font-size: .875rem;
        /* 14px */
        color: #6c757d;
    }

    .rating-bar-container {
        display: flex;
        align-items: center;
        margin-bottom: 0.5rem;
    }

    .star-number {
        display: inline-block;
        width: 1.5rem;
        color: #ffc107;
        margin-right: 0.5rem;
        text-align: right;
    }

    .progress-bar {
        flex-grow: 1;
        height: 1rem;
        background-color: #ddd;
        border-radius: 5px;
        position: relative;
        font-size: 0.875rem;
        color: #333;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .progress-bar.bg-success {
        background-color: #28a745;
    }

    .bg-success {
        background-color: #28a745 !important;
    }

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
                    <img src="https://www.carmudi.co.id/journal/wp-content/uploads/2017/08/Civic-Type-R-Carmudi-2-1024x768.jpg"
                        class="card-img" alt="Bandingkan Motor">
                </div>
                <div class="col-md-6 car-info">
                    <h2>Civic Turbo</h2>
                    <p>Rp 7,5 – 1 Milyar Perkiraan Harga di Medan</p>
                    <p>Dp Rp1,88 Milyar Angsuran : Rp 176,27 Juta x 36</p>
                    <p><a href="{{url('pemesanan')}}" class="btn btn-primary px-4">Beli</a></p>
                    <p>Jangan lewatkan tawaran terbaik bulan ini.</p>
                    <p>
                        <button class="btn btn-light"><i class="fas fa-share-alt"></i> Bagikan</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-">
    <h1 class="mb-4">Average Rating of Civic Turbo Sport Edition</h1>

    <div class="row justify-content-start">
        <div class="col-sm-8 col-md-6 col-lg-4 rating-section">
            <div class="col-auto rating-section">
                <div class="rating-overview">
                    <h2 class="rating-value">4.7<span class="rating-out-of">/5</span></h2>
                    <div class="stars">⭐⭐⭐⭐⭐</div>
                    <p class="total-ratings">1850 Penilaian</p>
                </div>
                <div class="rating-bars">
                    <div class="rating-bars">
                        <div class="rating-bar">
                            <span class="stars">⭐⭐⭐⭐⭐</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 80%;">1586</div>
                            </div>
                        </div>
                        <div class="rating-bar">
                            <span class="stars">⭐⭐⭐⭐</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 60%;">140</div>
                            </div>
                        </div>
                        <div class="rating-bar">
                            <span class="stars">⭐⭐⭐</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%;">73</div>
                            </div>
                        </div>
                        <div class="rating-bar">
                            <span class="stars">⭐⭐</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%;">21</div>
                            </div>
                        </div>
                        <div class="rating-bar">
                            <span class="stars">⭐</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 10%;">30</div>
                            </div>
                        </div>
                    </div>
                    <p>508 Reviews</p>
                </div>
            </div>
        </div>
    </div>

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
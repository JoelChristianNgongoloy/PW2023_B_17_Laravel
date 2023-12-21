@extends('dashboard')

@section('title')
Situs Jual Beli Mobil Online Terlengkap
@endsection

@section('content')
<style>
    .carousel {
        margin-top: 10px;
        background-color: #f8f8f8;
    }

    h4,
    h5 {
        font-weight: bold;
    }

    .wrapper-item {
        max-height: 400px;
        overflow-x: scroll;
    }

    .wrapper-item .card {
        min-width: 290px;
        margin-left: 10px;
    }

    .wrapper-item::-webkit-scrollbar {
        height: 5px;
        width: 5px;
        background: gray;
    }

    .wrapper-item::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .wrapper-item::-webkit-scrollbar-thumb {
        background: #888;
    }

    .wrapper-item::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .wrapper-item::-webkit-scrollbar-thumb:horizontal {
        background: #000;
        border-radius: 10px;
    }

    .card:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Star Rating Styles */
    .star-rating .far.fa-star {
        color: #ccc;
        cursor: pointer;
        transition: color 0.3s;
    }

    .star-rating .far.fa-star:hover,
    .star-rating .far.fa-star:hover~.far.fa-star {
        color: #ccc;
    }

    .star-rating .far.fa-star:hover~.far.fa-star,
    .star-rating .far.fa-star:hover {
        color: #ff0;
    }

    .star-rating .far.fa-star:focus {
        outline: none;
    }
</style>

<div class="content" style="width: 100%;">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/11/30171831/mobil-murah-810x395.jpg"
                    class="d-block w-100" style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://images.tokopedia.net/img/KRMmCm/2022/6/28/7e3aa3d5-d56d-4cb5-816d-133d8f3e7f72.jpg"
                    class="d-block w-100" style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/Honda_Accord_Maestro_%28front%29%2C_Denpasar.jpg"
                    class="d-block w-100" style="height: 800px; object-fit: cover;">
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
    <div class="container mt-4">
        <h3>Mobil Terbaru</h3>
        <div class="row">
            @forelse ($mobil as $item)
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img style="height: 320px;" src="{{ asset('/public/images/' . $item->image) }}"
                        class="card-img-top object-fit-cover" alt="Foto Mobil">
                    <div class="card-body col-12">
                        <h3>{{ $item['nama'] }}</h3>
                        <p class="text-muted">Rp. {{ number_format($item['harga_mobil'], 0, ',', '.') }}</p>
                        <a href="{{ url('liatMobil/' . $item->id) }}"
                            class="btn btn-primary btn-sm btn-block mb-2">Pesan</a>
                        <div class="d-flex justify-content-between">
                            <p class="small">{{ $item['tahun_produksi'] }} | {{ $item['merk'] }}</p>
                            <p class="small">Stok: <strong>{{ $item['stok'] }}</strong></p>
                        </div>

                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                mohon Bersabar yh guys
            </div>
            @endforelse

            <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel">Write a Review for Audi A6</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ url('/') }}">
                                <div class="mb-3">
                                    <label for="rating" class="col-form-label">Rating:</label>
                                    <div class="star-rating">
                                        <span class="far fa-star" data-rating="1"></span>
                                        <span class="far fa-star" data-rating="2"></span>
                                        <span class="far fa-star" data-rating="3"></span>
                                        <span class="far fa-star" data-rating="4"></span>
                                        <span class="far fa-star" data-rating="5"></span>
                                        <input type="hidden" id="rating" name="rating" value="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="review-text" class="col-form-label">Review:</label>
                                    <textarea class="form-control" id="review-text" name="review-text"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="sub" class="btn btn-primary">Submit
                                        Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            {{-- @forelse ($mobil as $item)
            <h3 class="mt-4">Mobil Merk {{ $item->merk }}</h3>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img style="height: 320px;" src="{{ asset('/public/images/' . $item->image) }}"
                        class="card-img-top object-fit-cover" alt="Foto Mobil">
                    <div class="card-body col-12">
                        <h3>{{ $item['nama'] }}</h3>
                        <p class="text-muted">Rp. {{ number_format($item['harga_mobil'], 0, ',', '.') }}
                        </p>
                        <a href="{{ url('liatMobil/' . $item->id) }}"
                            class="btn btn-primary btn-sm btn-block mb-2">Pesan</a>
                        <div class="d-flex justify-content-between">
                            <p class="small">{{ $item['tahun_produksi'] }} | {{ $item['merk'] }}</p>
                            <p class="small">Stok: <strong>{{ $item['stok'] }}</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-danger">
                Mohon Bersabar ya guys
            </div>
            @endforelse --}}


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const reviewModal = document.getElementById('reviewModal');
            const submitReviewBtn = reviewModal.querySelector('.btn-primary');

            submitReviewBtn.addEventListener('click', function (event) {
                event.preventDefault();

                const rating = document.getElementById('rating').value;
                const reviewText = document.getElementById('review-text').value;

                console.log('Rating:', rating);
                console.log('Review:', reviewText);
                const modal = new bootstrap.Modal(reviewModal);
                modal.hide();
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const reviewModal = document.getElementById('reviewModal');
            const submitReviewBtn = reviewModal.querySelector('.btn-primary');

            submitReviewBtn.addEventListener('click', function (event) {
                event.preventDefault();
                const rating = document.getElementById('rating').value;
                const reviewText = document.getElementById('review-text').value;
                window.location.href = "{{ url('liatMobil') }}";
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const stars = document.querySelectorAll('.star-rating .fa-star');

            stars.forEach(function (star) {
                star.addEventListener('click', function () {
                    const ratingValue = this.getAttribute('data-rating');

                    document.getElementById('rating').value = ratingValue;
                    stars.forEach(star => star.classList.remove('fas'));
                    stars.forEach(star => star.classList.add('far'));

                    for (let i = 0; i < ratingValue; i++) {
                        stars[i].classList.remove('far');
                        stars[i].classList.add('fas');
                    }
                });
            });
        });
    </script>
    @endsection
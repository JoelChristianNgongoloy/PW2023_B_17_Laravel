@extends('dashboard')
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
                <img src="https://cdnwpedutorenews.gramedia.net/wp-content/uploads/2022/11/30171831/mobil-murah-810x395.jpg" class="d-block w-100" style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://images.tokopedia.net/img/KRMmCm/2022/6/28/7e3aa3d5-d56d-4cb5-816d-133d8f3e7f72.jpg" class="d-block w-100" style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/6/61/Honda_Accord_Maestro_%28front%29%2C_Denpasar.jpg" class="d-block w-100" style="height: 800px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-4">
        <h3 class="mb-4">Cari Yang Terbaik</h3>

        <div class="container-inner">
            <div class="container-item">
                <div class="wrapper-item d-flex">
                    <div class="card">
                        <img src="https://lzd-img-global.slatic.net/g/p/927243d41ec4d1613a5f3bc6521e36de.jpg_720x720q80.jpg_.webp" class="card-img-top" alt="Bandingkan Motor">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title text-center">Honda</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://pic.onlinewebfonts.com/thumbnails/icons_537268.svg" class="card-img-top" alt="Bandingkan Motor">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hyundai</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://i.pinimg.com/564x/28/af/9f/28af9f9e7d9a24312579eeb763670105.jpg" class="card-img-top" alt="Bandingkan Motor">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title text-center">Toyota</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://cdn.3axis.co/user-images/zo9ymwe7.jpg" class="card-img-top" alt="Bandingkan Motor">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title text-center">Mazda</h5>
                        </div>
                    </div>

                    <div class="card">
                        <img src="https://bmw.astra.co.id/wp-content/uploads/2023/07/BMW.svg_-300x300.png" class="card-img-top" alt="Bandingkan Motor">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title text-center">BMW</h5>
                        </div>
                    </div>
                    <div class="card">
                        <img src="https://wallpaperaccess.com/full/916624.jpg" class="card-img-top" alt="Bandingkan Motor">
                        <hr>
                        <div class="card-body">
                            <h5 class="card-title text-center">Audi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h3>Mobil Terbaru</h3>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img style="height: 320px;" src="https://www.carmudi.co.id/journal/wp-content/uploads/2017/08/Civic-Type-R-Carmudi-2-1024x768.jpg" class="card-img-top" alt="Audi R8">
                    <div class="card-body">
                        <h5>Civic Turbo</h5>
                        <p class="text-muted">Rp 7,5 – 1 Milyar</p>
                        <p class="small">Angsuran : Rp 176,27 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#reviewModal">Tulis Review</button>
                        <a href="{{url('liatMobil')}}" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="sub" class="btn btn-primary">Submit Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img style="height: 320px;" src="https://imgcdn.oto.com/large/gallery/exterior/38/1316/toyota-sienta-front-angle-low-view-433415.jpg" class="card-img-top" alt="Toyota Sienta">
                    <div class="card-body">
                        <h5>Toyota Sienta</h5>
                        <p class="text-muted">Rp 325,4 – 419,9 Juta</p>
                        <p class="small">Angsuran : Rp 7,65 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#reviewModal">Tulis Review</button>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel">Write a Review for Audi A6</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="sub" class="btn btn-primary">Submit Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img style="height: 320px;" src="https://www.sunstarmotor.id/wp-content/uploads/2020/05/l300-web-catalogue.jpg" class="card-img-top" alt="Mitsubishi L300">
                    <div class="card-body">
                        <h5>Mitsubishi L300</h5>
                        <p class="text-muted">Rp 217,15 – 227,9 Juta</p>
                        <p class="small">Angsuran : Rp 5,1 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#reviewModal">Tulis Review</button>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reviewModalLabel">Write a Review for Audi A6</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="">
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
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" id="sub" class="btn btn-primary">Submit Review</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img style="height: 320px;" src="https://imgcdn.oto.com/large/gallery/exterior/1/4/audi-a6-full-front-view-715811.jpg" class="card-img-top" alt="Audi A6">
                    <div class="card-body">
                        <h5>Audi A6</h5>
                        <p class="text-muted">Rp 1,26 Milyar</p>
                        <p class="small">Angsuran : Rp 29,57 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#reviewModal">Tulis Review</button>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
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
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="sub" class="btn btn-primary">Submit Review</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="mt-4">Mobil Populer</h3>
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.audiusa.com/content/dam/nemo/us/Sport/cropped/redesign/1920X1920_MY24--RS6-Front-Parked.jpg" class="card-img-top" alt="Audi R8">
                    <div class="card-body">
                        <h5>Audi R8</h5>
                        <p class="text-muted">Rp 7,5 – 8,5 Milyar</p>
                        <p class="small">Angsuran : Rp 176,27 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm mb-2">Tulis Review</a>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.audiusa.com/content/dam/nemo/us/Sport/cropped/redesign/1920X1920_MY24--RS6-Front-Parked.jpg" class="card-img-top" alt="Toyota Sienta">
                    <div class="card-body">
                        <h5>Toyota Sienta</h5>
                        <p class="text-muted">Rp 325,4 – 419,9 Juta</p>
                        <p class="small">Angsuran : Rp 7,65 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm mb-2">Tulis Review</a>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.audiusa.com/content/dam/nemo/us/Sport/cropped/redesign/1920X1920_MY24--RS6-Front-Parked.jpg" class="card-img-top" alt="Mitsubishi L300">
                    <div class="card-body">
                        <h5>Mitsubishi L300</h5>
                        <p class="text-muted">Rp 217,15 – 227,9 Juta</p>
                        <p class="small">Angsuran : Rp 5,1 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm mb-2">Tulis Review</a>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card mb-4 shadow-sm">
                    <img src="https://www.audiusa.com/content/dam/nemo/us/Sport/cropped/redesign/1920X1920_MY24--RS6-Front-Parked.jpg" class="card-img-top" alt="Audi A6">
                    <div class="card-body">
                        <h5>Audi A6</h5>
                        <p class="text-muted">Rp 1,26 Milyar</p>
                        <p class="small">Angsuran : Rp 29,57 Juta x 36</p>
                        <div class="mb-2">
                            <span class="text-warning">★</span> 4.67 (42 Ulasan)
                        </div>
                        <a href="#" class="btn btn-outline-primary btn-sm mb-2">Tulis Review</a>
                        <a href="#" class="btn btn-primary btn-sm mb-2">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const reviewModal = document.getElementById('reviewModal');
        const submitReviewBtn = reviewModal.querySelector('.btn-primary');

        submitReviewBtn.addEventListener('click', function(event) {
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
    document.addEventListener('DOMContentLoaded', function() {
        const reviewModal = document.getElementById('reviewModal');
        const submitReviewBtn = reviewModal.querySelector('.btn-primary');

        submitReviewBtn.addEventListener('click', function(event) {
            event.preventDefault();
            const rating = document.getElementById('rating').value;
            const reviewText = document.getElementById('review-text').value;
            window.location.href = "{{ url('liatMobil') }}";
        });
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stars = document.querySelectorAll('.star-rating .fa-star');

        stars.forEach(function(star) {
            star.addEventListener('click', function() {
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
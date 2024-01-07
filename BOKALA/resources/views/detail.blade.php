@extends('layout/main')
@section('main')
    <section class="detail mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://source.unsplash.com/1000x600/?basketball" class="d-block w-100"
                                    alt="https://source.unsplash.com/1000x600/?nature">
                            </div>
                            <div class="carousel-item">
                                <img src="https://source.unsplash.com/1000x600/?soccer" class="d-block w-100"
                                    alt="https://source.unsplash.com/1000x600/?nature">
                            </div>
                            <div class="carousel-item">
                                <img src="https://source.unsplash.com/1000x600/?volley" class="d-block w-100"
                                    alt="https://source.unsplash.com/1000x600/?nature">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col">
                    <h1>{{ $tempat['namaTempat'] }}</h1>
                    <h3><Span>Rp.{{ $tempat['harga'] }}/</Span><span class="fs-5">jam</span></h3>
                    <h3><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i class="bi bi-star"></i><span
                            class="ms-2 fs-5">#jumlah Views</span></h3>
                    <form method="post" action="">
                        <div class="row row-cols-lg-auto g-3 align-items-center mt-4">
                            <div class="col-12 mt-2 mb-3">
                                <h4>Tanggal</h4>
                                <div class="form-group">
                                    <label class="visually-hidden" for="date">Tanggal</label>
                                    <input class="form-control" id="date" name="date" placeholder="Tanggal Pesan"
                                        type="text" />
                                </div>
                                <h4>Jam</h4>
                                <div class="cs-form d-flex flex-row-reverse">
                                    <input type="time" class="form-control" value="10:05 AM" />
                                    <h3> - </h3>
                                    <input type="time" class="form-control" value="10:05 AM" />
                                </div>
                            </div>
                        </div>
                        <h4>Alamat Lapangan</h4>
                        <p>{{ $tempat['alamat'] }}</p>
                        <h4>Fasilitas Lapangan</h4>
                        <p>{{ $tempat['fasilitas'] }}</p>
                        <button type="submit" class="btn btn-primary">Pesan Sekarang</button><span class="fs-3 ms-3"><i
                                class="bi bi-heart"></i><i class="bi bi-heart-fill"></i></span>

                    </form>
                </div>
            </div>

        </div>
    </section>
    <script>
        $(document).ready(function() {
            var date_input = $('input[name="date"]'); //our date input has the name "date"
            var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
            var options = {
                format: 'mm/dd/yyyy',
                container: container,
                todayHighlight: true,
                autoclose: true,
            };
            date_input.datepicker(options);
        })
    </script>
@endsection

@extends('layout/main')
@section('main')
    <section id="home" class="home"
        style="background-image: url('https://source.unsplash.com/1600x900/?nature');max-width: 1600px;height: 600px;">
        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
                <div class="col text-white mt-5">
                    <h1>Cari Lapangan?</h1>
                    <h1>Bokala Aja</h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            @foreach ($category as $category)
                <div class="col mb-5 mt-5">
                    <a href="/category/{{ $category['namaKategori'] }}">
                        <div class="card h-300">
                            <img src="https://source.unsplash.com/1600x900/?nature" class="card-img-top" alt="..." />
                            <div class="card-img-overlay">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-5 fs-3 text-light "
                                        style="background-color: rgba(0, 0, 0, 0.326);">
                                        {{ $category['namaKategori'] }}</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <section id="testimoni">
        <div class="container my-5 bg-dark p-5 rounded-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow bg-light">
                        <div class="card-body d-flex align-items-center">
                            <div>
                                <h5 class="card-title">Client 1 Name</h5>
                                <p class="card-text">This is a great product! It has helped me a lot in my business. I
                                    highly recommend it to anyone looking for a similar solution.</p>
                                <span class="fs-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i
                                        class="bi bi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow bg-light">
                        <div class="card-body d-flex align-items-center">

                            <div>
                                <h5 class="card-title">Client 2 Name</h5>
                                <p class="card-text">I'm very happy with the service I received. The team was responsive and
                                    helpful, and they delivered the project on time and on budget.</p>
                                <span class="fs-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i
                                        class="bi bi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow bg-light">
                        <div class="card-body d-flex align-items-center">

                            <div>
                                <h5 class="card-title">Client 2 Name</h5>
                                <p class="card-text">I'm very happy with the service I received. The team was responsive and
                                    helpful, and they delivered the project on time and on budget.</p>
                                <span class="fs-3"><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i><i
                                        class="bi bi-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

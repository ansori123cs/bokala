@extends('layout/main')
@section('main')
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
@endsection

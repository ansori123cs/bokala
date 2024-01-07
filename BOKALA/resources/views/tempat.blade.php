@extends('layout/main')
@section('main')
    <section id="home" class="home"
        style="background-image: url('https://source.unsplash.com/1600x900/?nature');max-width: 1600px;height: 200px;">
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
    {{-- filter section --}}
    <section class="menu-kategori mt-3 mb-3">
        <div class="container">
            <form class="row row-cols-lg-auto g-3 align-items-center d-flex flex-row-reverse"method='post' action=''>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Terapkan Filter</button>
                </div>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Urutkan</label>
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected>Urutkan</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label class="visually-hidden" for="date">Tanggal</label>
                        <input class="form-control" id="date" name="date" placeholder="Tanggal" type="text" />
                    </div>
                </div>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Area</label>
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected value="0">Area</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="visually-hidden" for="inlineFormSelectPref">Harga</label>
                    <select class="form-select" id="inlineFormSelectPref">
                        <option selected value="0">Harga</option>
                        <option value="1">
                            Harga < </option>
                        <option value="2">Harga</option>
                        <option value="3">Harga > </option>
                    </select>
                </div>
            </form>
        </div>
    </section>
    {{-- end of filter section --}}
    {{-- fiedl preview --}}
    <section class="field-preview mb-3">
        <div class="container text-center">
            <div class="row">
                @foreach ($tempat as $tempat)
                    <div class="col">
                        <a href="/detail/{{ $tempat['id'] }}" class="text-decoration-none text-dark">
                            <div class="card justify-content-center text m-3" style="width: 20rem;">
                                <img src="https://source.unsplash.com/400x600/?sport" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text fs-5">{{ $tempat['namaTempat'] }}</p>
                                    <a
                                        href="/category/{{ $tempat->category->namaKategori }}"class="text-decoration-none text-dark">
                                        <p class="card-text text-decoration-none">{{ $tempat->category->namaKategori }}</p>
                                    </a>
                                    <p class="card-text"><span class="text-success">Harga mulai</span>{{ $tempat['harga'] }}
                                        /Jam</p>
                                    <a class="btn btn-primary me-2 mt-1 d-flex text-center justify-content-center "
                                        href="/detail/{{ $tempat['id'] }}" role="button">Pesan
                                        Sekarang</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- end of fiedl preview --}}
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

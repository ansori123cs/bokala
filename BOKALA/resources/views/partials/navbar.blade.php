<header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://placehold.co/600x400" alt="Bootstrap" width="50" height="50"> BOKALA
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav m-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'categories' ? 'active' : '' }}"
                            href="/categories">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'eboking' ? 'active' : '' }}" href="/eboking">E-Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $active === 'testimoni' ? 'active' : '' }}"
                            href="/testimoni">Testimoni</a>
                    </li>
                </ul>
                <form class="d-flex text-light" role="search">
                    <a class="nav-link {{ $active === 'login' ? 'active' : '' }} ms-3" href="/login"><i
                            class="bi bi-person-circle fs-3"></i></a>
                    <a class="nav-link {{ $active === 'login' ? 'active' : '' }} ms-3" href="/chart"><i
                            class="bi bi-cart fs-3"></i></a>
                </form>
            </div>
        </div>
    </nav>
</header>

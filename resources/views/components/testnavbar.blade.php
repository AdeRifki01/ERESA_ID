<nav class="navbar navbar-expand-lg custom-navbar fixed-top">
    <div class="container">

        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('img/eresa/Logo_putih.png') }}" 
                alt="eresa.id" 
                class="logo-img">

            <span class="brand-text ms-2">Eresa.id</span>
        </a>

        <!-- Button Mobile -->
        <button class="navbar-toggler border-0 shadow-none"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarEresa">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarEresa">
            <ul class="navbar-nav align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">Eresa Creative Studio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('rebootcom') ? 'active' : '' }}" href="{{ route('rebootcom') }}">Reboot Com</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('portofolio') ? 'active' : '' }}" href="{{ route('portofolio') }}">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('price') ? 'active' : '' }}" href="{{ route('price') }}">Price</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<link rel="stylesheet" href="{{ asset('css/testnavbar.css') }}">
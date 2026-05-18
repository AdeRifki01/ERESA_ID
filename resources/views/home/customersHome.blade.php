<style>
    /* ===== CUSTOMERS SECTION ===== */
    .customers-section {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
    }

    .customers-title {
        font-size: 2rem;
        font-weight: 800;
        color: #1a1a2e;
    }

    .customers-tagline {
        color: #666;
        font-size: 1.05rem;
        font-style: italic;
    }

    .customers-desc {
        color: #777;
        font-size: 0.95rem;
        line-height: 1.8;
        max-width: 800px;
        margin: 0 auto;
    }

    /* Logo Client */
    .logo-wrapper {
        overflow: hidden;
        margin-bottom: 30px;
        position: relative;
        -webkit-mask-image: linear-gradient(
            to right,
            transparent 0%,
            black 10%,
            black 90%,
            transparent 100%
        );
        mask-image: linear-gradient(
            to right,
            transparent 0%,
            black 10%,
            black 90%,
            transparent 100%
        );
    }

    .logo-track {
        display: flex;
        gap: 60px;
        animation: scrollLogo 18s linear infinite;
        align-items: center;
    }

    .logo-track img {
        height: 80px;
        transition: all 0.4s ease;
    }

    .logo-track img:hover {
        transform: scale(1.15);
    }

    @keyframes scrollLogo {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    /* ===== RESPONSIVE ===== */
    /* Tablet (991px) */
    @media (max-width: 991px) {
        .customers-title {
            font-size: 2rem;
        }
    }

    /* Tablet (768px) */
    @media (max-width: 768px) {
        .logo-wrapper {
            margin-top: 20px;
        }

        .logo-track img {
            height: 55px;
        }

        .logo-track {
            gap: 35px;
        }

        .customers-title {
            font-size: 1.7rem;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .logo-track img {
            height: 45px;
        }

        .logo-track {
            gap: 30px;
        }

        .customers-title {
            font-size: 1.4rem;
        }

        .customers-tagline {
            font-size: 0.9rem;
        }

        .customers-desc {
            font-size: 0.82rem;
        }
    }
</style>

<!-- ERESA CUSTOMERS -->
<section class="customers-section py-5">
    <div class="container text-center">
        <h1 class="customers-title reveal">Eresa Customers</h1>
        <h6 class="customers-tagline reveal reveal-delay-1">"Tumbuh Bersama Mereka Yang Percaya."</h6>

        <p class="customers-desc pt-3 reveal reveal-delay-2">
            Keberhasilan kami diukur dari kesuksesan klien kami. Kami bangga telah menjadi mitra strategis bagi berbagai bisnis,
            mulai dari UMKM hingga korporasi, dalam menaklukkan tantangan di dunia digital.
        </p>

<!-- LOGO CLIENT -->
        <div class="logo-wrapper mt-5 reveal-scale">
            <div class="logo-track">

                <img src="{{ asset('img/brand/Almaz.png') }}" alt="Almaz">
                <img src="{{ asset('img/brand/Totoro.png') }}" alt="Totoro">
                <img src="{{ asset('img/brand/Jamuin.png') }}" alt="Jamuin">
                <img src="{{ asset('img/brand/apd.png') }}" alt="APD">
                <img src="{{ asset('img/brand/Sarae.png') }}" alt="Sarae">
                <img src="{{ asset('img/brand/astro.png') }}" alt="Astro">
                <img src="{{ asset('img/brand/mesti_minum.png') }}" alt="Mesti Minum">
                <img src="{{ asset('img/brand/RMJ.png') }}" alt="RMJ">
                <img src="{{ asset('img/brand/mugen.png') }}" alt="Mugen">

                <!-- DUPLIKAT (biar smooth looping) -->
                <img src="{{ asset('img/brand/Almaz.png') }}" alt="Almaz">
                <img src="{{ asset('img/brand/Totoro.png') }}" alt="Totoro">
                <img src="{{ asset('img/brand/Jamuin.png') }}" alt="Jamuin">
                <img src="{{ asset('img/brand/apd.png') }}" alt="APD">
                <img src="{{ asset('img/brand/Sarae.png') }}" alt="Sarae">
                <img src="{{ asset('img/brand/astro.png') }}" alt="Astro">
                <img src="{{ asset('img/brand/mesti_minum.png') }}" alt="Mesti Minum">
                <img src="{{ asset('img/brand/RMJ.png') }}" alt="RMJ">
                <img src="{{ asset('img/brand/mugen.png') }}" alt="Mugen">
            </div>
        </div>
    </div>
</section>

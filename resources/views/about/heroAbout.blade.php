<!-- HERO ABOUT -->
<style>
    .hero-section {
        min-height: 100vh;
        background:
            linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("{{ asset('img/eresa/ECS_landscape.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        overflow: hidden;
    }
    .hero-content {
        padding-top: 300px;
        padding-bottom: 40px;
    }
    .hero-title {
        font-weight: 600;
        font-size: 2.5rem;
    }
    .hero-desc {
        max-width: 750px;
        margin: auto;
        line-height: 1.9;
        color: rgba(255, 255, 255, 0.9);
    }
    @media (max-width: 768px) {
        .hero-content {
            padding-top: 500px;
        }
        .hero-title {
            font-size: 1rem;
        }
        .hero-desc {
            font-size: 0.95rem;
        }
    }
    @media (max-width: 576px) {
        .hero-content {
            padding-top: 380px;
        }
        .hero-title {
            font-size: 1.2rem;
        }
    }
</style>
<section class="hero-section d-flex align-items-center text-white text-center">
    <div class="container hero-content" data-aos="fade-up" data-aos-duration="1000">
        <h1 class="hero-title">Ubah Ide Menjadi Visual yang Menjual</h1>
        <p class="mt-3 hero-desc">
            Selamat datang di Eresa Creative Studio.<br>Ayo buat brand Anda tampil beda, bercerita lebih kuat,
            dan terhubung lebih dalam dengan audiens melalui desain visual yang memukau.
        </p>
        <div class="d-flex justify-content-center gap-2 mt-4 flex-wrap">
            <a href="https://wa.me/6285117618858" target="_blank" class="fw-bold btn btn-outline-light rounded px-3 py-2 anim-floating">
                AYO KONSULTASI
            </a>
            <a href="https://drive.google.com/file/d/1qQovIwJ95k7x0M0FFja5NdJPa0yA5NM7/view?usp=sharing" target="_blank" class="fw-bold btn btn-outline-light rounded px-3 py-2 anim-floating">
                COMPANY PROFILE
            </a>
        </div>
    </div>
</section>

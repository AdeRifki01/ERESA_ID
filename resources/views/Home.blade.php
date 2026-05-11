<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eresa Creative Studio — Jasa Social Media Management, Branding, Website & SEO, Digital Marketing terpercaya di Indonesia.">
	<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<!-- JS Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">

    <!-- Judul Halaman -->
    <title>Home - Eresa.id</title>
</head>
<body>
<!-- Navbar -->
    <x-navbar /> 
<!-- HERO -->
    <section class="hero-section"
        style="--bg-desktop: url('{{ asset('img/eresa/ID_landscape.png') }}'); --bg-mobile: url('{{ asset('img/eresa/ID_potrait.png') }}');">

        <div class="container hero-content">
            <h4 class="slogan anim-fade-up">We Make Your Company Take Off</h4>
            <p class="description mt-3 anim-fade-up delay-1">
                Transformasi brand melalui strategi Social Media yang tajam dan Website performa tinggi yang scalable
            </p>

            <div class="mt-2 anim-fade-up delay-2">
                <a href="{{ route('price') }}" class="btn-hero d-inline-block text-decoration-none">
                    ✈ AYO AMBIL PAKET
                </a>
            </div>
        </div>
    </section>

<!-- PENAWARAN -->
    <section class="penawaran-section py-5 text-center">
        <div class="container">
            <h2 class="penawaran fw-bold reveal">"Bagaimana Kami Bisa Membantu Anda?"</h2>
            <p class="penawaran-desc mt-3 reveal reveal-delay-1">Lupakan kerumitan teknis dan algoritma. Fokuslah pada visi Anda,
            biarkan tim ahli kami yang mengurus eksekusi digitalnya.</p>
            <div class="mt-4 reveal reveal-delay-2">
                <a href="https://wa.me/6285117618858?text=Halo%20Eresa%20Creative%20Studio,%20saya%20tertarik%20dengan%20layanan%20Anda.%20Boleh%20diskusi%20lebih%20lanjut?" 
                target="_blank" class="btn-konsultasi">
                    🚀 Konsultasi Sekarang
                </a>
            </div>

            <div class="mt-5 pt-4 reveal-scale">
                <h3 class="fw-bold mb-3" style="color: #1a1a2e;">ERESA CREATIF STUDIO COMPANY PROFILE</h3>
                <div class="video-wrapper">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.youtube.com/embed/0Lp6Q5nnNoE?si=SnUn729mIYdkpOYt"
                            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- LAYANAN -->
    <section class="layanan-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h3 class="section-title reveal">Layanan Kami</h3>
                <p class="section-subtitle reveal reveal-delay-1">Solusi digital lengkap untuk kesuksesan bisnis Anda</p>
            </div>
            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card d-flex flex-column align-items-center text-center reveal reveal-delay-1">
                        <img src="{{ asset('img/brand/Almaz.png') }}" class="service-icon" alt="Social Media Management">
                        <h6>Social Media Management</h6>
                        <p class="text-muted mb-0">
                            Eksis & Terpercaya — Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                        </p>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card d-flex flex-column align-items-center text-center reveal reveal-delay-2">
                        <img src="{{ asset('img/brand/Totoro.png') }}" class="service-icon" alt="Branding & Identity Visual">
                        <h6>Branding & Identity Visual</h6>
                        <p class="text-muted mb-0">
                            Wajah Bisnis Profesional — Ciptakan identitas visual yang ikonik dan konsisten agar brand Anda selalu diingat oleh konsumen.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card d-flex flex-column align-items-center text-center reveal reveal-delay-3">
                        <img src="{{ asset('img/brand/jamuin.png') }}" class="service-icon" alt="Website & SEO">
                        <h6>Website & SEO</h6>
                        <p class="text-muted mb-0">
                            Mudah Ditemukan di Google — Website cepat, responsif, dan teroptimalisasi SEO untuk menjaring lebih banyak trafik organik.
                        </p>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card d-flex flex-column align-items-center text-center reveal reveal-delay-4">
                        <img src="{{ asset('img/brand/apd.png') }}" class="service-icon" alt="Design & Digital Marketing">
                        <h6>Design & Digital Marketing</h6>
                        <p class="text-muted mb-0">
                            Iklan Tepat Sasaran — Paduan desain kreatif dan strategi digital untuk meningkatkan konversi dan omzet bisnis Anda.
                        </p>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card d-flex flex-column align-items-center text-center reveal reveal-delay-5">
                        <img src="{{ asset('img/brand/astro.png') }}" class="service-icon" alt="E-Commerce Management">
                        <h6>E-Commerce Management</h6>
                        <p class="text-muted mb-0">
                            Jualan Online Tanpa Ribet — Optimasi toko di marketplace dan kelola operasional harian agar penjualan Anda terus meningkat.
                        </p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card d-flex flex-column align-items-center text-center reveal reveal-delay-6">
                        <img src="{{ asset('img/brand/mesti_minum.png') }}" class="service-icon" alt="IT Services">
                        <h6>IT Services</h6>
                        <p class="text-muted mb-0">
                            Solusi Teknologi Handal — Dukungan teknis menyeluruh untuk memastikan seluruh sistem digital bisnis Anda berjalan tanpa gangguan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- PORTOFOLIO -->
    <section class="portfolio-section py-5 text-center">
        <div class="container">
            <h2 class="section-title reveal">Portofolio</h2>
            <p class="section-subtitle reveal reveal-delay-1">"Eresa.id telah menjadi mitra strategis bagi berbagai bisnis untuk menaklukkan tantangan digital.
                <br>Jelajahi bagaimana kami memberikan dampak nyata."
            </p>
                <div class="portfolio-slider mt-4">
                    <div class="portfolio-track" id="portfolioTrack">

                        <!-- BARIS 1 -->
                        <div class="portfolio-row left mt-4">
                            <div class="portfolio-track">
                                <div class="d-flex">

                                    <!-- SET ASLI -->
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_1.webp') }}" alt="Portfolio 1"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_2.webp') }}" alt="Portfolio 2"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_3.jpg') }}" alt="Portfolio 3"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_4.jpg') }}" alt="Portfolio 4"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_5.jpg') }}" alt="Portfolio 5"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_6.jpg') }}" alt="Portfolio 6"></div>

                                    <!-- DUPLIKAT (WAJIB BIAR SMOOTH) -->
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_1.webp') }}" alt="Portfolio 1"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_2.webp') }}" alt="Portfolio 2"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_3.jpg') }}" alt="Portfolio 3"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_4.jpg') }}" alt="Portfolio 4"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_5.jpg') }}" alt="Portfolio 5"></div>
                                    <div class="item"><img src="{{ asset('img/portofolio/Porto_6.jpg') }}" alt="Portfolio 6"></div>

                                </div>
                            </div>
                        </div>

                        <!-- BARIS 2 -->
                        <div class="portfolio-row right mt-3">
                            <div class="portfolio-track">
                                <div class="d-flex">

                                    <!-- SET ASLI -->
                                    <div class="item"><img src="{{ asset('img/produk/almaz1.png') }}" alt="Produk Almaz"></div>
                                    <div class="item"><img src="{{ asset('img/produk/jamuin1.png') }}" alt="Produk Jamuin"></div>
                                    <div class="item"><img src="{{ asset('img/produk/reboot1.png') }}" alt="Produk Reboot"></div>
                                    <div class="item"><img src="{{ asset('img/produk/almaz2.png') }}" alt="Produk Almaz 2"></div>
                                    <div class="item"><img src="{{ asset('img/produk/jamuin2.png') }}" alt="Produk Jamuin 2"></div>
                                    <div class="item"><img src="{{ asset('img/produk/reboot2.png') }}" alt="Produk Reboot 2"></div>

                                    <!-- DUPLIKAT -->
                                    <div class="item"><img src="{{ asset('img/produk/almaz1.png') }}" alt="Produk Almaz"></div>
                                    <div class="item"><img src="{{ asset('img/produk/jamuin1.png') }}" alt="Produk Jamuin"></div>
                                    <div class="item"><img src="{{ asset('img/produk/reboot1.png') }}" alt="Produk Reboot"></div>
                                    <div class="item"><img src="{{ asset('img/produk/almaz2.png') }}" alt="Produk Almaz 2"></div>
                                    <div class="item"><img src="{{ asset('img/produk/jamuin2.png') }}" alt="Produk Jamuin 2"></div>
                                    <div class="item"><img src="{{ asset('img/produk/reboot2.png') }}" alt="Produk Reboot 2"></div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <a href="{{ route('portofolio') }}" class="btn-portfolio">See All Portfolio</a>
                        </div>
                    </div>
                </div>
        </div>
    </section>

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

<!-- IDE BESAR -->
    <section class="cta-section py-5 pt-2">
        <div class="container text-center" style="max-width:900px;">
            <h2 class="cta-title reveal pt-1">
                Punya Ide Besar? Mari Kita Wujudkan Bersama
            </h2>
            <p class="cta-desc mt-3 reveal reveal-delay-1">
                Jangan simpan rencana hebat Anda sendirian. Diskusikan visi bisnis Anda dengan tim ahli kami 
                dan lihat bagaimana kami mengubahnya menjadi realitas digital yang berdampak luas.
            </p>
            <div class="mt-4 reveal reveal-delay-2">
                <a href="https://wa.me/6285117618858?text=Halo%20Eresa%20Creative%20Studio,%20saya%20tertarik%20dengan%20layanan%20Anda.%20Boleh%20diskusi%20lebih%20lanjut?" 
                target="_blank" class="btn-cta">
                    GET A QUOTE
                </a>
            </div>
        </div>
    </section>

<!-- Footer -->
	<x-footer />

    <script>


    // ===== SCROLL REVEAL (Intersection Observer) =====
    const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right, .reveal-scale');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    });

    revealElements.forEach(el => revealObserver.observe(el));

    // ===== PARALLAX HERO (subtle) =====
    window.addEventListener('scroll', function() {
        const hero = document.querySelector('.hero-section');
        if (hero && window.innerWidth > 768) {
            const scrolled = window.scrollY;
            hero.style.setProperty('--hero-parallax', (scrolled * 0.4) + 'px');
        }
    });
</script>
</body>
</html>
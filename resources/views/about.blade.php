<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<!-- JS Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/testnavbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testfooter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .anim-floating {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .anim-floating:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255,255,255,0.2);
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.3) !important;
        }
        .carousel-item img {
            transition: transform 0.5s ease;
        }
        .carousel-item:hover img {
            transform: scale(1.02);
        }
    </style>

    <!-- Judul Halaman -->
	<title>Eresa Creative Studio - Eresa.id</title>
	
</head>
<body>
<!-- NAVBAR -->
<x-navbar />

<!-- HERO -->
    <section class="d-flex align-items-center text-white text-center"
        style="
        height:100vh;
        background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
        url('{{ asset('img/eresa/ECS_landscape.png') }}');
        background-size: cover;
        background-position: center;
        ">

        <div class="container hero-content" data-aos="fade-up" data-aos-duration="1000">
            <h4 class="hero-title">Ubah Ide Menjadi Visual yang Menjual</h4>
            <p class="mt-3 hero-desc">
                Selamat datang di Eresa Creative Studio. Kami membantu brand Anda tampil beda, bercerita lebih kuat,<br class="d-none d-md-block">
                dan terhubung lebih dalam dengan audiens melalui desain visual yang memukau.
            </p>

            <div class="mt-4">
                <a href="wa.me/6285117618858" class="fw-bold btn btn-outline-light rounded-pill px-4 py-2 anim-floating d-inline-block m-2">
                    KONSULTASI GRATIS
                </a>
                <a href="https://drive.google.com/file/d/1qQovIwJ95k7x0M0FFja5NdJPa0yA5NM7/view?usp=sharing" class="fw-bold btn btn-outline-light rounded-pill px-4 py-2 anim-floating d-inline-block m-2">
                    COMPANY PROFILE
                </a>
            </div>
        </div>
    </section>

<!-- TENTANG ERESA -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <!-- KIRI -->
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                    <h2 class="fw-bold mb-3">About Us</h2>
                    <p class="text-muted">
                        Kami adalah <b>Eresa Creative Studio</b>, sebuah perusahaan kreatif yang 
                        digerakkan oleh semangat inovasi dan hasrat untuk menciptakan solusi digital yang berdampak.
                    </p>
                    <p class="text-muted">
                        Tim kami terdiri dari desainer, strategist, dan kreator profesional yang 
                        berdedikasi untuk membantu brand tumbuh dan bersinar di era digital.
                    </p>
                </div>

                <!-- KANAN (SLIDER CLEAN) -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div id="carouselAbout" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner rounded-4 shadow">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/portofolio/MockUp_1.png') }}"
                                    class="img-fluid w-100 shadow" style="max-height:400px; object-fit:contain; transition:0.5s;">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/portofolio/MockUp_2.png') }}"
                                    class="img-fluid w-100 shadow" style="max-height:400px; object-fit:contain; transition:0.5s;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- OUR SERVICE -->
    <section class="py-5 text-center bg-dark">
        <div class="container">
            <h2 class="fw-bold mb-4 text-light">Our Service</h2>
            <div class="row text-center">

                <!-- CARD 1 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD 2 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD 3 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD 4 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD 5 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- CARD 6 -->
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Eksis & Terpercaya Kelola konten dan interaksi audiens secara profesional untuk bangun loyalitas pelanggan setiap hari.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- LAYANAN KREATIF -->
    <section class="bg-dark text-center">
        <div class="container">
            <div class="row text-center">
                <h4 class="mb-4 text-light">Layanan Kreatif Yang Kami Hadirkan Untuk Anda</h4>

                <!-- Layanan 01 -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Branding & Visual Identity</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Bukan cuma sekadar logo. Kami membangun pondasi visual yang kuat, mulai dari pemilihan warna, tipografi, hingga brand guidelines yang konsisten.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Layanan 02 -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Social Media Design & Management</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Buat feed Instagram dan konten digital Anda tidak hanya estetik, tapi juga interaktif dan mampu mendatangkan konversi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Layanan 03 -->
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card shadow border-0 h-100 p-3"
                        style="transition:0.3s; border-radius:15px;">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h6 class="fw-bold mb-1">Commercial Photography & Videography</h6>
                                <br>
                                <p class="text-muted mb-0" style="font-size:12px; line-height:1.5;">
                                    Sampaikan pesan produk Anda lewat tangkapan visual berkualitas tinggi yang menggugah selera dan minat beli.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- KOLABORASI -->
    <section class="py-5">
        <div class="container">

            <!-- HEADER -->
            <div class="d-flex justify-content-between align-items-center flex-wrap mb-5">
                <h4 class="mb-0">Layanan Kreatif Yang Kami Hadirkan Untuk Anda?</h4>
                <a href="{{ route('portofolio') }}" class="btn btn-dark fw-bold mt-2 mt-md-0">
                    Lihat Portofolio Kami
                </a>
            </div>

            <!-- ISI -->
            <div class="row text-center">
                <!-- ITEM 1 -->
                <div class="col-md-4 mb-4">
                    <div class="bg-dark p-4 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25">
                        <img src="/eresa/asset/img/brand/Almaz.png" class="brand-img mb-3" alt="Customized Strategy">
                        <h5 class="text-light fw-bold">Customized Strategy</h5>
                        <p class="text-light-50 mt-2 small">
                            Kami tidak menggunakan template. Setiap desain dibuat khusus sesuai karakter brand Anda.
                        </p>
                    </div>
                </div>
                <!-- ITEM 2 -->
                <div class="col-md-4 mb-4">
                    <div class="bg-dark p-4 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25">
                        <img src="/eresa/asset/img/brand/Almaz.png" class="brand-img mb-3" alt="Punctual Delivery">
                        <h5 class="text-light fw-bold">Punctual Delivery</h5>
                        <p class="text-light-50 mt-2 small">
                            Kami menghargai waktu Anda. Setiap project diselesaikan sesuai dengan deadline yang disepakati.
                        </p>
                    </div>
                </div>
                <!-- ITEM 3 -->
                <div class="col-md-4 mb-4">
                    <div class="bg-dark p-4 rounded-4 h-100 shadow-sm border border-secondary border-opacity-25">
                        <img src="/eresa/asset/img/brand/Almaz.png" class="brand-img mb-3" alt="Expert Team">
                        <h5 class="text-light fw-bold">Expert Team</h5>
                        <p class="text-light-50 mt-2 small">
                            Ditangani langsung oleh para kreator berpengalaman di bidangnya masing-masing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="py-5 bg-light" data-aos="fade-up">
        <div class="container text-center" style="max-width:900px;">
            <h2 class="fw-bold text-primary">
                Punya Ide Besar? Mari Kita Wujudkan Bersama
            </h2>

            <p class="text-muted mt-3">
                Jangan simpan rencana hebat Anda sendirian. Diskusikan visi bisnis Anda dengan tim ahli kami 
                dan lihat bagaimana kami mengubahnya menjadi realitas digital yang berdampak luas.
            </p>
            
            <a href="#" class="btn btn-primary mt-3 rounded-pill px-4 anim-floating">
                GET A QUOTE
            </a>
        </div>
    </section>

<!-- FOOTER -->
    <x-footer />

<!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS agar elemen muncul saat di-scroll
        AOS.init({
            duration: 800,
            once: true,
        });

        const carousel = new bootstrap.Carousel('#carouselAbout', {
            interval: 3000,
            ride: 'carousel',
            pause: false,
            wrap: true
        });
    </script>
</body>
</html>
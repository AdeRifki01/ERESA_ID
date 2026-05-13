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
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Judul Halaman -->
	<title>Eresa Creative Studio - Eresa.id</title>
	
</head>
<body>
<!-- NAVBAR -->
    <x-navbar />

<!-- HERO -->
@include('about.heroAbout')

<!-- TENTANG ERESA -->
@include('about.eresaAbout')

<!-- OUR SERVICE -->
@include('about.serviceAbout')

<!-- LAYANAN KREATIF -->
@include('about.layananAbout')

<!-- KOLABORASI -->
@include('about.kolaborasiAbout')

<!-- CTA ABOUT -->
@include('about.ctaAbout')

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
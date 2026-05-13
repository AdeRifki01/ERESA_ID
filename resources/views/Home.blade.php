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
    @include('home.heroHome')

<!-- PENAWARAN -->
    @include('home.penawaranHome')

<!-- LAYANAN -->
    @include('home.layananHome')
    
<!-- PORTOFOLIO -->
    @include('home.portofolioHome')

<!-- ERESA CUSTOMERS -->
    @include('home.customersHome')

<!-- IDE BESAR / CTA -->
    @include('home.ctaHome')

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

    // ===== HERO PARALLAX SMOOTH =====
    const hero = document.querySelector('.hero-section');
    function updateHeroParallax() {
        if (!hero) return;
        // Disable parallax di mobile
        if (window.innerWidth <= 768) {
            hero.style.setProperty('--hero-offset', '0px');
            return;
        }
        const scrollY = window.scrollY;
        // Gerakan lebih smooth & ringan
        const offset = scrollY * 0.15;
        hero.style.setProperty('--hero-offset', `${offset}px`);
    }
    window.addEventListener('scroll', () => {
        requestAnimationFrame(updateHeroParallax);
    });
    window.addEventListener('load', updateHeroParallax);
    window.addEventListener('resize', updateHeroParallax);
</script>
</body>
</html>
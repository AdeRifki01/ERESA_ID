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
    <link rel="shortcut icon" href="{{ asset('img/eresa/Logo_putih.png') }}" type="image/x-icon" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/testnavbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testfooter.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price.css') }}">

    <!-- Judul Halaman -->
    <title>Price - Eresa.id</title>
</head>
<body>
<!-- NAVBAR -->
    <x-testnavbar />

<!-- HEADER SECTION -->
<section class="pricing-section">
    <div class="pricing-header text-center text-white">
        <div class="container" data-aos="fade-up">
            <h1 class="display-5 fw-bold mb-3">Simple, Transparent Pricing</h1>
            <p class="opacity-75 mx-auto" style="max-width: 600px;">Pilih rencana yang sesuai dengan kebutuhan bisnis dan anggaran Anda. Tanpa biaya tersembunyi.</p>
        </div>
    </div>

    <div class="container">
        <!-- 1. PAKET UTAMA (Monthly) -->
        <div class="row justify-content-center pricing-wrapper g-4">
            <!-- REGULER -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="price-card d-flex flex-column">
                    <div class="plan-icon"><i class="bi bi-star-fill"></i></div>
                    <h5>Reguler Plan</h5>
                    <div class="amount">Rp 4.5M <span>/ bulan</span></div>
                    <p class="description">Cocok untuk bisnis kecil atau startup yang membutuhkan pondasi branding digital yang kuat.</p>
                    <ul class="price-list flex-grow-1">
                        <li><i class="bi bi-check-lg"></i> 17 Feed & 10 Story</li>
                        <li><i class="bi bi-check-lg"></i> Riset Rencana Konten</li>
                        <li><i class="bi bi-check-lg"></i> Branding Identity</li>
                        <li><i class="bi bi-check-lg"></i> Laporan Bulanan</li>
                    </ul>
                    <a href="#" class="btn btn-get-started w-100">Get Started</a>
                </div>
            </div>

            <!-- PREMIUM -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="price-card highlight d-flex flex-column shadow-lg">
                    <div class="plan-icon"><i class="bi bi-rocket-takeoff-fill"></i></div>
                    <h5>Premium Plan</h5>
                    <div class="amount">Rp 12.9M <span>/ bulan</span></div>
                    <p class="description">Dirancang untuk bisnis yang berkembang pesat. Mencakup strategi iklan dan produksi konten video masif.</p>
                    <ul class="price-list flex-grow-1">
                        <li><i class="bi bi-check-lg"></i> 45 Feed, 30 Story, 15 Reels</li>
                        <li><i class="bi bi-check-lg"></i> Iklan (Ads) Rp 2 Juta</li>
                        <li><i class="bi bi-check-lg"></i> Free Shoot 6 Jam + Talent</li>
                        <li><i class="bi bi-check-lg"></i> Optimasi Profil & SEO</li>
                    </ul>
                    <a href="#" class="btn btn-get-started w-100">Get Started</a>
                </div>
            </div>

            <!-- MEDIUM -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="price-card d-flex flex-column">
                    <div class="plan-icon"><i class="bi bi-lightning-fill"></i></div>
                    <h5>Medium Plan</h5>
                    <div class="amount">Rp 7.5M <span>/ bulan</span></div>
                    <p class="description">Ideal untuk perusahaan menengah yang ingin mengoptimalkan interaksi dan pertumbuhan audiens.</p>
                    <ul class="price-list flex-grow-1">
                        <li><i class="bi bi-check-lg"></i> 22 Feed & 8 Reels</li>
                        <li><i class="bi bi-check-lg"></i> Kelola Ads Rp 1 Juta</li>
                        <li><i class="bi bi-check-lg"></i> Meeting Evaluasi Rutin</li>
                        <li><i class="bi bi-check-lg"></i> 2x Revisi Mayor</li>
                    </ul>
                    <a href="#" class="btn btn-get-started w-100">Get Started</a>
                </div>
            </div>
        </div>

        <!-- 2. PAKET RETAIL (Weekly/Project Based) -->
        <div class="text-center mt-5 pt-5 mb-4" data-aos="fade-up">
            <h2 class="fw-bold">Retail Solutions</h2>
            <p class="text-muted">Layanan satuan untuk kebutuhan mendesak Anda</p>
        </div>

        <div class="retail-grid">
            <!-- Loop 6 Cards -->
            <div class="price-card text-center py-4" data-aos="zoom-in">
                <h6 class="fw-bold mb-2">Cetak Banner</h6>
                <div class="h4 fw-bold text-primary mb-3">Rp 50rb</div>
                <p class="small text-muted mb-3">Pengerjaan kilat 24 jam untuk promosi offline Anda.</p>
                <a href="#" class="btn btn-sm btn-get-started px-4">Order Now</a>
            </div>
            <div class="price-card text-center py-4" data-aos="zoom-in">
                <h6 class="fw-bold mb-2">Cetak Banner</h6>
                <div class="h4 fw-bold text-primary mb-3">Rp 50rb</div>
                <p class="small text-muted mb-3">Pengerjaan kilat 24 jam untuk promosi offline Anda.</p>
                <a href="#" class="btn btn-sm btn-get-started px-4">Order Now</a>
            </div>
            <div class="price-card text-center py-4" data-aos="zoom-in">
                <h6 class="fw-bold mb-2">Cetak Banner</h6>
                <div class="h4 fw-bold text-primary mb-3">Rp 50rb</div>
                <p class="small text-muted mb-3">Pengerjaan kilat 24 jam untuk promosi offline Anda.</p>
                <a href="#" class="btn btn-sm btn-get-started px-4">Order Now</a>
            </div>
            <div class="price-card text-center py-4" data-aos="zoom-in">
                <h6 class="fw-bold mb-2">Cetak Banner</h6>
                <div class="h4 fw-bold text-primary mb-3">Rp 50rb</div>
                <p class="small text-muted mb-3">Pengerjaan kilat 24 jam untuk promosi offline Anda.</p>
                <a href="#" class="btn btn-sm btn-get-started px-4">Order Now</a>
            </div>
            <div class="price-card text-center py-4" data-aos="zoom-in">
                <h6 class="fw-bold mb-2">Cetak Banner</h6>
                <div class="h4 fw-bold text-primary mb-3">Rp 50rb</div>
                <p class="small text-muted mb-3">Pengerjaan kilat 24 jam untuk promosi offline Anda.</p>
                <a href="#" class="btn btn-sm btn-get-started px-4">Order Now</a>
            </div>
            <!-- Card Paket Retail -->
            
        </div>
    </div>
</section>

<!-- FOOTER -->
	<x-testfooter />

<!-- SCRIPT -->
	<script>
	function setPlan(button) {
		// ambil semua button
		let buttons = document.querySelectorAll('.toggle-wrapper button');

		// hapus semua active
		buttons.forEach(btn => btn.classList.remove('active'));

		// kasih active ke yang diklik
		button.classList.add('active');
	}
	</script>
</body>
</html>
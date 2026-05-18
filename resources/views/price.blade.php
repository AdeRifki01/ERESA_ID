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
	<!-- Google Fonts: Poppins -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/price.css') }}">

    <!-- Judul Halaman -->
    <title>Price - Eresa.id</title>
</head>
<body>
<!-- NAVBAR -->
    <x-navbar />

<!-- HEADER & PAKET UTAMA -->
<section class="pricing-hero">
    <div class="pricing-header text-center">
        <div class="container" data-aos="fade-up">
            <h1 class="mb-3" style="font-size: 40px;">Wujudkan Ide Anda dengan <span style="color: #ffffff;">Paket yang Fleksibel</span></h1>
            <p class="mx-auto" style="max-width: 800px;">
                Mulai dari konten harian hingga strategi branding menyeluruh,
                kami menyediakan berbagai pilihan paket tanpa biaya tambahan yang tidak perlu.
            </p>
            
            <div class="nav-pricing">
                <a href="#bundling" class="btn-nav-price" style="color: #3d86f6;">Bundling Package</a>
                <a href="#promo" class="btn-nav-price" style="color: #3d86f6;">Promo Package</a>
                <a href="#foto" class="btn-nav-price" style="color: #3d86f6;">Foto Produk</a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- 1. PAKET UTAMA (Monthly) -->
        <h1 style="text-align: center; color: #0f172a; font-weight: 700;">Paket Layanan</h1>
        <h5 style="text-align: center; color: #0f172a; font-weight: 500;">Social Media Management</h5>
        <div class="row justify-content-center pricing-wrapper g-4">
            <!-- REGULER -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="main-price-card light-card d-flex flex-column h-100">
                    <div class="card-header-new">
                        <span class="plan-label">REGULER</span>
                        <h4 class="plan-name">Rp. 4.500.000</h4>
                    </div>
                    <p class="plan-subtext-new">Basic branding & content strategy</p>
                    <div class="usage-info-new"><i class="bi bi-laptop"></i> Pondasi branding kuat</div>
                    
                    <div class="features-title">Features:</div>
                    <ul class="price-list-new flex-grow-1">
                        <li><i class="bi bi-check-circle-fill"></i> Riset & Rencana konten.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Branding.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Produksi Konten: 17 Feed, 10 Story, & 4 Video (inc. VO & Talent).</li>
                        <li><i class="bi bi-check-circle-fill"></i> Operasional: Admin, posting, & koordinasi grup.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Evaluasi: Laporan bulanan & 2x revisi minor.</li>
                    </ul>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20REGULAR%20(Economic).%20Mohon%20info%20lebih%20lanjut." class="btn-main-price btn-dark-new w-100" target="_blank">Buy Regular License</a>
                </div>
            </div>

            <!-- PREMIUM -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="main-price-card blue-card d-flex flex-column h-100 shadow-lg">
                    <div class="card-header-new">
                        <span class="plan-label">PREMIUM</span>
                        <h4 class="plan-name">Rp. 13.000.000</h4>
                    </div>
                    <p class="plan-subtext-new">Massive content & ads strategy</p>
                    <div class="usage-info-new"><i class="bi bi-rocket-takeoff"></i> Strategi iklan & video masif</div>
                    
                    <div class="features-title">Features:</div>
                    <ul class="price-list-new flex-grow-1">
                        <li><i class="bi bi-check-circle-fill"></i> Riset & Strategi: Analisis audiens, tren, kompetitor, dan optimasi profil.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Konten Visual: 45 Feed, 30 Story (19 gambar, 11 video), dan 15 Reels/TikTok.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Produksi Kreatif: Talent, Voice Over, naskah SEO, dan free shoot 6 jam.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Pertumbuhan Akun: Manajemen komunitas, akuisisi pengikut, dan iklan (Ads) Rp2 Juta.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Pelaporan & Evaluasi: Laporan detail, meeting evaluasi, dan grup koordinasi. Laporan bulanan dengan 3x revisi mayor.</li>
                    </ul>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20PREMIUM%20(The%20Best).%20Mohon%20info%20lebih%20lanjut." class="btn-main-price btn-light-new w-100" target="_blank">Buy Premium License</a>
                </div>
            </div>

            <!-- MEDIUM -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="main-price-card light-card d-flex flex-column h-100">
                    <div class="card-header-new">
                        <span class="plan-label">MEDIUM</span>
                        <h4 class="plan-name">Rp. 7.500.000</h4>
                    </div>
                    <p class="plan-subtext-new">Optimized interaction & growth</p>
                    <div class="usage-info-new"><i class="bi bi-graph-up-arrow"></i> Optimasi interaksi audiens</div>
                    
                    <div class="features-title">Features:</div>
                    <ul class="price-list-new flex-grow-1">
                        <li><i class="bi bi-check-circle-fill"></i> Riset & Strategi: Analisis mendalam, monthly plan, dan optimasi profil.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Produksi Konten: 22 Feed, 16 Story (10 statis, 6 video), dan 8 Reels / TikTok.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Manajemen: Posting, admin, dan kelola Ads (1 jt).</li>
                        <li><i class="bi bi-check-circle-fill"></i> Laporan: Laporan detail, meeting evaluasi, dan grup koordinasi.</li>
                        <li><i class="bi bi-check-circle-fill"></i> Revisi: Maksimal 2x revisi mayor.</li>
                    </ul>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20MEDIUM%20(Business).%20Mohon%20info%20lebih%20lanjut." class="btn-main-price btn-dark-new w-100" target="_blank">Buy Medium License</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BUNDLING PACKAGE SECTION -->
<section class="retail-section pt-1" id="bundling">
    <div class="container">
        <div class="retail-group" data-aos="fade-up">
            <div class="category-header">
                <h3>Bundling Package</h3>
                <div class="underline"></div>
                <p>Paket lengkap dengan kombinasi feed dan video untuk performa maksimal.</p>
            </div>
            <div class="retail-grid">
                <!-- Bundling 1 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-badge">FEED CAROUSEL</div>
                    <div class="retail-features">
                        26 Feeds Carousel Design Premium, Idea & Concept, Caption & Hastag, Manage upload daily, Free Mirroring 1 Story.
                    </div>
                    <div class="retail-highlight">Max 4 Slide</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">1,500</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20Bundling%20Package%3A%20Desain%20Feed%20Carousel.%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>

                <!-- Bundling 2 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-badge">FEED & REELS</div>
                    <div class="retail-features">
                        20 Feeds Design Premium, 3 Video Reels/VT, Idea & Concept Editing, Caption & Hastag, Music & Text Motion, Manage upload daily.
                    </div>
                    <div class="retail-highlight">Combo</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">2,000</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20Bundling%20Package%3A%20Combo%20Feed%20%26%20Reels.%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>

                <!-- Bundling 3 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-badge">VIDEO REELS</div>
                    <div class="retail-features">
                        11 Video Reels / VT, Idea & Concept Editing, 2 Talent, Free Visit, Music & Text Motion, Caption & Hastag, Manage upload daily.
                    </div>
                    <div class="retail-highlight">Max 1 Menit</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">2,500</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20Bundling%20Package%3A%20Video%20Reels%20(Max%201%20Menit).%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROMO PACKAGE SECTION -->
<section class="retail-section py-5 bg-light" id="promo">
    <div class="container">
        <div class="retail-group" data-aos="fade-up">
            <div class="category-header">
                <h3>Promo Package</h3>
                <div class="underline"></div>
                <p>Penawaran khusus untuk pertumbuhan bisnis Anda dengan harga lebih hemat.</p>
            </div>
            <div class="retail-grid">
                <!-- Promo 1 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-badge">DESAIN FEED NEW CLIENT</div>
                    <div class="retail-features">
                        24 Single Feed Design Premium, Idea & Concept.
                    </div>
                    <div class="retail-highlight">Desain Feed</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">1,000</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20Promo%20Package%3A%20Desain%20Feed%20New%20Client.%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>

                <!-- Promo 2 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="card-badge">FEED STANDARD</div>
                    <div class="retail-features">
                        9 Single Feed Design Premium, 9 Story, Idea & Concept, Caption & Hastag.
                    </div>
                    <div class="retail-highlight">Desain Feed</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">300</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20Promo%20Package%3A%20Desain%20Feed%20Standard.%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOTO PRODUK SECTION -->
<section class="retail-section py-5" id="foto">
    <div class="container">
        <div class="retail-group" data-aos="fade-up">
            <div class="category-header">
                <h3>Photoshot Produk</h3>
                <div class="underline"></div>
                <p>Abadikan produk Anda dengan kualitas studio profesional untuk hasil yang memikat.</p>
            </div>
            <div class="retail-grid-foto">
                <!-- Foto 1 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="600">
                    <div class="card-badge">BASIC</div>
                    <div class="retail-features">
                        JPG File. Cocok untuk katalog produk sederhana dan e-commerce.
                    </div>
                    <div class="retail-highlight">1 Tema & 10 Edited</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">350</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20Foto%20Produk%3A%20Photoshoot%20(Basic).%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>

                <!-- Foto 2 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="700">
                    <div class="card-badge">STANDARD</div>
                    <div class="retail-features">
                        JPG File. Pilihan tepat untuk variasi produk menengah.
                    </div>
                    <div class="retail-highlight">2 Tema & 15 Edited</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">490</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20Foto%20Produk%3A%2020(Standard).%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>

                <!-- Foto 3 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="800">
                    <div class="card-badge">PREMIUM</div>
                    <div class="retail-features">
                        JPG File. Dilengkapi dengan editing profesional mendalam.
                    </div>
                    <div class="retail-highlight">2 Tema & 20 Edited</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">650</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20Foto%20Produk%3A%2020(Premium).%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>

                <!-- Foto 4 -->
                <div class="price-card retail-card" data-aos="zoom-in" data-aos-delay="900">
                    <div class="card-badge">ULTIMATE</div>
                    <div class="retail-features">
                        JPG File. Paket terlengkap untuk konten promosi besar dan media cetak.
                    </div>
                    <div class="retail-highlight">2 Tema & 30 Edited</div>
                    <div class="retail-price">
                        <span class="rp">RP</span>
                        <span class="num">800</span>
                        <span class="cents">,000</span>
                    </div>
                    <a href="https://wa.me/6285117618858?text=Halo%20Admin%20Eresa%2C%20saya%20tertarik%20dengan%20paket%20Foto%20Produk%3A%20Photoshoot%20(Ultimate).%20Mohon%20info%20lebih%20lanjut." class="btn-price" target="_blank">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="py-5 bg-light">
    <div class="container text-center" style="max-width:900px;">
        <h2 class="fw-bold text-primary">
            Kamu tertarik? Ayo Segera Hubungi Kami
        </h2>
        <p class="text-muted mt-3">
            Jangan di lihat aja, Ayo pesan paketnya sekarang juga!
        </p>
        <a href="https://wa.me/6285117618858" class="btn btn-primary mt-3 rounded-pill px-4">
            GET A QUOTE
        </a>
    </div>
</section>

<!-- FOOTER -->
	<x-footer />

<!-- SCRIPT -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100,
    });

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
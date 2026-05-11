<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- AOS Library CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
	<!-- Bootstrap Icon -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<!-- JS Bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="shortcut icon" href="{{ asset('img/eresa/Logo_putih.png') }}" type="image/x-icon" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

    <!-- Judul Halaman -->
    <title>Contact - Eresa.id</title>
</head>
<body>
    <x-navbar />

<!-- HERO SECTION -->
<section class="hero-section text-center">
    <div class="container" data-aos="fade-zoom-in"> <!-- Efek zoom halus untuk teks hero -->
        <h1 class="display-4 fw-bold text-dark">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-muted"><i class="bi bi-house-door"></i> Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</section>

<!-- CONTACT CONTENT -->
<section class="container contact-container mb-5 pb-5">
    <div class="row g-4 justify-content-center">
        
        <!-- KIRI: Contact Information -->
        <div class="col-lg-4" data-aos="fade-right" data-aos-delay="200"> <!-- Muncul dari kanan -->
            <div class="info-card p-4 p-md-5 h-100">
                <h4 class="fw-bold mb-3">Contact Information</h4>
                <p class="text-muted small mb-4">Have questions or need help with your digital project? Our team is always ready to assist you.</p>

                <div class="d-flex align-items-start mb-4">
                    <div class="icon-box me-3"><i class="bi bi-phone"></i></div>
                    <div>
                        <a href="https://wa.me/6285117618858" class="text-decoration-none text-muted">
                            <p class="mb-0 fw-bold text-muted">Phone Number</p>
                            <p class="text-muted small mb-0">+62 851 1761 8858</p>
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="icon-box me-3"><i class="bi bi-envelope"></i></div>
                    <div>
                        <a href="mailto:[EMAIL_ADDRESS]" class="text-decoration-none text-muted">
                            <p class="mb-0 fw-bold text-muted">Email Address</p>
                            <p class="text-muted small mb-0">info@eresa.id</p>
                        </a>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="icon-box me-3"><i class="bi bi-clock"></i></div>
                    <div>
                        <p class="mb-0 fw-bold">Opening Hours</p>
                        <p class="text-muted small mb-0">Mon - Fri: 9.00 AM - 5.00 PM</p>
                    </div>
                </div>

                <div class="d-flex align-items-start">
                    <div class="icon-box me-3">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div>
                        <p class="mb-0 fw-bold text-muted">Our Location</p>
                        <!-- Membungkus alamat dengan link Google Maps -->
                        <a href="https://www.google.com/maps/search/?api=1&query=Jl.+Delima+Raya+Blok+8+No.5A,+Jakarta+Timur" 
                        target="_blank" 
                        class="text-decoration-none">
                            <p class="text-muted small mb-0 link-hover">Jl. Delima Raya Blok 8 No.5A, Jakarta Timur</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- KANAN: Contact Form -->
        <div class="col-lg-7" data-aos="fade-left" data-aos-delay="400"> <!-- Muncul dari kiri -->
            <div class="form-card p-4 p-md-5 h-100">
                <h2 class="fw-bold mb-3">Get In Touch</h2>
                <p class="text-muted small mb-4">We would love to hear about your project and help you grow your business online.</p>

                <form action="#" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control custom-input" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control custom-input" placeholder="Email Address">
                        </div>
                        <div class="col-md-6">
                            <input type="phone" class="form-control custom-input" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control custom-input" placeholder="Company Name">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control custom-input" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-blue rounded-pill px-4 py-2">
                                Send Message <i class="bi bi-arrow-up-right-circle ms-2"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
	<x-footer />

<!-- AOS Library JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000, // Durasi animasi (1 detik)
        once: true,     // Animasi hanya berjalan sekali saat scroll
    });
</script>
</body>
</html>
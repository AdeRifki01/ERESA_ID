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
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/portofolio.css') }}">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Judul Halaman -->
    <title>Portofolio - Eresa.id</title>
</head>
<body>
<!-- NAVBAR -->
    <x-navbar />

<!-- GALLERY -->
    <section class="bg-light d-flex align-items-center" style="min-height:100vh; padding-top:1px;">
        <div class="container" style="margin-top:100px;">
            <h2 class="text-center fw-bold mb-2" data-aos="fade-up">Gallery</h2>
    <!-- FILTER BUTTON -->
            <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="100">
                <button class="btn border-0 bg-transparent fw-bold me-3 filter-btn active-btn"
                    onclick="filterGallery('all', this)">
                    All
                </button>

                <button class="btn border-0 bg-transparent me-3 filter-btn"
                    onclick="filterGallery('eresa', this)">
                    Eresa
                </button>

                <button class="btn border-0 bg-transparent filter-btn"
                    onclick="filterGallery('feed', this)">
                    Feed
                </button>
            </div>

<!-- GRID -->
            <div class="row g-3">
<!-- ERESA -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-card">
                        <img src="/img/portofolio/Porto_1.webp" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-card">
                        <img src="/img/portofolio/Porto_4.jpg" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa" data-aos="fade-up" data-aos-delay="400">
                    <div class="gallery-card">
                        <img src="/img/portofolio/Porto_3.jpg" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item eresa" data-aos="fade-up" data-aos-delay="500">
                    <div class="gallery-card">
                        <img src="/img/portofolio/Porto_2.webp" class="gallery-img">
                    </div>
                </div>

<!-- FEED -->
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-card">
                        <img src="/img/produk/jamuin1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="300">
                    <div class="gallery-card">
                        <img src="/img/produk/MestiMinum.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="400">
                    <div class="gallery-card">
                        <img src="/img/produk/reboot1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="500">
                    <div class="gallery-card">
                        <img src="/img/produk/reboot2.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="600">
                    <div class="gallery-card">
                        <img src="/img/produk/almaz1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="700">
                    <div class="gallery-card">
                        <img src="/img/produk/almaz2.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="800">
                    <div class="gallery-card">
                        <img src="/img/produk/Totoro1.png" class="gallery-img">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3 gallery-item feed" data-aos="fade-up" data-aos-delay="900">
                    <div class="gallery-card">
                        <img src="/img/produk/jamuin2.png" class="gallery-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- VIDEO PROFILE & REELS -->
    <div class="pt-5 pb-5">
    <!-- VIDEO YOUTUBE -->
        <div style="max-width:800px; margin:auto;" data-aos="zoom-in">
            <div class="ratio ratio-16x9" style="border-radius:20px; overflow:hidden; box-shadow:0 15px 35px rgba(0,0,0,0.1);">
                <iframe
                    width="560" height="315"
                    src="https://www.youtube.com/embed/0Lp6Q5nnNoE?si=SnUn729mIYdkpOYt"
                    title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
        </div>

    <!-- REELS -->
        <div class="container mt-5">
            <h5 class="text-center fw-bold mb-4" data-aos="fade-up">Reels</h5>
                <div class="row justify-content-center g-4">
                <!-- REEL 1 -->
                    <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:16px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
                            <video controls style="object-fit:cover;">
                                <source src="/img/video/video_Eresa1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- REEL 2 -->
                    <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:16px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
                            <video controls style="object-fit:cover;">
                                <source src="/img/video/video_Eresa3.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <!-- REEL 3 -->
                    <div class="col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="ratio" style="aspect-ratio:9/16; border-radius:16px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">
                            <video controls style="object-fit:cover;">
                                <source src="/img/video/video_Eresa2.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
        </div>    
    </div>

<!-- FOOTER -->
	<x-footer />

<!-- DROPDOWN PORTOFOLIO -->
    <div class="modal fade" id="portoModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0 text-center">
                    <img src="" id="modalImg" class="img-fluid rounded shadow-lg" style="max-height: 85vh;">
                </div>
            </div>
        </div>
    </div>

<!-- SCRIPT -->
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true,
        });

        // FUNGSI MODAL
        document.querySelectorAll('.gallery-card').forEach(card => {
            card.addEventListener('click', function() {
                const imgSrc = this.querySelector('img').src;
                document.getElementById('modalImg').src = imgSrc;
                const portoModal = new bootstrap.Modal(document.getElementById('portoModal'));
                portoModal.show();
            });
        });

        function filterGallery(category, btn){
            let items = document.querySelectorAll('.gallery-item');
            let buttons = document.querySelectorAll('.filter-btn');

            // FILTER GAMBAR DENGAN TRANSISI HALUS
            items.forEach(item => {
                // Efek transisi keluar
                item.style.opacity = '0';
                item.style.transform = 'scale(0.95)';
                
                setTimeout(() => {
                    if(category === 'all' || item.classList.contains(category)){
                        item.style.display = 'block';
                        // Efek transisi masuk
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'scale(1)';
                        }, 50);
                    } else {
                        item.style.display = 'none';
                    }
                }, 300);
            });

            // RESET SEMUA BUTTON
            buttons.forEach(b => {
                b.classList.remove('active-btn');
            });

            // AKTIFKAN BUTTON YANG DIKLIK
            btn.classList.add('active-btn');
        }
    </script>
</body>
</html>
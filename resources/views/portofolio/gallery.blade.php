<style>
/* ===================================
   FILTER BUTTON
=================================== */
.filter-btn {
    position: relative;
    color: #555;
    font-weight: 600;
    transition: 0.3s ease;
}
.filter-btn:hover {
    color: #111;
}
/* underline */
.filter-btn::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -5px;
    width: 0%;
    height: 2px;
    background: #111;
    transition: 0.35s ease;
}
.filter-btn:hover::after {
    width: 100%;
}
/* active */
.active-btn {
    color: #111;
}
.active-btn::after {
    width: 100%;
}

/* ===================================
   GALLERY CARD
=================================== */
.gallery-card {
    position: relative;
    overflow: hidden;
    border-radius: 16px;
    cursor: pointer;
    transform: translateY(0);
    transition: transform 0.4s ease, box-shadow 0.4s ease;
}
/* hover naik */
.gallery-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
}
/* gambar */
.gallery-img {
    width: 100%;
    aspect-ratio: 4/5;
    object-fit: cover;
    transition: transform 0.5s ease;
}
/* zoom gambar */
.gallery-card:hover .gallery-img {
    transform: scale(1.08);
}
</style>

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

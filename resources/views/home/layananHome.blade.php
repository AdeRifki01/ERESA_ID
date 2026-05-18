<style>
    /* ===== LAYANAN SECTION ===== */
    .layanan-section {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
    }

    .section-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 0.5rem;
    }

    .section-subtitle {
        color: #888;
        font-size: 0.95rem;
    }

    .service-card {
        background: #fff;
        border-radius: 20px;
        padding: 28px 24px;
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .service-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3d86f6, #6c63ff);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(61, 134, 246, 0.12);
    }

    .service-card:hover::before {
        transform: scaleX(1);
    }

    .service-icon {
        width: 80px;
        height: 80px;
        object-fit: contain;
        background: #f8f9ff;
        padding: 10px;
        border-radius: 16px;
        transition: all 0.4s ease;
        margin-bottom: 16px;
    }

    .service-card:hover .service-icon {
        transform: scale(1.1) rotate(-3deg);
        background: linear-gradient(135deg, #eef2ff, #e0e7ff);
    }

    .service-card h6 {
        font-weight: 700;
        font-size: 1rem;
        color: #1a1a2e;
        margin-bottom: 8px;
    }

    .service-card .text-muted {
        font-size: 0.82rem;
        line-height: 1.6;
        color: #888 !important;
    }

    /* ===== RESPONSIVE ===== */
    /* Tablet */
    @media (max-width: 991px) {
        .section-title {
            font-size: 1.6rem;
        }

        .service-card {
            padding: 22px 18px;
        }

        .service-icon {
            width: 65px;
            height: 65px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .section-title {
            font-size: 1.3rem;
        }

        .service-card {
            padding: 20px 16px;
            border-radius: 16px;
        }

        .service-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
        }

        .service-card h6 {
            font-size: 0.9rem;
        }

        .service-card .text-muted {
            font-size: 0.78rem;
        }
    }
</style>

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

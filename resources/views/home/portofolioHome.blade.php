<style>
    /* ===== PORTOFOLIO SECTION ===== */
    .portfolio-section {
        background: #fff;
    }

    .portfolio-row {
        overflow: hidden;
    }

    .portfolio-track .d-flex {
        display: flex;
        gap: 16px;
        width: max-content;
    }

    .portfolio-row .item {
        flex: 0 0 auto;
        width: 250px;
    }

    .portfolio-row img {
        width: 100%;
        aspect-ratio: 4 / 5;
        object-fit: cover;
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .portfolio-row .item:hover img {
        transform: scale(1.03);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    /* Animasi Portofolio Slider */
    .portfolio-row.left .d-flex {
        animation: slideLeft 30s linear infinite;
    }

    .portfolio-row.right .d-flex {
        animation: slideRight 30s linear infinite;
    }

    @keyframes slideLeft {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }

    @keyframes slideRight {
        from {
            transform: translateX(-50%);
        }
        to {
            transform: translateX(0);
        }
    }

    .btn-portfolio {
        background: #1a1a2e;
        color: #fff;
        padding: 12px 40px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: 2px solid #1a1a2e;
        text-decoration: none;
        display: inline-block;
    }

    .btn-portfolio:hover {
        background: transparent;
        color: #1a1a2e;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(26, 26, 46, 0.2);
    }

    /* ===== RESPONSIVE ===== */
    /* Tablet */
    @media (max-width: 768px) {
        .portfolio-row .item {
            width: 150px;
        }

        .portfolio-track .d-flex {
            gap: 12px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .portfolio-row .item {
            width: 110px;
        }

        .portfolio-row img {
            border-radius: 8px;
        }

        .portfolio-track .d-flex {
            gap: 10px;
        }

        .btn-portfolio {
            font-size: 0.8rem;
            padding: 10px 28px;
        }

        /* Pelan-kan animasi biar nyaman di mobile */
        .portfolio-row.left .d-flex,
        .portfolio-row.right .d-flex {
            animation-duration: 35s;
        }
    }
</style>

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

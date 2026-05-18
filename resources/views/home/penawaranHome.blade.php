<style>
    /* ===== PENAWARAN SECTION ===== */
    .penawaran-section {
        background: #fff;
    }

    .penawaran {
        font-size: 1.8rem;
        font-weight: 800;
        color: #1a1a2e;
    }

    .penawaran-desc {
        color: #666;
        font-size: 0.9rem;
        line-height: 1.8;
        max-width: 400px;
        margin: 0 auto;
    }

    .btn-konsultasi {
        border: 2px solid #1a1a2e;
        color: #1a1a2e;
        padding: 12px 32px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.9rem;
        letter-spacing: 1px;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        text-decoration: none;
        display: inline-block;
    }

    .btn-konsultasi:hover {
        background: #1a1a2e;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(26, 26, 46, 0.3);
    }

    /* ===== VIDEO SECTION ===== */
    .video-wrapper {
        max-width: 800px;
        margin: 0 auto;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
    }

    .video-wrapper .ratio {
        border-radius: 16px;
    }

    /* ===== RESPONSIVE ===== */
    /* Desktop & Tablet */
    @media (max-width: 991px) {
        .penawaran {
            font-size: 1.5rem;
        }
    }

    /* Tablet */
    @media (max-width: 768px) {
        .btn-konsultasi {
            font-size: 0.8rem;
            padding: 10px 28px;
        }

        .penawaran {
            font-size: 1.3rem;
        }

        .penawaran-desc {
            font-size: 0.9rem;
        }

        .video-wrapper {
            border-radius: 12px;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .penawaran {
            padding-top: 30px;
            font-size: 1.25rem;
        }

        .penawaran-desc {
            font-size: 0.82rem;
        }

        .btn-konsultasi {
            font-size: 0.78rem;
            padding: 10px 24px;
        }

        .video-wrapper {
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
    }
</style>

<section class="penawaran-section py-5 text-center">
    <div class="container">
        <h2 class="penawaran fw-bold reveal">Siap Membawa Bisnis Anda ke Level Selanjutnya?</h2>
        <p class="penawaran-desc mt-3 reveal reveal-delay-1">Pilihan Paket Layanan dengan skala dan target bisnis Anda.
            Temukan langkah awal kesuksesan digital Anda di sini.</p>
        <div class="mt-4 reveal reveal-delay-2">
            <a href="{{ route('price') }}" class="btn-konsultasi d-inline-block text-decoration-none">
                📦 Pilih Paket Anda
            </a>
        </div>

        <div class="mt-5 pt-4 reveal-scale">
            <h3 class="fw-bold mb-3" style="color: #1a1a2e;">ERESA CREATIF STUDIO COMPANY PROFILE</h3>
            <div class="video-wrapper">
                <div class="ratio ratio-16x9">
                    <iframe
                        src="https://www.youtube.com/embed/0Lp6Q5nnNoE?si=SnUn729mIYdkpOYt"
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

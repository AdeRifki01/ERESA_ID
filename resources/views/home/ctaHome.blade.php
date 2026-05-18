<style>
    /* ===== IDE BESAR (CTA) SECTION ===== */
    .cta-section {
        background: linear-gradient(135deg, #f8f9ff 0%, #f0f4ff 100%);
        color: #1a1a2e;
        position: relative;
        overflow: hidden;
    }

    .cta-title {
        font-size: 2rem;
        font-weight: 800;
        color: #1a1a2e;
        position: relative;
        z-index: 2;
    }

    .cta-desc {
        opacity: 1;
        color: #555;
        font-size: 1rem;
        line-height: 1.8;
        max-width: 700px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    .btn-cta {
        background: #3d86f6;
        color: #fff;
        padding: 14px 40px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.95rem;
        letter-spacing: 1px;
        transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
        border: none;
        text-decoration: none;
        display: inline-block;
        position: relative;
        z-index: 2;
    }

    .btn-cta:hover {
        transform: translateY(-3px) scale(1.03);
        box-shadow: 0 12px 35px rgba(61, 134, 246, 0.35);
        background: #2d6fd6;
        color: #fff;
    }

    /* ===== RESPONSIVE ===== */
    /* Tablet (991px) */
    @media (max-width: 991px) {
        .cta-title {
            font-size: 1.6rem;
        }
    }

    /* Tablet (768px) */
    @media (max-width: 768px) {
        .cta-title {
            font-size: 1.4rem;
        }

        .cta-desc {
            font-size: 0.9rem;
        }
    }

    /* Mobile */
    @media (max-width: 576px) {
        .cta-title {
            font-size: 1.35rem;
            line-height: 1.3;
        }

        .cta-desc {
            font-size: 0.85rem;
        }

        .btn-cta {
            font-size: 0.8rem;
            padding: 12px 30px;
        }
    }
</style>

<section class="cta-section py-5 pt-2">
    <div class="container text-center" style="max-width:900px;">
        <h2 class="cta-title reveal pt-1">
            Punya Ide Besar? Mari Kita Wujudkan Bersama
        </h2>
        <p class="cta-desc mt-3 reveal reveal-delay-1">
            Lupakan kerumitan teknis dan algoritma. Fokuslah pada visi Anda,<br>biarkan tim ahli kami yang mengurus eksekusi digitalnya.
        </p>
        <div class="mt-4 reveal reveal-delay-2">
            <a href="https://wa.me/6285117618858?text=Halo%20Eresa%20Creative%20Studio,%20saya%20tertarik%20dengan%20layanan%20Anda.%20Boleh%20diskusi%20lebih%20lanjut?" 
            target="_blank" class="btn-cta">
                GET A QUOTE
            </a>
        </div>
    </div>
</section>

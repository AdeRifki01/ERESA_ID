<?php
// Konfigurasi Data Footer (Bisa dipindah ke file config.php)
$company_name = "eresa.id";
$tagline      = "Creative Studio · Digital Marketing";
$address      = "Jl. Delima Raya Blok 8 No.5A Duren Sawit - Jakarta Timur 13450";
$map_link     = "https://maps.app.goo.gl/hknFGGRKnirRHVop6";
$email        = "info@eresa.id";
$phones       = ["+62 851 1761 8858"];
$social_media = [
    'facebook'  => 'https://www.facebook.com/share/17vxsWVbU2/?mibextid=wwXIfr',
    'instagram' => 'https://www.instagram.com/eresa_id?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
    'tiktok'    => 'https://www.tiktok.com/@eresa.creative.st?is_from_webapp=1&sender_device=pc'
];
$current_year = date("Y");
?>

<footer class="footer-main pt-5 pb-4">
    <div class="container">
        <div class="row g-4"> <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                <div class="footer-brand-title"><?= $company_name; ?></div>
                <p class="footer-brand-tagline"><?= $tagline; ?></p>
                <p style="font-size:0.82rem; color:rgba(255,255,255,0.55); line-height:1.7; margin-bottom:20px;">
                    Kami hadir untuk membantu bisnis Anda berkembang melalui strategi konten kreatif dan solusi digital yang tepat sasaran.
                </p>
                <div class="footer-socmed-wrap">
                    <a href="<?= $social_media['facebook']; ?>" target="_blank" class="socmed-icon fb"><i class="bi bi-facebook"></i></a>
                    <a href="<?= $social_media['instagram']; ?>" target="_blank" class="socmed-icon ig"><i class="bi bi-instagram"></i></a>
                    <a href="<?= $social_media['tiktok']; ?>" target="_blank" class="socmed-icon tt"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6">
                <h6 class="footer-heading">Company</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="footer-link">Home</a></li>
                    <li><a href="{{ route('about') }}" class="footer-link">About</a></li>
                    <li><a href="{{ route('portofolio') }}" class="footer-link">Portfolio</a></li>
                    <li><a href="{{ route('price') }}" class="footer-link">Price</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6">
                <h6 class="footer-heading">Layanan</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Social Media</a></li>
                    <li><a href="#" class="footer-link">Branding</a></li>
                    <li><a href="#" class="footer-link">Video Editing</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h6 class="footer-heading">Get In Touch</h6>
                
                <a href="mailto:<?= $email; ?>" class="footer-contact-item">
                    <span class="footer-contact-icon">✉️</span>
                    <div class="footer-contact-text"><strong>Email</strong><?= $email; ?></div>
                </a>

                <a href="<?= $map_link; ?>" target="_blank" class="footer-contact-item">
                    <span class="footer-contact-icon">📍</span>
                    <div class="footer-contact-text"><strong>Alamat</strong><?= $address; ?></div>
                </a>

                <div class="footer-map mt-3">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=..." 
                        width="100%" 
                        height="120" 
                        style="border:0; border-radius:12px; filter: grayscale(0.1);" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</footer>

<!-- ========== COPYRIGHT BAR ========== -->
<div class="footer-bottom py-3">
    <div class="container d-flex justify-content-between flex-wrap text-center text-md-start">
        <div>
            © <?= $current_year; ?> <?= $company_name; ?>. All Rights Reserved
        </div>
    </div>
</div>

<link rel="stylesheet" href="{{ asset('css/footer.css') }}">

<script>
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
</script>
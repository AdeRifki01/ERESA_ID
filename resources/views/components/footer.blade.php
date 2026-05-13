<?php
// Konfigurasi Data Footer (Bisa dipindah ke file config.php)
$company_name = "Eresa.id";
$tagline      = "Eresa Creative Studio";
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

<footer class="footer-agency">
    <div class="container">
        <!-- Main Footer -->
        <div class="footer-main">
            <!-- Tetap gunakan justify-content-center untuk row utama -->
            <div class="row g-4 text-center text-lg-start">      
                <!-- Brand/Logo (Full width di mobile agar di atas) -->
                <div class="col-12 col-lg-3 px-3 footer-reveal footer-delay-1">
                    <h2 class="footer-logo">{{ $company_name }}</h2>
                    <p class="footer-desc">{{ $tagline }}</p>
                    <div class="footer-social">
                        <a href="{{ $social_media['facebook'] }}" target="_blank"><i class="bi bi-facebook"></i></a>
                        <a href="{{ $social_media['instagram'] }}" target="_blank"><i class="bi bi-instagram"></i></a>
                        <a href="{{ $social_media['tiktok'] }}" target="_blank"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>

                <!-- Kolom Home -->
                <div class="col-6 col-lg-2 px-3 footer-reveal footer-delay-2">
                    <h5 class="footer-title-link-style">
                        <a href="{{ route('home') }}" class="footer-title-link">
                            <i class="bi bi-house-door me-2"></i>Home
                        </a>
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="{{ route('about') }}">
                                <i class="bi bi-info-circle me-2"></i>About Us
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('rebootcom') }}">
                                <i class="bi bi-pc-display me-2"></i>
                                Reboot Com
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('portofolio') }}">
                                <i class="bi bi-images me-2"></i>Portofolio
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('price') }}">
                                <i class="bi bi-currency-dollar me-2"></i>Price
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ route('contact') }}">
                                <i class="bi bi-telephone me-2"></i>Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Kolom Contact (Gunakan col-6 agar bersebelahan dengan Home) -->
                <div class="col-6 col-lg-3 px-3 footer-reveal footer-delay-3">
                    <h5 class="footer-title-link-style">
                        <a href="{{ route('contact') }}" class="footer-title-link">
                            <i class="bi bi-telephone me-2"></i>Contact
                        </a>
                    </h5>
                    <ul class="list-unstyled">
                        @foreach($phones as $phone)
                        <li class="mb-2">
                            <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $phone) }}" target="_blank">
                                <i class="bi bi-whatsapp me-2"></i>{{ $phone }}
                            </a>
                        </li>
                        @endforeach
                        <li class="mb-2">
                            <a href="mailto:{{ $email }}">
                                <i class="bi bi-envelope-at me-2"></i>{{ $email }}
                            </a>
                        </li>
                        <li class="mb-2">
                            <a href="{{ $map_link }}" target="_blank">
                                <i class="bi bi-geo-alt me-2"></i>{{ $address }}
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Location (Full width di mobile agar di bawah) -->
                <div class="col-12 col-lg-4 px-4 footer-reveal footer-delay-4">
                    <h5><i class="bi bi-pin-map me-2"></i>Location</h5>
                    <div class="footer-map">
                        <iframe
                            src="https://www.google.com/maps?q=Jl.+Delima+Raya+Blok+8+No.5A+Duren+Sawit+Jakarta+Timur&output=embed"
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- BOTTOM COPYRIGHT -->
<div class="footer-bottom">
		<div class="container">
			<p>
				<a href="#" style="text-decoration: none; color: inherit; cursor: pointer;">
					© {{ $current_year }} {{ $company_name }} — All Rights Reserved
				</a>
			</p>
		</div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
    const footerReveal = document.querySelectorAll('.footer-reveal');
    const footerObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('active');
            }
        });
    }, {
        threshold: 0.2
    });
    footerReveal.forEach(el => footerObserver.observe(el));
    });
</script>
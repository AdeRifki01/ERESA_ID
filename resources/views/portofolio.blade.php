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
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Judul Halaman -->
    <title>Portofolio - Eresa.id</title>
</head>
<body>
<!-- NAVBAR -->
    <x-navbar />

<!-- GALLERY -->
    @include('portofolio.gallery')

<!-- VIDEO PROFILE & REELS -->
    @include('portofolio.video')

<!-- FOOTER -->
	<x-footer />

<!-- DROPDOWN GALLERY -->
    @include('portofolio.dropdown')

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
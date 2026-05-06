<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('img/eresa/Logo_putih.png') }}" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/rebootcom.css">
    <title>Rebootcom</title>
</head>
<body>
<!-- NAVBAR -->
    {{ view('components.navbar') }}
    <h1>REBOOTCOM</h1>

<!-- MAIN CONTENT -->
    <section class="coming-section d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="fw-bold mb-3">Reboot Com🚀</h1>
            <h4 class="mb-3">Coming Soon</h4>
            <p class="mb-4 mx-auto" style="max-width:600px;">
                Kami sedang membangun sesuatu yang powerful untuk membantu bisnis Anda berkembang di dunia digital.
                Stay tuned untuk pengalaman terbaik dari Eresa.
            </p>

            <!-- BUTTON -->
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="index.php" class="btn btn-outline-light px-4 py-2 rounded-pill">
                    ⬅️ Kembali
                </a>
            </div>
        </div>
    </section>

<!-- FOOTER -->
	{{ view('components.footer') }}
</body>
</html>
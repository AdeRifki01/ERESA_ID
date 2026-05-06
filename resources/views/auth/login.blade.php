<?php
session_start();

$back = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

// 🔐 CEK JIKA SUDAH LOGIN
if(isset($_SESSION['login'])){
    header("Location: " . route('dashboard'));
    exit;
}

// 🔑 PROSES LOGIN
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Username & password sementara
    if($username == "eresa" && $password == "123"){
        $_SESSION['login'] = true;
        header("Location: " . route('dashboard'));
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin | Eresa.id</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>

<div class="overlay"></div>

<div class="login-container">
    <div class="login-card fade-up">
        <div class="d-flex align-items-center justify-content-center mb-4">
            <img src="{{asset('img/eresa/Logo_biru.png')}}" 
                style="width:45px; height:45px; object-fit:contain; margin-right:12px;">
            <div>
                <h5 class="mb-0 fw-bold">Eresa Admin</h5>
            </div>
        </div>

        <?php if(isset($error)) : ?>
            <div class="alert alert-danger py-2 mb-4" style="border-radius: 10px; font-size: 0.85rem;">
                <?= $error; ?>
            </div>
        <?php endif; ?>

        <form method="POST">
            @csrf
            <div class="mb-3 input-group">
                <i class="bi bi-person"></i>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="mb-4 input-group">
                <i class="bi bi-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn btn-login w-100">
                Login
            </button>
            <a href="<?= $back; ?>" class="btn-back">
                ← Kembali ke Beranda
            </a>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
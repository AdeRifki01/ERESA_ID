<?php
session_start();

// Hapus semua session
session_unset();
session_destroy();

// Arahkan ke login admin (BUKAN ke website)
header("Location: " . route('login') . "?logout=success");
exit;
?>`
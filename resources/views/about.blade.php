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
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/testnavbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/testfooter.css') }}">

    <!-- Judul Halaman -->
	<title>Eresa Creative Studio - Eresa.id</title>
	
</head>
<body>
    <x-testnavbar />
    <h1>Eresa Creative Studio</h1>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<p>Ini Halaman About</p>
				</div>
			</div>
		</div>
    <x-testfooter />
</body>
</html>
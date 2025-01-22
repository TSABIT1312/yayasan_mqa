<!-- navbar.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar - RUTABA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-gray-900 bg-gray-900 ">
        <div class="container">
            <!-- Brand/Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/rutaba2.png" alt="Logo Sekolah" class="logo" width="55" height="auto">
                <img src="assets/rutaba5.png" alt="Logo Sekolah" class="logo" width="55" height="auto">
                <img src="assets/rutaba4.png" alt="Logo Sekolah" class="logo" width="55" height="auto">
            </a>
            <!-- Toggler Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Home Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><b>Home</b></a>
                    </li>
                    <!-- Tentang Link (Tanpa Dropdown) -->
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><b>Tentang</b></a>
                    </li>
                    <!-- Layanan Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="services.php"><b>Layanan</b></a>
                    </li>
                    <!-- Kontak Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php"><b>Kontak</b></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
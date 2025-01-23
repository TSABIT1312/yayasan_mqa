<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - RUTABA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="assets/yayasan.png" href="assets/yayasan.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        .hero {
            background-image: url('assets/home1.jpg');
            background-size: cover;
            background-position: center;
            height: 650px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        @media (max-width: 768px) {
            .hero {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> 

    <div class="hero">
        <h1><b>Selamat Datang di Yayasan Mabadi Qura'nil Aziz</b></h1>
    </div>


       <!-- Program Unggulan -->
<div class="container mt-5">
    <h1 class="text-center"><b>PROGRAM UNGGULAN</b></h1>
    <div class="row">
        <!-- Program Madin -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center"><i class="bi bi-globe-central-south-asia"></i></h3>
                    <p class="text-center"><font size="4"> Mengenal 3 Bahasa </font></p>
                </div>
            </div>
        </div>
        <!-- Program TK -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center"><i class="bi bi-person-arms-up"></i></h3>
                    <p class="text-center"><font size="4">Membentuk Karakter Qur'ani</font></p>
                </div>
            </div>
        </div>
        <!-- Program Balita -->
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center"><i class="bi bi-book-half"></i></h3>
                    <p class="text-center"><font size="4">Hafal 30 Juz</font></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimoni -->
<div class="container mt-5">
    <h2 class="text-center"><b>Testimoni</b></h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center"><i class="bi bi-people-fill"></i></h3>
                    <p class="card-text">"Sangat puas dengan pendidikan yang diberikan oleh sekolah ini. Anak saya menjadi lebih disiplin dan berakhlak mulia."</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center"><i class="bi bi-people-fill"></i></h3>
                    <p class="card-text">"Anak saya sangat senang belajar di sini. Fasilitas yang diberikan juga sangat memadai."</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center"><i class="bi bi-people-fill"></i></h3>
                    <p class="card-text">"Sekolah ini sangat memperhatikan perkembangan anak. Sangat direkomendasikan."</p>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="text-center mt-5">
    <p>&copy; 2024. Semua hak dilindungi.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
<script src="script.js"></script>
</body>
</html>
        
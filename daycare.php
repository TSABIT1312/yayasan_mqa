<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Rutaba dan Daycare - RUTABA</title>
    <link rel="icon" type="assets/yayasan.png" href="assets/yayasan.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .activity-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }
        .activity-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .activity-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .activity-card .card-body {
            padding: 15px;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h1 class="text-center"><b>Program Rutaba dan Daycare</b></h1>
        <p class="isi">Rutaba MQA Plus Day Care adalah program terpadu untuk anak usia 2,5-6 tahun yang menggabungkan pendidikan Qurani melalui tahfidz dan tahsin Al-Quran dengan layanan daycare. Anak-anak dibimbing menghafal hingga 30 juz, membaca Al-Quran dengan tajwid, serta khatam bin nadzar, dalam lingkungan islami yang aman dan mendukung tumbuh kembang fisik, emosional, dan spiritual.</p>

        <p>Program unggulan Rutaba meliputi:</p>
        <ul>
            <li>Mengembangkan kemampuan akademik anak</li>
            <li>Mempersiapkan anak untuk masuk ke sekolah dasar</li>
            <li>Mengembangkan kemampuan sosial anak</li>
            <li>Mengembangkan kemampuan emosional anak</li>
        </ul>

        <h2 class="mt-4">Materi Pembelajaran Rutaba</h2>
        <p>Materi pembelajaran yang diajarkan di Rutaba meliputi:</p>
        <ul>
            <li>Bahasa dan komunikasi</li>
            <li>Matematika dasar</li>
            <li>Ilmu pengetahuan alam</li>
        </ul>

        <h2 class="mt-4">Kegiatan yang Telah Dilakukan Rutaba</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="activity-card">
                    <img src="assets/rutaba1.jpg" alt="Kegiatan Rutaba">
                    <div class="card-body">
                        <h5>Outing Class</h5>
                        <p>Kegiatan Rutaba yang bertujuan untuk mengembangkan kemampuan akademik anak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card">
                    <img src="assets/kelas2.jpg" alt="Kegiatan Rutaba">
                    <div class="card-body">
                        <h5>Kegiatan Belajar</h5>
                        <p>Kegiatan belajar ini di lakukan untuk meningkatkan kualitas anak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card">
                    <img src="assets/sholat.jpg" alt="Kegiatan Rutaba">
                    <div class="card-body">
                        <h5>Sholat Dhuha</h5>
                        <p>Kegiatan sholat dhuha ini biasanya di lakukan sebelum anak anak melakukan aktifitas pembelajaran selanjutnya.</p>
                    </div>
                </div>
            </div>
        </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024. Semua hak dilindungi. Program Rutaba dan Daycare</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
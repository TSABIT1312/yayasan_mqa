<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program TK - RUTABA</title>
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
        <h1 class="text-center"><b>Program TK</b></h1>
        <p class="text-left">TK Tahfidz MQA adalah program untuk anak usia 4-6 tahun yang bertujuan membentuk generasi Qurani. Anak-anak dibimbing menghafal Juz 29-30, lancar membaca Al-Quran sebelum masuk SD, serta dibekali nilai-nilai karakter berbasis hadis seperti akhlakul karimah dan kemandirian.</p>

        
        <h2>Program unggulan TK meliputi:</h2>
        <ul>
            <li>Bisa Baca Al-Quran sebelum SD</li>
            <li>Hafal Juz 30</li>
            <li>Membentuk karakter Qurani</li>
            <li>Hafal Hadist Adab</li>
            <li>Praktik Ibadah</li>
            <li>Mengenal 3 bahasa yaitu Arab,Inggris,Indonesia</li>
            <li>PHBI/PHBN</li>
            <li>Outbound</li>
            <li>Manasik haji</li>
            <li>Market Day</li>
        </ul>

        <h2 class="mt-4">Materi Pembelajaran</h2>
        <p>Materi pembelajaran yang diajarkan di TK meliputi:</p>
        <ul>
            <li>Tahsin</li>
            <li>Praktek Sholat</li>
            <li>Tahfidz jus 30</li>
            <li>Bahasa Arab</li>
        </ul>

        <h2 class="mt-4">Fasilitas</h2>
        <p>Fasilitas yang tersedia:</p>
        <ul>
            <li>Tempat Bermain</li>
            <li>Perpustakaan</li>
            <li>Aula</li>
            <li>Ruang kelas Yang nyaman</li>
        </ul>

        <h2 class="mt-4">Kelas</h2>
        <p>Kelas Yang tersedia:</p>
        <ul>
            <li>Kelompok A/TK Besar 4-5 tahun</li>
            <li>Kelompok B/TK Kecil 5-6 tahun</li>
        </ul>

        <h2 class="mt-4">Kegiatan yang Telah Dilakukan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="activity-card">
                    <img src="assets/Manasik.jpg" alt="Kegiatan TK">
                    <div class="card-body">
                        <h5>Manasik Haji</h5>
                        <p>Kegiatan Manasik Haji dilakukan untuk membuat anak mengerti apa itu Haji.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/Market Day.jpg" alt="Kegiatan TK">
                    <div class="card-body">
                        <h5>Market Day</h5>
                        <p>Kegiatan market day di lakukan untuk melatih anak dalam berniaga atau mengatur keuangan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/fasilitas.jpg" alt="Kegiatan TK">
                    <div class="card-body">
                        <h5>Fasilitas</h5>
                        <p>Fasilitas ini disediakan untuk menambah giat belajar para siswa kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024. Semua hak dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Animasi fade-in untuk teks
        const fadeIns = document.querySelectorAll('.fade-in');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.5,
        });

        fadeIns.forEach((fadeIn) => {
            observer.observe(fadeIn);
        });
    </script>
</body>
</html>
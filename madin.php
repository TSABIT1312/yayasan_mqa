<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Madin - RUTABA</title>
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
        <h1 class="text-center"><b>Program Madin</b></h1>
        <p class="text-left">Madrasah Diniyah Mabadi Quranil Aziz adalah program sore untuk anak usia SD-SMP yang fokus pada Tahfidz 30 Juz (7 level), Tahsin (lancar baca Al-Quran dalam 1 tahun), pembentukan adab dan akhlak, Mabit (Malam Bina Iman & Taqwa), Camp Tahfidz & Outbound, Market Day, serta pelatihan silat untuk membangun fisik dan mental yang kuat. Dilengkapi materi fiqih, doa harian, hadits dan praktek ibadah, program ini bertujuan untuk mencetak generasi Qurani yang berkarakter unggul.</p>

        
        <p>Program unggulan Madin MQA meliputi:</p>
        <ul>
<li>Tahfidz Al-Quran: Hafalan 30 Juz dengan 7 level.</li>
<li>Bahasa Arab: Pembelajaran berbasis kitab kuning.</li>
<li>Tahsin Al-Quran: Lancar membaca Al-Quran dengan tajwid dalam 1 tahun.</li>
<li>Pembentukan Adab dan Akhlak: Menanamkan nilai-nilai islami dalam keseharian.</li>
<li>Mabit (Malam Bina Iman & Taqwa): Aktivitas malam untuk meningkatkan spiritualitas.</li>
<li>Camp Tahfidz & Outbound: Kegiatan luar ruangan untuk pembelajaran dan kebersamaan.</li>
<li>Market Day: Melatih keterampilan kewirausahaan sederhana.</li>
<li>Pelatihan Silat: Membangun kekuatan fisik dan mental anak.</li>
        </ul>

        <h2 class="mt-4">Materi Pembelajaran</h2>
        <p>Materi pembelajaran yang diajarkan di Madin MQA meliputi:</p>
        <ul>
            <li>Tahsin (Pembacaan Al-Qur'an)</li>
            <li>Tahfidz (Hafalan Al-Qur'an)</li>
            <li>Kitabah/Imla (Menulis Arab)</li>
            <li>Mufradat (Kosakata Bahasa Arab)</li>
            <li>Kitab Dasar (Mabadi Fiqh, Safinah, Khulashoh Nurul Yaqin, Aqo'id Diniyah, Hadits Arba'in)</li>
        </ul>

        <h2 class="mt-4">Kegiatan yang Telah Dilakukan</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="activity-card">
                    <img src="assets/wisuda.jpg" alt="Malam Bina Takwa">
                    <div class="card-body">
                        <h5>HAFLAH</h5>
                        <p>Kegiatan Haflah adalah kegiatan khotmil quran dan uji publik serta pelepasan yang dilakukan setiap setahun sekali.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/camp.jpg" alt="Camp Tahfidz">
                    <div class="card-body">
                        <h5>Camp Tahfidz</h5>
                        <p>Kegiatan camp tahfidz yang bertujuan untuk meningkatkan hafalan Al-Qur'an siswa.</p>
                        <div class="col-6">
                                <a href="camp.php" class="btn btn-primary w-100">Selengkapnya</a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/Marketday.jpg" alt="Market Day">
                    <div class="card-body">
                        <h5>Market Day</h5>
                        <p>Kegiatan market day yang melatih siswa dalam berwirausaha dan mengelola keuangan.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/pesantren ramadhan.jpg" alt="Parenting">
                    <div class="card-body">
                        <h5>Mabit</h5>
                        <p>Kegiatan Mabit atau Malam Bina Takwa yang di lakukan untuk mempererat persaudaraan dan menambah ilmu pengetahuan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/pesantren.jpg" alt="Peringatan Hari Besar Islam">
                    <div class="card-body">
                        <h5>Pesantren Kilat</h5>
                        <p>Kegiatan Pesantren Kilat yang di lakukan pada bulan ramadhan ini bertujuan untuk meningkatkan para siswa dalam mengerti banyak hal hal bermanfaat yang di lakukan pada Bulan Ramadhan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="activity-card animate__animated animate__fadeInUp">
                    <img src="assets/tahsin.jpg" alt="Tahsin">
                    <div class="card-body">
                        <h5>Tahsin</h5>
                        <p>Program tahsin yang membantu siswa membaca Al-Qur'an dengan benar dalam waktu 1 tahun.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024. Semua hak dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
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
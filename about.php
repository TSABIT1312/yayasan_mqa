<!-- about.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - RUTABA</title>
    <link rel="icon" type="assets/yayasan.png" href="assets/yayasan.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
    <style>
        /* Gaya untuk foto lingkaran */
        .profile-img {
            width: 250px;
            height: 230px;
            border-radius: 50%; /* Membuat gambar berbentuk lingkaran */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border: 4px solid #fff; /* Tambahkan border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan shadow */


        }
        .struktur-organisasi {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            border: 2px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .img-fluid {
                height:600px;
                object-fit: cover;
            }
        }

        /* Gaya untuk foto guru */
.guru-img {
    width: 100%; /* Lebar gambar mengikuti container */
    height: auto; /* Tinggi disesuaikan secara otomatis */
    max-height: 600px; /* Batasi tinggi maksimum */
    object-fit: cover; /* Pastikan gambar tidak terdistorsi */
    border-radius: 10px; /* Tambahkan sudut melengkung */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan shadow */
}

/* Responsif untuk perangkat mobile */
@media (max-width: 768px) {
    .guru-img {
        max-height: 300px; /* Tinggi maksimum lebih kecil di mobile */
    }
}

.program-card {
    background: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.program-card:hover {
    transform: translateY(-5px);
}

.program-description {
    margin-top: 10px;
    color: #555;
}
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Memanggil file navbar -->
<div class="text-center mt-5">
<img src="assets/waliko.jpg" alt="Kepala Yayasan" class="profile-img">
       <!-- Sambutan Kepala Yayasan -->
<div class="text-center mt-5">
    <div class="card bg-light text-black">
        <div class="card-body">
            <h2 class="mt-3"><b>Waliko, M.A.</b></h2>
            <p class="text-black">Ketua Yayasan MQA</p>
            
                <p class="isi"><font size="4">"Assalamu’alaikum warahmatullahi wabarakatuh,Segala puji bagi Allah SWT atas rahmat dan hidayah-Nya. Yayasan Mabadi Quranil Aziz dengan bangga menghadirkan lembaga pendidikan seperti Rumah Tahfidz Balita dan Anak, TK Tahfidz MQA, serta Madrasah Diniyah MQA.Visi kami adalah mencetak generasi Qurani yang cerdas, berakhlak mulia, dan berwawasan luas. Melalui program unggulan seperti tahsin, tahfidz, pendidikan karakter, dan kegiatan kreatif, kami berkomitmen menjadi mitra terbaik orang tua dalam mendidik anak-anak sejak dini.Kami mengajak masyarakat untuk mendukung misi mulia ini. Semoga upaya kita membangun generasi Qurani diberkahi Allah SWT dan bermanfaat bagi bangsa serta dunia.Wassalamu’alaikum warahmatullahi wabarakatuh."</font></p>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 class="text-center"><b>GURU GURU KAMI</b></h2>
    <div class="row">
        <div class="col-md-12">
            <img src="assets/guruuu.jpg" alt="Guru" class="guru-img">
        </div>
    </div>
</div>

        <!-- Gambar Struktur Organisasi -->
    <div class="text-center mt-5">
        
        <img src="assets/struktur.jpg" alt="Struktur Organisasi" class="struktur-organisasi">
    </div>
    
    <div class="container mt-5">
        <h1 class="text-center"><b>TENTANG</b></h1>
        <p class="isi">Kami adalah lembaga pendidikan yang berkomitmen untuk memberikan pendidikan berkualitas kepada siswa. Kami percaya bahwa setiap anak memiliki potensi yang unik dan kami berusaha untuk membantu mereka mencapai potensi tersebut.</p>

        <h2><b>VISI</b></h2>
        <p>Mencetak generasi Qurani yang cerdas,berakhlak mulia, dan mempersiapkan calon pemimpin bangsa di masa depan.</p>

        <h2><b>MISI</b></h2>
        <ul>
            <li>Menyediakan pendidikan yang berkualitas dan relevan.</li>
            <li>Mendorong pengembangan karakter dan nilai-nilai moral.</li>
            <li>Memberikan dukungan kepada siswa dalam mencapai tujuan akademik dan pribadi mereka.</li>
        </ul>

        <h2><b>SEJARAH</b></h2>
        <p class="isi">Didirikan oleh Umi Waliko, M.A. pada tahun 2015 dengan nama awal yaitu Rumah Tahfidz Balita dan Anak Preuner Al Muzammil di bawah naungan PPA Learning Center Cabang Purwokerto
           Pada tahun 2019 dibuka kelas Madrasah Diniyah Al Ula yang memiliki 2 program yaitu program Bahasa Arab dan khusus Tahfidz Al-Quran
           Bersamaan dengan itu juga berdirilah TK Tahfidz dan Balita Tahfidz dengan visi yaitu mencetak generasi Qurani sejak usia balita  di moment golden age dan menyungsung konsep BALITA KHATAM AL-QURAN
           Di tahun 2020 berkomitmen menerapkan Metode Utrujah, Tabarak, dan Wafa yang dikombinasikan
           Pada tahun 2021 berdirilah akte yayasan dengan nama  Mabadi Quranil Aziz  yang disingkat MQA, dengan harapan menjadi lembaga yang berkomitmen untuk memberi dasar pendidikan Al-Quran sejak usia dini. Dengan adanya akte notaris maka semua berganti nama menjadi Rutaba MQA, Madin MQA, TK Tahfidz MQA.
         </p>

        <h2><b>TUJUAN YAYASAN</b></h2>
        <p>Tujuan dari didirikannya Yayasan MQA adalah untuk andil dalam pendidikan Al Quran sejak usia dini yang dimulai dari usia 3 tahun sampai 5 tahun,kemudian dilanjut sampai dengan usia 12 tahun untuk masuk ke Madrasah Diniyah,sehingga program yang berlangsung selama 9 tahun</p>
        
        <h2><b>FASILITAS</b></h2>
        <p>Fasilitas yang diberikan untuk para santri Madrasah Diniyah, TK Tahfidz, maupun Balita Tahfidz ialah ruang kelas yang nyaman, aula representatif, alat dan arena bermain yang memadahi, perpustakaan.</p>

        <h2><b>PROGRAM RUTABA DAN DAYCARE</b></h2>
<div class="program-card">
    <a href="daycare.php" class="btn btn-dark btn-sm">
        <i class="fas fa-pencil-alt"></i> Info
    </a>
    <p class="program-description">Program Rutaba dan Daycare menyediakan layanan pengasuhan dan pendidikan dini dengan fokus pada pembelajaran Al-Quran dan pengembangan karakter anak.</p>
</div>

<h2><b>PROGRAM TK TAHFIDZ</b></h2>
<div class="program-card">
    <a href="tk.php" class="btn btn-dark btn-sm">
        <i class="fas fa-pencil-alt"></i> Info
    </a>
    <p class="program-description">Program TK Tahfidz bertujuan untuk menanamkan kecintaan terhadap Al-Quran sejak usia dini dengan metode pembelajaran yang menyenangkan dan interaktif.</p>
</div>

<h2><b>PROGRAM MADIN</b></h2>
<div class="program-card">
    <a href="madin.php" class="btn btn-dark btn-sm">
        <i class="fas fa-pencil-alt"></i> Info
    </a>
    <p class="program-description">Program Madin menawarkan pendidikan diniyah dengan kurikulum yang komprehensif, mencakup pembelajaran Al-Quran, bahasa Arab, dan ilmu agama lainnya.</p>
</div>
    
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024.Semua hak dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
    <script src="script.js"></script>
</body>
</html>
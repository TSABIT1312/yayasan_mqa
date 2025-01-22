<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Animasi untuk card */
        .card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Animasi fade-in */
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .fade-in.visible {
            opacity: 1;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center"><b>INFORMASI LAYANAN</b></h1>

        <div class="row mt-4">
            <!-- Card Registrasi Siswa Baru -->
            <div class="col-12 col-md-4 fade-in">
                <div class="card shadow">
                    <img src="assets/foto1.jpg" class="card-img-top img-fluid" alt="Pendaftaran Siswa Baru">
                    <div class="card-body">
                        <h5 class="card-title">PENDAFTARAN SISWA BARU</h5>
                        <p class="card-text">Kami menerima pendaftaran siswa baru setiap tahun ajaran. Proses pendaftaran dapat dilakukan secara online atau langsung di sekolah.</p>
                        <div class="row">
                            <div class="col-6">
                                <a href="kelas.php" class="btn btn-primary w-100"><i class="bi bi-arrow-right-square"></i> Daftar</a>
                            </div>
                            <div class="col-6">
                                <a href="https://maps.app.goo.gl/VKDrQuF7Xp1BF2raA" target="_blank" class="btn btn-outline-secondary w-100"><i class="bi bi-geo-alt"></i>  Lokasi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Informasi Kegiatan -->
            <div class="col-12 col-md-4 fade-in">
                <div class="card shadow">
                    <img src="assets/foto2.jpg" class="card-img-top img-fluid" alt="Informasi Kegiatan">
                    <div class="card-body">
                        <h5 class="card-title">INFORMASI KEGIATAN</h5>
                        <p class="card-text">Informasi kegiatan ini bertujuan untuk memberitahu anda tentang kegiatan kegiatan anak anak yang berlangsung.</p>
                        <a href="https://drive.google.com/drive/folders/1-Yd5UvsxdJ2OgC2P0Xa-miMxjeE4YJVf" target="_blank" class="btn btn-primary w-100"><i class="bi bi-search"></i>  Lihat</a>
                    </div>
                </div>
            </div>

            <!-- Card Outing Class -->
            <div class="col-12 col-md-4 fade-in">
                <div class="card shadow">
                    <img src="assets/rutaba.jpg" class="card-img-top img-fluid" alt="Outing Class">
                    <div class="card-body">
                        <h5 class="card-title">OUTING CLASS</h5>
                        <p class="card-text">Kami menawarkan kegiatan belajar di luar sekolah untuk mengembangkan minat dan bakat anak.</p>
                        <a href="https://www.instagram.com/reel/DCLH608tYIR/?igsh=MW8zbDE3ZDR6NGxteA==" target="_blank" class="btn btn-primary btn-sm">
                        <i class="bi bi-instagram"></i> Lihat Video</a>
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
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Kelas - RUTABA</title>
    <link rel="icon" type="assets/yayasan.png" href="assets/yayasan.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .info-box {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <p class="text-center">Berikut adalah jenis-jenis kelas yang tersedia di Yayasan Kami:</p>

        <div class="row">
            <!-- Tabel Jenis Kelas (Setengah Layar) -->
            <div class="col-md-6">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Jenis Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Kelas Madin</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kelasMadinModal">
                                        Detail Kelas
                                    </button>
                                    <a href="form_pendaftaran.php" class="btn btn-success btn-sm ms-2">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kelas TK</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kelasTKModal">
                                        Detail Kelas
                                    </button>
                                    <a href="form_pendaftaran.php" class="btn btn-success btn-sm ms-2">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Kelas Balita</td>
                            <td>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kelasBalitaModal">
                                        Detail Kelas
                                    </button>
                                    <a href="form_pendaftaran.php" class="btn btn-success btn-sm ms-2">
                                        Daftar Sekarang
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Box Tata Cara Mendaftar (Setengah Layar) -->
            <div class="col-md-6">
                <div class="info-box">
                    <h3>Tata Cara Mendaftar</h3>
                    <ol>
                        <li>Pilih jenis kelas yang sesuai dengan kebutuhan Anda.</li>
                        <li>Klik tombol <strong>Detail Kelas</strong> untuk melihat informasi lebih lanjut.</li>
                        <li>Jika sudah yakin, klik tombol <strong>Daftar Sekarang</strong> untuk mengisi formulir pendaftaran.</li>
                        <li>Isi formulir pendaftaran dengan lengkap dan benar.</li>
                        <li>Submit formulir dan tunggu konfirmasi dari pihak sekolah.</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Modal Kelas Madin -->
        <div class="modal fade" id="kelasMadinModal" tabindex="-1" aria-labelledby="kelasMadinModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kelasMadinModalLabel">Kelas Madin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kelas Madin adalah kelas yang dirancang untuk siswa yang ingin mempelajari ilmu agama dan bahasa Arab.</p>
                        <p>Kelas ini akan membantu siswa memahami dasar-dasar ilmu agama dan bahasa Arab, serta membantu mereka mengembangkan kemampuan berbicara dan menulis dalam bahasa Arab.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="kelasTKModal" tabindex="-1" aria-labelledby="kelasTKModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kelasTKModalLabel">Kelas TK</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kelas TK adalah kelas yang dirancang untuk siswa yang ingin mempelajari dasar-dasar ilmu pengetahuan dan keterampilan.</p>
                        <p>Kelas ini akan membantu siswa memahami dasar-dasar ilmu pengetahuan dan keterampilan, serta membantu mereka mengembangkan kemampuan berbicara dan menulis.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="kelasBalitaModal" tabindex="-1" aria-labelledby="kelasBalitaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="kelasBalitaModalLabel">Kelas Balita</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Kelas Balita adalah kelas yang dirancang untuk siswa yang ingin mempelajari dasar-dasar ilmu pengetahuan dan keterampilan.</p>
                        <p>Kelas ini akan membantu siswa memahami dasar-dasar ilmu pengetahuan dan keterampilan, serta membantu mereka mengembangkan kemampuan berbicara dan menulis.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Siswa - RUTABA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center">Data Siswa yang Telah Mendaftar</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Siswa</th>
                    <th>No HP</th>
                    <th>Alamat</th>
                    <th>Pas Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Baca file data_siswa.txt
                $file_siswa = "adin/data_siswa.txt";
                if (file_exists($file_siswa)) {
                    $data_siswa = file_get_contents($file_siswa);
                    $entries = explode("\n\n", $data_siswa); // Pisahkan setiap entri siswa
                    $no = 1;

                    foreach ($entries as $entry) {
                        if (trim($entry) != "") {
                            $lines = explode("\n", $entry);
                            $nama = str_replace("Nama: ", "", $lines[0]);
                            $no_hp = str_replace("No HP: ", "", $lines[1]);
                            $alamat = str_replace("Alamat: ", "", $lines[2]);
                            $pas_foto = str_replace("Pas Foto: ", "", $lines[3]);

                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$nama}</td>
                                    <td>{$no_hp}</td>
                                    <td>{$alamat}</td>
                                    <td><img src='uploads/{$pas_foto}' width='100' height='100'></td>
                                  </tr>";
                            $no++;
                        }
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>Tidak ada data siswa.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024 RUTABA. Semua hak dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
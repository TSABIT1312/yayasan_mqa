<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lihat Data Kontak - RUTABA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <div class="container mt-5">
        <h1 class="text-center">Data Kontak yang Telah Dikirim</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Baca file data_kontak.txt di folder admin
                $file_kontak = "admin/data_kontak.txt";
                if (file_exists($file_kontak)) {
                    $data_kontak = file_get_contents($file_kontak);
                    $entries = explode("\n\n", $data_kontak); // Pisahkan setiap entri kontak
                    $no = 1;

                    foreach ($entries as $entry) {
                        if (trim($entry) != "") {
                            $lines = explode("\n", $entry);
                            $nama = str_replace("Nama: ", "", $lines[0]);
                            $email = str_replace("Email: ", "", $lines[1]);
                            $pesan = str_replace("Pesan: ", "", $lines[2]);

                            echo "<tr>
                                    <td>{$no}</td>
                                    <td>{$nama}</td>
                                    <td>{$email}</td>
                                    <td>{$pesan}</td>
                                  </tr>";
                            $no++;
                        }
                    }
                } else {
                    echo "<tr><td colspan='4' class='text-center'>Tidak ada data kontak.</td></tr>";
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
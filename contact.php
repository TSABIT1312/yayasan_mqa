<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - RUTABA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
</head>
<body>
    <?php include 'navbar.php'; ?> <!-- Memanggil file navbar -->

    <div class="container mt-5">
        <h1 class="text-center">Kontak Kami</h1>
        <p class="text-center">Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, silakan hubungi kami melalui formulir di bawah ini.</p>

        <form>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Pesan</label>
                <textarea class="form-control" id="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <h2 class="mt-5">Informasi Kontak</h2>
        <p><strong>Alamat:</strong> Jl Nurjasin,RT04/RW05 Banteran,Sumbang,Banyumas</p>
        <p><strong>Telepon:</strong> (021) 123-4567</p>
        <p><strong>Email:</strong> info@rutaba.sch.id</p>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024. Semua hak dilindungi.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Bootstrap JS -->
    <script src="script.js"></script>
</body>
</html>
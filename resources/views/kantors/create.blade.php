<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kantor</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Kantor</h1>

        <form action="{{ route('kantors.store') }}" method="POST">
            @csrf

            <!-- Form input nama kantor -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Kantor</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kantor" required>
            </div>

            <!-- Form input alamat kantor -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat Kantor</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat Kantor" required>
            </div>

            <!-- Tombol simpan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            
            <!-- Tombol kembali ke daftar pegawai -->
            <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali ke Daftar Pegawai</a>
        </form>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

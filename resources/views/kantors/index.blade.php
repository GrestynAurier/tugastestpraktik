<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kantor</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Kantor</h1>

        <!-- Tombol untuk kembali ke halaman Daftar Pegawai -->
        <a href="{{ route('pegawais.index') }}" class="btn btn-secondary mb-3">Kembali ke Daftar Pegawai</a>

        <!-- Tombol untuk menambah kantor baru -->
        <a href="{{ route('kantors.create') }}" class="btn btn-primary mb-3">Tambah Kantor</a>

        <ul class="list-group">
            @foreach ($kantors as $kantor)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $kantor->nama }} - {{ $kantor->alamat }}
                    <div>
                        <a href="{{ route('kantors.edit', $kantor->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('kantors.destroy', $kantor->id) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kantor ini?')">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>

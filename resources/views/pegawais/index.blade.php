<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Pegawai</h1>

        <!-- Pesan sukses setelah aksi CRUD -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Tombol untuk menambahkan pegawai baru -->
        <div class="d-flex justify-content-between mb-3">
            <a href="{{ route('pegawais.create') }}" class="btn btn-primary">Tambah Pegawai</a>

            <!-- Tombol untuk menambahkan kantor baru -->
            <a href="{{ route('kantors.create') }}" class="btn btn-secondary">Tambah Kantor</a>
        </div>

        <!-- Tabel untuk menampilkan data pegawai -->
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Kantor</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pegawais as $pegawai)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pegawai->nama }}</td>
                        <td>{{ $pegawai->email }}</td>
                        <td>{{ $pegawai->kantor->nama }}</td>
                        <td>
                            <!-- Tombol untuk edit pegawai -->
                            <a href="{{ route('pegawais.edit', $pegawai->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <!-- Tombol untuk hapus pegawai -->
                            <form action="{{ route('pegawais.destroy', $pegawai->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada pegawai yang terdaftar.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

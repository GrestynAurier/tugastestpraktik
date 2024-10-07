<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Pegawai</h1>

        <!-- Menampilkan error validasi -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pegawais.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pegawai</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" placeholder="Nama Pegawai">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email Pegawai</label>
                <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Email Pegawai">
            </div>

            <div class="mb-3">
                <label for="kantor_id" class="form-label">Kantor</label>
                <select name="kantor_id" class="form-select" id="kantor_id">
                    <option selected disabled>Pilih Kantor</option>
                    @foreach($kantors as $kantor)
                        <option value="{{ $kantor->id }}" {{ old('kantor_id') == $kantor->id ? 'selected' : '' }}>
                            {{ $kantor->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('pegawais.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

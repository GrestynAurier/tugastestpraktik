<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Edit Kantor</h1>

<form action="{{ route('kantors.update', $kantor->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <label for="nama">Nama Kantor:</label>
    <input type="text" name="nama" value="{{ $kantor->nama }}" placeholder="Nama Kantor">
    
    <label for="alamat">Alamat Kantor:</label>
    <input type="text" name="alamat" value="{{ $kantor->alamat }}" placeholder="Alamat Kantor">
    
    <button type="submit">Update</button>
</form>

</body>
</html>
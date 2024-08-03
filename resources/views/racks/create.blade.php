<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Rak Baru</title>
</head>

<body>
    <div>
        <h2>Tambah Rak Baru</h2>
        <form action="{{ route('racks.store') }}" method="POST">
            @csrf

            <div>
                <label for="name">Nama Rak:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label for="location">Lokasi Rak:</label>
                <input type="text" id="location" name="location" required>
            </div>

            <div>
                <button type="submit">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>

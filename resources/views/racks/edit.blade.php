<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Rak</title>
</head>

<body>
    <div>
        <h2>Edit Rak</h2>
        <form action="{{ route('racks.update', $rack->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nama">Nama Rak:</label>
                <input type="text" id="nama" name="nama" value="{{ $rack->nama }}" required>
            </div>
            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>

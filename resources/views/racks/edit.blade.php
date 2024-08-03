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
                <label for="name">Nama Rak:</label>
                <input type="text" id="name" name="name" value="{{ $rack->name }}" required>
            </div>

            <div>
                <label for="location">Lokasi Rak:</label>
                <input type="text" id="location" name="location" value="{{ $rack->location }}" required>
            </div>

            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>

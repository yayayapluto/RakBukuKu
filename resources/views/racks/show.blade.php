<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Rak</title>
</head>

<body>
    <div>
        <h2>Detail Rak</h2>

        <div>
            <strong>Nama Rak:</strong>
            <p>{{ $rack->name }}</p>
        </div>

        <div>
            <strong>Lokasi Rak:</strong>
            <p>{{ $rack->location }}</p>
        </div>
    </div>
</body>

</html>

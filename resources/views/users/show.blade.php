<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>

<body>
    <div>
        <h2>User Details</h2>

        <div>
            <strong>Nama:</strong>
            <p>{{ $data->nama }}</p>
        </div>

        <div>
            <strong>Email:</strong>
            <p>{{ $data->email }}</p>
        </div>

        <div>
            <strong>Level:</strong>
            <p>{{ ucfirst($data->level) }}</p>
        </div>

        <div>
            <strong>Tempat Lahir:</strong>
            <p>{{ $data->tempat_lahir }}</p>
        </div>

        <div>
            <strong>Tanggal Lahir:</strong>
            <p>{{ $data->tanggal_lahir }}</p>
        </div>

        <div>
            <strong>Jenis Kelamin:</strong>
            <p>{{ ucfirst($data->jenis_kelamin) }}</p>
        </div>

        <div>
            <strong>Alamat:</strong>
            <p>{{ $data->alamat }}</p>
        </div>

        <div>
            <strong>Telepon:</strong>
            <p>{{ $data->telepon }}</p>
        </div>

        <div>
            <strong>Tanggal Bergabung:</strong>
            <p>{{ $data->tanggal_bergabung }}</p>
        </div>

        <div>
            <strong>Foto:</strong>
            <p>{{ $data->foto }}</p>
        </div>
    </div>
</body>

</html>

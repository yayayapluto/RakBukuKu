<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow Details</title>
</head>
<body>
    <div>
        <h2>Borrow Details</h2>

        <div>
            <strong>ID Anggota:</strong>
            <p>{{ $data->id_anggota }}</p>
        </div>

        <div>
            <strong>ID Buku:</strong>
            <p>{{ $data->id_buku }}</p>
        </div>

        <div>
            <strong>Status:</strong>
            <p>{{ ucfirst($data->status) }}</p>
        </div>

        <div>
            <strong>Tanggal Pinjam:</strong>
            <p>{{ $data->tgl_pinjam }}</p>
        </div>

        <div>
            <strong>Lama Pinjam:</strong>
            <p>{{ $data->lama_pinjam }} days</p>
        </div>

        <div>
            <strong>Tanggal Balik:</strong>
            <p>{{ $data->tgl_balik }}</p>
        </div>

        <div>
            <strong>Tanggal Kembali:</strong>
            <p>{{ $data->tgl_kembali }}</p>
        </div>

        <div>
            <strong>Foto:</strong>
            <p>{{ $data->foto }}</p>
        </div>
    </div>
</body>
</html>

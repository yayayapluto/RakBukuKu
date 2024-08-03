<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku</title>
</head>

<body>
    <div>
        <h2>Detail Buku</h2>

        <div>
            <strong>Judul:</strong>
            <p>{{ $book->judul }}</p>
        </div>

        <div>
            <strong>Pengarang:</strong>
            <p>{{ $book->pengarang }}</p>
        </div>

        <div>
            <strong>Penerbit:</strong>
            <p>{{ $book->penerbit }}</p>
        </div>

        <div>
            <strong>Tahun Terbit:</strong>
            <p>{{ $book->thn_terbit }}</p>
        </div>

        <div>
            <strong>Kategori:</strong>
            <p>{{ $book->kategori->nama }}</p>
        </div>

        <div>
            <strong>Rak:</strong>
            <p>{{ $book->rak->nama }}</p>
        </div>

        <div>
            <strong>ISBN:</strong>
            <p>{{ $book->isbn }}</p>
        </div>

        <div>
            <strong>Sampul:</strong>
            <p>{{ $book->sampul }}</p>
        </div>

        <div>
            <strong>Lampiran:</strong>
            <p>{{ $book->lampiran }}</p>
        </div>

        <div>
            <strong>Isi:</strong>
            <p>{{ $book->isi }}</p>
        </div>

        <div>
            <strong>Stok:</strong>
            <p>{{ $book->stok }}</p>
        </div>

        <div>
            <strong>Tanggal Masuk:</strong>
            <p>{{ $book->tgl_masuk }}</p>
        </div>
    </div>
</body>

</html>

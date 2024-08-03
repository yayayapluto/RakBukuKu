<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>

<body>
    <div>
        <h2>Daftar Buku</h2>

        <a href="{{ route('books.create') }}">Tambah Buku Baru</a>

        <table border="1" cellspacing="0" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Rak</th>
                    <th>Sampul</th>
                    <th>ISBN</th>
                    <th>Lampiran</th>
                    <th>Penerbit</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    <th>Isi</th>
                    <th>Stok</th>
                    <th>Tanggal Masuk</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->kategori->nama }}</td>
                        <td>{{ $book->rak->nama }}</td>
                        <td>{{ $book->sampul }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->lampiran }}</td>
                        <td>{{ $book->penerbit }}</td>
                        <td>{{ $book->pengarang }}</td>
                        <td>{{ $book->thn_terbit }}</td>
                        <td>{{ $book->isi }}</td>
                        <td>{{ $book->stok }}</td>
                        <td>{{ $book->tgl_masuk }}</td>
                        <td>
                            <a href="{{ route('books.show', $book->id) }}">Lihat</a>
                            <a href="{{ route('books.edit', $book->id) }}">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>

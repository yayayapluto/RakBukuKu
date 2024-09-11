<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Informasi Buku</title>
</head>

<body>
    <div>
        <h2>Update Informasi Buku</h2>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="buku_id">ID Buku:</label>
                <input type="text" id="buku_id" name="buku_id" value="{{ $book->buku_id }}" required>
            </div>

            <div>
                <label for="id_kategori">Kategori:</label>
                <select id="id_kategori" name="id_kategori" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->id_kategori == $category->id ? 'selected' : '' }}>{{ $category->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="id_rak">Rak:</label>
                <select id="id_rak" name="id_rak" required>
                    @foreach($racks as $rack)
                        <option value="{{ $rack->id }}" {{ $book->id_rak == $rack->id ? 'selected' : '' }}>{{ $rack->nama }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label for="sampul">Sampul:</label>
                <input type="text" id="sampul" name="sampul" value="{{ $book->sampul }}">
            </div>

            <div>
                <label for="isbn">ISBN:</label>
                <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}">
            </div>

            <div>
                <label for="lampiran">Lampiran:</label>
                <input type="text" id="lampiran" name="lampiran" value="{{ $book->lampiran }}">
            </div>

            <div>
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" value="{{ $book->judul }}">
            </div>

            <div>
                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" value="{{ $book->penerbit }}">
            </div>

            <div>
                <label for="pengarang">Pengarang:</label>
                <input type="text" id="pengarang" name="pengarang" value="{{ $book->pengarang }}">
            </div>

            <div>
                <label for="thn_terbit">Tahun Terbit:</label>
                <input type="text" id="thn_terbit" name="thn_terbit" value="{{ $book->thn_terbit }}">
            </div>

            <div>
                <label for="isi">Isi:</label>
                <textarea id="isi" name="isi">{{ $book->isi }}</textarea>
            </div>

            <div>
                <label for="stok">Stok:</label>
                <input type="number" id="stok" name="stok" value="{{ $book->stok }}">
            </div>

            <div>
                <label for="tgl_masuk">Tanggal Masuk:</label>
                <input type="date" id="tgl_masuk" name="tgl_masuk" value="{{ $book->tgl_masuk }}">
            </div>

            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>

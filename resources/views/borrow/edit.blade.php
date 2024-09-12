<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Borrow Information</title>
</head>
<body>
    <div>
        <h2>Update Borrow Information</h2>
        <form action="{{ route('borrow.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="id_anggota">ID Anggota:</label>
                <input type="text" id="id_anggota" name="id_anggota" value="{{ $data->id_anggota }}" required>
            </div>

            <div>
                <label for="id_buku">ID Buku:</label>
                <input type="text" id="id_buku" name="id_buku" value="{{ $data->id_buku }}" required>
            </div>

            <div>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="dipinjam" {{ $data->status == 'dipinjam' ? 'selected' : '' }}>dipinjam</option>
                    <option value="dikembalikan" {{ $data->status == 'dikembalikan' ? 'selected' : '' }}>dikembalikan</option>
                </select>
            </div>

            <div>
                <label for="tgl_pinjam">Tanggal Pinjam:</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="{{ $data->tgl_pinjam }}" required>
            </div>

            <div>
                <label for="lama_pinjam">Lama Pinjam (days):</label>
                <input type="number" id="lama_pinjam" name="lama_pinjam" value="{{ $data->lama_pinjam }}" required>
            </div>

            <div>
                <label for="tgl_balik">Tanggal Balik:</label>
                <input type="date" id="tgl_balik" name="tgl_balik" value="{{ $data->tgl_balik }}" required>
            </div>

            <div>
                <label for="tgl_kembali">Tanggal Kembali:</label>
                <input type="date" id="tgl_kembali" name="tgl_kembali" value="{{ $data->tgl_kembali }}">
            </div>

            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>

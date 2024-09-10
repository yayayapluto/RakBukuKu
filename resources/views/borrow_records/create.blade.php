<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Borrow</title>
</head>
<body>
    <x-alerts />

    <div>
        <h2>Create New Borrow</h2>
        <form action="{{ route('borrow.store') }}" method="POST">
            @csrf
            @method('POST')

            <div>
                <label for="id_anggota">ID Anggota:</label>
                <input type="text" id="id_anggota" name="id_anggota" required>
            </div>

            <div>
                <label for="id_buku">ID Buku:</label>
                <input type="text" id="id_buku" name="id_buku" required>
            </div>

            <div>
                <label for="status">Status:</label>
                <select id="status" name="status">
                    <option value="pending">Pending</option>
                    <option value="approved">Approved</option>
                    <option value="returned">Returned</option>
                </select>
            </div>

            <div>
                <label for="tgl_pinjam">Tanggal Pinjam:</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" required>
            </div>

            <div>
                <label for="lama_pinjam">Lama Pinjam (days):</label>
                <input type="number" id="lama_pinjam" name="lama_pinjam" required>
            </div>

            <div>
                <label for="tgl_balik">Tanggal Balik:</label>
                <input type="date" id="tgl_balik" name="tgl_balik" required>
            </div>

            <div>
                <label for="tgl_kembali">Tanggal Kembali:</label>
                <input type="date" id="tgl_kembali" name="tgl_kembali">
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>
</html>

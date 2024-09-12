<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrow List</title>
</head>
<body>
    <div>
        <h2>Borrow List</h2>
        <a href="{{ route('borrow.create') }}">Create New Borrow</a>

        <table border="1" cellspacing="0" cellpadding="8">
            <thead>
                <tr>
                    <th>Pinjam ID</th>
                    <th>ID Anggota</th>
                    <th>ID Buku</th>
                    <th>Status</th>
                    <th>Tanggal Pinjam</th>
                    <th>Lama Pinjam</th>
                    <th>Tanggal Balik</th>
                    <th>Tanggal Kembali</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->pinjam_id }}</td>
                        <td>{{ $item->id_anggota }}</td>
                        <td>{{ $item->id_buku }}</td>
                        <td>{{ ucfirst($item->status) }}</td>
                        <td>{{ $item->tgl_pinjam }}</td>
                        <td>{{ $item->lama_pinjam }}</td>
                        <td>{{ $item->tgl_balik }}</td>
                        <td>{{ $item->tgl_kembali }}</td>
                        <td>
                            <a href="{{ route('borrow.show', $item->id) }}">View</a>
                            <a href="{{ route('borrow.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('borrow.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Rak</title>
</head>

<body>
    <div>
        <h2>Daftar Rak</h2>

        <a href="{{ route('racks.create') }}">Tambah Rak Baru</a>

        <table border="1" cellspacing="0" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $rack)
                    <tr>
                        <td>{{ $rack->id }}</td>
                        <td>{{ $rack->nama }}</td>
                        <td>
                            <a href="{{ route('racks.show', $rack->id) }}">Lihat</a>
                            <a href="{{ route('racks.edit', $rack->id) }}">Edit</a>
                            <form action="{{ route('racks.destroy', $rack->id) }}" method="POST" style="display:inline;">
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

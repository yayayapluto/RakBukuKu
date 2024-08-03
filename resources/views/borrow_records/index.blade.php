<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Index</title>
</head>

<body>
    <div>
        <h2>Users List</h2>

        <a href="{{ route('users.create') }}">Create New User</a>

        <table border="1" cellspacing="0" cellpadding="8">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Tanggal Bergabung</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ ucfirst($item->level) }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ ucfirst($item->jenis_kelamin) }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->telepon }}</td>
                        <td>{{ $item->tanggal_bergabung }}</td>
                        <td>{{ $item->foto }}</td>
                        <td>
                            <a href="{{ route('users.show', $item->id) }}">View</a>
                            <a href="{{ route('users.edit', $item->id) }}">Edit</a>
                            <form action="{{ route('users.destroy', $item->id) }}" method="POST" style="display:inline;">
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

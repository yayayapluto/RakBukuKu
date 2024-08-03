<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Information</title>
</head>

<body>
    <div>
        <h2>Update User Information</h2>
        <form action="{{ route('users.update', $data->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="{{ $data->nama }}" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ $data->email }}">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $data->tempat_lahir }}">
            </div>

            <div>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
            </div>

            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="pria" {{ $data->jenis_kelamin == 'pria' ? 'selected' : '' }}>Pria</option>
                    <option value="wanita" {{ $data->jenis_kelamin == 'wanita' ? 'selected' : '' }}>Wanita</option>
                </select>
            </div>

            <div>
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat">{{ $data->alamat }}</textarea>
            </div>

            <div>
                <label for="telepon">Telepon:</label>
                <input type="text" id="telepon" name="telepon" maxlength="25" value="{{ $data->telepon }}">
            </div>

            <div>
                <label for="foto">Foto:</label>
                <textarea id="foto" name="foto">{{ $data->foto }}</textarea>
            </div>

            <div>
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
</body>

</html>

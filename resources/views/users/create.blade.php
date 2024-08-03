<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
</head>

<body>
    <x-alerts />

    <div>
        <h2>Create New User</h2>
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>

            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div>
                <label for="tempat_lahir">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir">
            </div>

            <div>
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir">
            </div>

            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
            </div>

            <div>
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat"></textarea>
            </div>

            <div>
                <label for="telepon">Telepon:</label>
                <input type="text" id="telepon" name="telepon" maxlength="25">
            </div>

            <div>
                <label for="foto">Foto:</label>
                <input type="file" accept="image/*" id="foto" name="foto"></input>
            </div>

            <div>
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>

</html>

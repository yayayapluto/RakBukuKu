<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
</head>

<body>
    <x-alerts />

    {{-- Register form start --}}
    <form action="{{route('do_register')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>

        <label for="password">Kata Sandi:</label>
        <input type="password" id="password" name="password" required>
        <br><br>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir">
        <br><br>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir">
        <br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin">
            <option value="">--Pilih--</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select>
        <br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat"></textarea>
        <br><br>

        <label for="telepon">Telepon:</label>
        <input type="tel" id="telepon" name="telepon" maxlength="25">
        <br><br>

        <label for="foto">Foto:</label>
        <input id="foto" name="foto" type="file"></input>
        <br><br>

        <button type="submit">Daftar</button>
    </form>
    {{-- Register form end --}}
</body>

</html>

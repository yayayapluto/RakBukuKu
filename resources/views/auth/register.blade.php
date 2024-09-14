<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
  
    <div class="flex items-center justify-center h-full">
    <img src="{{asset('storage/logoo.svg')}}" alt="Logo" class="w-20 h-20">
</div>

<div class="mt-4">
    <h1 class="text-center text-lg text-blue font-semibold">Daftar</h1>
</div>

<!-- Register form start -->
<form action="{{route('do_register')}}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto bg-white p-6 rounded-lg grid grid-cols-2 ">
    @csrf
    @method('POST')

    <div class="mb-3 mr-2">
        <label for="nama" class="block text-md font-medium text-blue">Nama:</label>
        <input type="text" id="nama" name="nama" required class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="mb-3 mr-2">
        <label for="email" class="block text-md font-medium text-blue">Email:</label>
        <input type="email" id="email" name="email" class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="mb-3 mr-2">
        <label for="password" class="block text-md font-medium text-blue">Kata Sandi:</label>
        <input type="password" id="password" name="password" required class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="mb-3 ">
        <label for="tempat_lahir" class="block text-md font-medium text-blue">Tempat Lahir:</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir" class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="mb-3 mr-2">
        <label for="tanggal_lahir" class="block text-md font-medium text-blue">Tanggal Lahir:</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="mb-3">
        <label for="jenis_kelamin" class="block text-md font-medium text-blue">Jenis Kelamin:</label>
        <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
            <option value="">--Pilih--</option>
            <option value="pria">Pria</option>
            <option value="wanita">Wanita</option>
        </select>
    </div>

    <div class="mb-3 mr-2">
        <label for="alamat" class="block text-md font-medium text-blue">Alamat:</label>
        <textarea id="alamat" name="alamat" class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm"></textarea>
    </div>

    <div class="mb-3 mr-2">
        <label for="telepon" class="block text-md font-medium text-blue">Telepon:</label>
        <input type="tel" id="telepon" name="telepon" maxlength="25" class="mt-1 block w-full px-2 py-1 border border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="mb-3 mr-2">
        <label for="foto" class="block text-md font-medium text-blue">Foto:</label>
        <input id="foto" name="foto" type="file" class="mt-1 block w-full text-md text-gray-500">
    </div>

    <div class="text-center">
        <button type="submit" class="inline-flex justify-center w-full px-2 py-1 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-blue hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Daftar
        </button>
    </div>


</form>

    <div class="text-center mt-4">
        <p class="text-xs">Sudah memiliki akun? <a href="{{route('login')}} " class="text-blue">masuk</a></p>
    </div>


    {{-- Register form end --}}
</body>

</html>

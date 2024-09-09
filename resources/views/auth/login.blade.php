<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="font-poppins">
<x-alerts />



{{-- Login form start --}}
<form action="{{route('do_login')}}" method="post" class="max-w-md mx-auto mt-32">
    @csrf
    @method('POST')

    <div class="flex items-center justify-center h-full">
    <img src="{{asset('storage/logoo.svg')}}" alt="" class="w-20 h-20">
    </div>

    <div class="pt-8">
        <h1 class="text-center text-lg text-blue font-semibold">Login</h1>
    </div>

    <div class="flex flex-col pt-3">
        <label for="nama" class="text-blue font-normal">Nama Pengguna</label>
        <input type="text" name="nama" placeholder="..." class="px-3 py-2 border-black rounded-md shadow-sm focus:outline-none focus:ring-black focus:border-black bg-register text-sm">
    </div>

    <div class="flex flex-col">
        <label for="password" class="text-blue font-normal">Password</label>
        <input type="password" name="password" placeholder="..." class="border rounded-md px-3 py-2 bg-register">
    </div>

    <div class="mt-3 ">
        <button type="submit" class="inline-flex justify-center w-full px-3 py-2 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-blue hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
    </div>

    <div class="text-center mt-12">
        <p class="text-md">tidak memiliki akun? <a href="{{route('register')}} " class="text-blue">Daftar</a></p>
    </div>
</form>
{{-- Login form end --}}
</body>
</html>

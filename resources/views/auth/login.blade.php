<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-alerts />

{{-- Login form start --}}
<form action="{{route('do_login')}}" method="post">
    @csrf
    @method('POST')
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" placeholder="...">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="...">
    </div>
    <div>
        <input type="submit" value="Login">
    </div>
</form>
{{-- Login form end --}}
</body>
</html>

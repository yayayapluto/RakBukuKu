<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <x-alerts />
    @foreach ($data['thumbnail'] as $d)
    <p>{{$d}}</p>
    @endforeach
    <br><br>
    @foreach ($data['kategori'] as $d)
    <p>{{$d}}</p>
    @endforeach
    <br><br>
    @foreach ($data['buku'] as $d)
    <p>{{$d}}</p>
    @endforeach
    <br><br>
</body>
</html>

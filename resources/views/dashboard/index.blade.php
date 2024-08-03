@php
    use App\Models\User;
    use App\Models\Book;
    use App\Models\Rack;
    use App\Models\Category;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <p>Total Anggota     : {{User::count()}}</p>
    <p>Total Buku        : {{Book::count()}}</p>
    <p>Total Kategori    : {{Category::count()}}</p>
    <p>Total Rak         : {{Rack::count()}}</p>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
</head>
<body>
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama">Name:</label>
        <input type="text" id="nama" name="nama" value="{{ $category->nama }}" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>

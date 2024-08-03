<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Category</title>
</head>
<body>
    <h1>Category Details</h1>
    <p>ID: {{ $category->id }}</p>
    <p>Name: {{ $category->nama }}</p>
    <a href="{{ route('categories.index') }}">Back to Categories</a>
</body>
</html>

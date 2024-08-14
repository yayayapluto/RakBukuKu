<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Landing Page</title>
</head>
<body class="bg-Body font-poppins">


    <!-- Navigation -->
    <!-- (Your existing navigation code here) -->

    <!-- Main Content -->
    <div class="my-8 mx-auto max-w-6xl rounded-lg overflow-hidden shadow-lg">
        <!-- Example banner or slider -->
        <img src="{{ asset('storage/thumbnail/rack.jpeg') }}" alt="Banner Image" class="w-full h-auto object-cover">
    </div>

    <!-- Categories -->
    <section class="flex justify-center items-start gap-4">
        <div class="max-w-[600px] w-full bg-white rounded-xl mt-12 shadow-lg">
            <div class="flex justify-between w-full px-6 pt-4 mb-5">
                <p class="font-semibold text-xs text-center w-full">Kategori Pilihan</p>
                <a href="{{ route('categories') }}" class="text-xs font-medium text-blue">Selebihnya</a>
            </div>
            <div class="grid grid-cols-4 gap-4 px-6 mb-8 text-center">
                @foreach($categories as $category)
                    <div class="bg-transparent p-1 rounded-full border border-blue text-sm">
                        <p class="flex items-center justify-center">{{ $category->nama }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Most Borrowed Users -->
    <section class="my-8 mx-auto max-w-6xl rounded-lg overflow-hidden shadow-lg">
        <h2 class="text-xl font-semibold px-6 py-4">Most Borrowed Users</h2>
        <ul class="px-6 py-4 list-disc">
            @foreach($mostBorrowedUsers as $user)
                <li>User ID: {{ $user->id_anggota }} (Total Borrowed: {{ $user->borrowed_count }})</li>
            @endforeach
        </ul>
    </section>

    <!-- Books by Category -->
    @foreach($booksByCategory as $category)
    <section class="flex justify-center items-start gap-4 mb-8">
        <div class="max-w-[1150px] w-full bg-white rounded-xl mt-12 shadow-lg">
            <div class="flex justify-between w-full px-6 pt-4 mb-5">
                <p class="font-semibold text-xs text-center">{{ $category->name }}</p>
                <a href="#" class="text-xs font-medium text-blue">Selebihnya</a>
            </div>
            <div class="grid grid-cols-5 p-4 gap-4">
                @foreach($category->books as $book)
                    <div class="w-full max-w-[190px] bg-gray-200 rounded-2xl flex flex-col items-center relative">
                        <div class="w-full h-[140px] overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('storage/'.$book->cover) }}" alt="{{ $book->judul }}" class="object-cover w-full h-full">
                            <div class="absolute inset-0 bg-transparent transition-opacity duration-300 hover:bg-blue opacity-0 hover:opacity-90 flex items-center justify-center">
                                <a href="{{ route('bookDetail', $book->id) }}" class="bg-secondcolor py-1 px-3 rounded-md text-white text-sm">Pinjam</a>
                            </div>
                        </div>
                        <div class="mt-2 mb-2 text-center">
                            <h4 class="text-sm font-semibold">{{ $book->judul }}</h4>
                            <p class="text-xs text-gray-600">{{ $book->pengarang }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endforeach

    <!-- JavaScript -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.querySelector('[data-collapse-toggle]');
            const navbarSearch = document.getElementById('navbar-search');

            toggleButton.addEventListener('click', () => {
                navbarSearch.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>

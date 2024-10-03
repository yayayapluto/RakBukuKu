<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Landing Page</title>
</head>
<body class="font-poppins">

    <!-- Navbar -->
    <div class="w-full bg-white shadow-lg">
        <div class="max-w-6xl mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/logoo.svg') }}" alt="Banner Image" class="w-[50px] h-[50px] object-cover">
            </div>
            
            <!-- Search Input -->
            <div class="flex-grow flex justify-center mx-4 relative">
                <div class="w-full max-w-[500px] h-[40px] bg-NavColor rounded-full border border-gray-300 flex items-center pl-4 pr-4">
                    <svg class="h-5 w-5 text-SearchColor mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 10-14 0 7 7 0 0014 0z"/>
                    </svg>
                    <input type="text" id="searchInput" placeholder="Search..." class="bg-transparent flex-grow h-full border-none focus:ring-0 focus:outline-none" oninput="performSearch()">
                </div>
            </div>

            <!-- Account Icon -->
            <div class="flex-shrink-0">
                <a href="{{route('login')}}"><svg class="w-[50px] h-[50px] text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"></path>
                </svg>
                </a>
            </div>
        </div>
    </div>

    <!-- Search Results -->
    <div id="searchResults" class="mt-4 mx-auto max-w-6xl p-4 bg-white shadow-lg rounded-lg hidden">
        <!-- Search results will be displayed here -->
    </div>

    <div class="my-8 mx-auto max-w-6xl flex gap-8 content-section">
        <!-- Section Pertama -->
        <section class="flex-1 bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="max-w-[600px] w-full rounded-xl">
                <div class="flex items-center justify-between w-full px-6 pt-4 mb-5">
                    <p class="font-semibold text-xs">Kategori Pilihan</p>
                    <a href="{{ route('categories') }}" class="text-xs font-medium text-blue">Selebihnya </a>
                </div>  

                <div class="grid grid-cols-4 gap-4 px-6 mb-8 text-center">
                    @foreach($categories as $category)
                        <div class="bg-transparent p-1 rounded-full border border-blue text-sm">
                            <a href="{{route('categories.index')}}"><p class="flex items-center justify-center">{{ $category->nama }}</p></a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Kedua -->
        <section class="flex-1 bg-white rounded-lg overflow-hidden shadow-lg content-section">
            <div class="p-4">
                <h2 class="text-xl font-semibold px-6 py-4">Most Borrowed Users</h2>
                <ul class="px-6 py-4 list-disc">
                    @foreach($mostBorrowedUsers as $user)
                        <li>User ID: {{ $user->id_anggota }} (Total Borrowed: {{ $user->borrowed_count }})</li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>

    <!-- Books by Category -->
    @foreach($booksByCategory as $category)
    <section class="flex justify-center items-start gap-4 mb-8 content-section">
        <div class="max-w-[1150px] w-full ">
            <div class="flex justify-between w-full px-6 pt-4 mb-5">
                <p class="font-semibold text-xs text-center">{{ $category->name }}</p>
                <a href="#" class="text-xs font-medium text-blue">Selebihnya ></a>
            </div>
            <div class="grid grid-cols-5 p-4 gap-4">
                @foreach($category->books as $book)
                    <div class="w-full max-w-[190px] bg-gray-200 rounded-2xl flex flex-col items-center relative">
                        <div class="w-full h-[140px] overflow-hidden rounded-2xl relative">
                            <img src="{{ asset('storage/'.$book->cover) }}" alt="{{ $book->judul }}" class="object-cover w-full h-full id="img">
                            <div class="absolute inset-0 bg-transparent transition-opacity duration-300 opacity-0 hover:opacity-90 flex items-center justify-center">
                                <div class="">
                                    <p class="text-md">Detail</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2 mb-2 ">
                            <h4 class="text-sm font-semibold text-start text-blue">{{ $book->judul }}</h4>
                            <p class="text-xs text-black text-start">{{ $book->pengarang }}</p>
                        <div class="text-center  border-blue  ">
                            <a href="{{ route('bookDetail', $book->id) }}" class="bg-secondcolor px-12 rounded-full bg-white text-blue text-sm">Buka</a>
                        </div>

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
        // Move contentSections to global scope
        const contentSections = document.querySelectorAll('.content-section');
        const img =document.getElementById('img')

        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.querySelector('[data-collapse-toggle]');
            const navbarSearch = document.getElementById('navbar-search');

            if (toggleButton) {
                toggleButton.addEventListener('click', () => {
                    navbarSearch.classList.toggle('hidden');
                });
            }
        });

        function performSearch() {
            const query = document.getElementById('searchInput').value;
            const searchResults = document.getElementById('searchResults');

            // Check if query is empty
            if (!query.trim()) {
                searchResults.innerHTML = '';
                searchResults.classList.add('hidden');
                contentSections.forEach(section => section.classList.remove('hidden'));
                return;
            }

            contentSections.forEach(section => section.classList.add('hidden'));
            searchResults.classList.remove('hidden'); // Show search results container

            fetch(`/pencarian/${encodeURIComponent(query)}`)
                .then(response => response.text())
                .then(data => {
                    searchResults.innerHTML = data;
                })
                .catch(error => console.error('Error fetching search results:', error));
        }



    </script>
</body>
</html>

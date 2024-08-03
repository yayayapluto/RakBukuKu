<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Search Results</title>
</head>
<body class="bg-gray-100 font-poppins">

    <!-- Navbar -->
    <nav class="bg-white h-16 rounded-b-2xl shadow-md">
        <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 h-full">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="{{asset('storage/icon.svg')}}" class="h-12 w-12 mr-3" alt="Logo" />
            </a>

            <!-- Desktop Search -->
            <div class="relative hidden md:flex items-center flex-grow justify-end">
                <div class="relative w-64">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search">
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>

                <!-- Mobile Menu Button -->
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Search Input -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                </div>
                <a href="#"><img src="{{ asset('storage/icon.svg') }}" alt="tes" class="pl-8"></a>
            </div>
        </div>
    </nav>

    <!-- Search Results Section -->
    <main class="max-w-7xl w-full mx-auto mt-12 bg-white rounded-xl shadow-md p-8">
        <!-- Search Results -->
        <h2 class="font-semibold text-lg mb-5">Search Results</h2>
        <b>Total pencarian ditemukan: {{count($data)}}</b>
        <ul class="space-y-4">
            @forelse($data as $buku)
                <li class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <h3 class="font-medium text-gray-900">{{ $buku->judul }}</h3>
                    <p class="text-gray-700">Pengarang: {{ $buku->pengarang }}</p>
                    <p class="text-gray-700">Penerbit: {{ $buku->penerbit }}</p>
                    <p class="text-gray-700">Tahun Terbit: {{ $buku->thn_terbit }}</p>
                    <p class="text-gray-700">ISBN: {{ $buku->isbn }}</p>
                    <p class="text-gray-700">Stok: {{ $buku->stok }}</p>
                    <p class="text-gray-700">Tanggal Masuk: {{ $buku->tgl_masuk }}</p>
                </li>
            @empty
                <li class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                    <p class="text-gray-700">No results found for your query.</p>
                </li>
            @endforelse
        </ul>
    </main>
</body>
</html>

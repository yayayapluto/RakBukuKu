<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body class=" bg-Body font-poppins">
    
    <nav class="bg-white h-16 rounded-2xl">
    <div class="max-w-screen-xl flex items-center justify-between mx-auto p-4 h-full">
        <!-- Logo -->
        <a href="#" class="flex items-center">
            <img src="{{ asset('storage/gambar 2.png') }}" class="h-32 w-32 mr-3" alt="mata" /> <!-- Memperbesar ukuran logo -->
        </a>
        
        <!-- Desktop Search -->
        <div class="relative hidden md:flex items-center flex-grow justify-end">
            <div class="relative w-48"> <!-- Mengatur lebar input pencarian -->
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-1 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-secondcolor focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
            </div>
        </div>




        
        <!-- Mobile Menu Toggle -->
        <div class="flex md:order-2">
            <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>
            
            <!-- Mobile Menu Button -->
            <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
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
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                
            </div>
            <a href=""><img src="{{ asset('storage/icon.svg') }}" alt="tes" class="pl-8"></a>
        </div>
    </div>
    </nav>


    <div class="my-8 mx-auto max-w-6xl rounded-lg overflow-hidden shadow-lg">
        <div class=>
          <img src="{{ asset('storage/Rectangle2.png') }}" alt="Slide 1" class="w-full h-auto object-cover">
        </div>
    </div>


    <section class="flex justify-center items-start gap-4">

    <!-- //kategori -->
    <div class="max-w-[600px] max-h-[600px] w-full h-auto bg-white flex flex-col items-center rounded-xl mt-12">
        <div class="flex justify-between w-full px-6 pt-4 mb-5">
            <p class="font-semibold text-xs">Kategori pilihan</p>
            <a href=""><p class="text-xs font-medium text-blue">selebihnya</p></a>
        </div>

        <div class="grid grid-cols-4 gap-4 px-6 mb-8">
            @foreach($data['kategori'] as $kategori)
            <div class="bg-transparent p-1 rounded-full border border-blue text-sm">
                <p class="flex items-center justify-center">{{ $kategori->nama }}</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- //top rank -->
    <div class="max-w-[500px] max-h-[600px] w-full h-auto bg-white flex flex-col items-center rounded-xl mt-12">
        <div class="flex w-full px-6 pt-4 mb-5">
            <p class="font-semibold text-xs">Pembaca terbaik</p>
        </div>
        <div class="grid grid-cols-4 gap-24 font-semibold  mb-8 text-sm">
            <div class="">No</div>
            <div class="">Nama</div>
            <div class="">Jumlah</div>
            <div class="">Waktu</div>
        </div>
        <div class="grid grid-cols-4 gap-20 font-semibold mb-2 text-sm bg-SecondColor p-1">
            <div class="">1</div>
            <div class="">Arie</div>
            <div class="">14</div>
            <div class="">05:30:28</div>
        </div>
        <div class="grid grid-cols-4 gap-20 font-semibold mb-2 text-sm bg-PutihPucet p-1">
            <div class="">2</div>
            <div class="">Kriiting</div>
            <div class="">10</div>
            <div class="">04:30:28</div>
        </div>
                <div class="grid grid-cols-4 gap-20 font-semibold mb-2 text-sm bg-SecondColor p-1">
            <div class="">3</div>
            <div class="">Arie</div>
            <div class="">14</div>
            <div class="">05:30:28</div>
        </div>
                <div class="grid grid-cols-4 gap-20 font-semibold mb-2 text-sm bg-PutihPucet p-1">
            <div class="">4</div>
            <div class="">Kriiting</div>
            <div class="">10</div>
            <div class="">04:30:28</div>
        </div>


    </div>

    </section>

    

    <section class="flex justify-center items-start gap-4 mb-8">
    <!-- Kategori -->
    <div class="max-w-[1150px] w-full h-auto bg-white rounded-xl mt-12 shadow-lg">
        <div class="flex justify-between w-full px-6 pt-4 mb-5">
            @foreach ($data['kategori2'] as $kategori2)
                <p class="font-semibold text-xs">{{ $kategori2->nama }}</p>        
            @endforeach
            <a href="#"><p class="text-xs font-medium text-blue">Selebihnya</p></a>
        </div>

        <div class="grid grid-cols-5 p-4 gap-4">
            @foreach ($data['buku'] as $book)
            <!-- Grid container -->
            <div class="w-full max-w-[190px] max-h-[250px] bg-gray-200 rounded-2xl flex flex-col items-center relative">
                <!-- Gambar -->
                <div class="w-full h-[140px] overflow-hidden rounded-2xl relative">
                    <img src="{{asset('storage/ada.jpg')}}" alt="ada-wong" class="object-cover w-full h-full rounded-2xl transition-all duration-300">
                    
                    <!-- Hidden Button -->
                    <button class="absolute inset-0 bg-blue-600 bg-opacity-75 text-white rounded-2xl opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center invisible">
                        Detail 
                    </button>
                </div>

                <!-- Teks -->
                <div class="flex flex-col p-2">
                    <p class="text-xs text-blue pt-2">{{$book->judul}}</p>
                    <p class="text-xs pt-2">{{$book->pengarang}}</p>
                    <p class="text-xs pt-2">Stok: {{$book->stok}}</p> 
                    <div class="bg-white rounded-full p-1 border-2 border-black hover:bg-gray-200 transition-colors duration-300 flex items-center justify-center mt-2">                    
                        <button class="text-sm text-blue hover:text-blue-800 btn-blur">
                            Buka
                        </button>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>
    <section class="flex justify-center items-start gap-4 mb-8">
    <!-- Kategori -->
    <div class="max-w-[1150px] w-full h-auto bg-white rounded-xl mt-12 shadow-lg">
        <div class="flex justify-between w-full px-6 pt-4 mb-5">
            @foreach ($data['kategori2'] as $kategori2)
                <p class="font-semibold text-xs">{{ $kategori2->nama }}</p>        
            @endforeach
            <a href="#"><p class="text-xs font-medium text-blue">Selebihnya</p></a>
        </div>

        <div class="grid grid-cols-5 p-4 gap-4">
            @foreach ($data['buku'] as $book)
            <!-- Grid container -->
            <div class="w-full max-w-[190px] max-h-[250px] bg-gray-200 rounded-2xl flex flex-col items-center relative">
                <!-- Gambar -->
                <div class="w-full h-[140px] overflow-hidden rounded-2xl relative">
                    <img src="{{asset('storage/ada.jpg')}}" alt="ada-wong" class="object-cover w-full h-full rounded-2xl transition-all duration-300">
                    
                    <!-- Hidden Button -->
                    <button class="absolute inset-0 bg-blue-600 bg-opacity-75 text-white rounded-2xl opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center invisible">
                        Detail 
                    </button>
                </div>

                <!-- Teks -->
                <div class="flex flex-col p-2">
                    <p class="text-xs text-blue pt-2">{{$book->judul}}</p>
                    <p class="text-xs pt-2">{{$book->pengarang}}</p>
                    <p class="text-xs pt-2">Stok: {{$book->stok}}</p> 
                    <div class="bg-white rounded-full p-1 border-2 border-black hover:bg-gray-200 transition-colors duration-300 flex items-center justify-center mt-2">                    
                        <button class="text-sm text-blue hover:text-blue-800 btn-blur">
                            Buka
                        </button>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>
        <section class="flex justify-center items-start gap-4 mb-8">
        <!-- Kategori -->
        <div class="max-w-[1150px] w-full h-auto bg-white rounded-xl mt-12 shadow-lg">
            <div class="flex justify-between w-full px-6 pt-4 mb-5">
                @foreach ($data['kategori2'] as $kategori2)
                    <p class="font-semibold text-xs">{{ $kategori2->nama }}</p>        
                @endforeach
                <a href="#"><p class="text-xs font-medium text-blue">Selebihnya</p></a>
            </div>

            <div class="grid grid-cols-5 p-4 gap-4">
                @foreach ($data['buku'] as $book)
                <!-- Grid container -->
                <div class="w-full max-w-[190px] max-h-[250px] bg-gray-200 rounded-2xl flex flex-col items-center relative">
                    <!-- Gambar -->
                    <div class="w-full h-[140px] overflow-hidden rounded-2xl relative">
                        <img src="{{asset('storage/ada.jpg')}}" alt="ada-wong" class="object-cover w-full h-full rounded-2xl transition-all duration-300">
                        
                        <!-- Hidden Button -->
                        <button class="absolute inset-0 bg-blue-600 bg-opacity-75 text-white rounded-2xl opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center invisible">
                            Detail 
                        </button>
                    </div>

                    <!-- Teks -->
                    <div class="flex flex-col p-2">
                        <p class="text-xs text-blue pt-2">{{$book->judul}}</p>
                        <p class="text-xs pt-2">{{$book->pengarang}}</p>
                        <p class="text-xs pt-2">Stok: {{$book->stok}}</p> 
                        <div class="bg-white rounded-full p-1 border-2 border-black hover:bg-gray-200 transition-colors duration-300 flex items-center justify-center mt-2">                    
                            <button class="text-sm text-blue hover:text-blue-800 btn-blur">
                                Buka
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach 
            </div>
        </div>
    </section>

<script>
    document.querySelectorAll('.btn-blur').forEach(button => {
        button.addEventListener('click', function() {
            const container = this.closest('.flex.flex-col.items-center');
            const image = container.querySelector('img');
            const hiddenButton = container.querySelector('button.absolute');
            const textElements = container.querySelectorAll('p');

            // Apply blur to image
            image.classList.toggle('blur-sm');
            
            // Apply blur to all <p> elements
            textElements.forEach(p => p.classList.toggle('blur-sm'));

            // Show or hide the hidden button
            hiddenButton.classList.toggle('invisible');
        });
    });
</script>



</body>
</head>
</html>

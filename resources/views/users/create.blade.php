<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New User</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous">
    </script>
</head>

<body class="font-poppins bg-home">


    <!-- Main container for the dashboard -->
    <div class="w-full bg-white shadow-lg">
        <div class="max-w-6xl mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/logoo.svg') }}" alt="Banner Image" class="w-[50px] h-[50px] object-cover">
            </div>

            <!-- Account Icon -->
            <div class="flex-shrink-0">
                <svg class="w-[50px] h-[50px] text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"></path>
                </svg>
            </div>
        </div>
    </div>

<div class="flex">
    <aside class="w-[350px] h-full relative cursor-pointer">
            <!-- Sidebar content -->
            <div class="ml-4 mt-5 bg-DashboarAdmin w-[300px] h-[80px] rounded-xl flex items-center">
                <div class="pl-4">
                    <img src="{{ asset('storage/avatar.jpg') }}" alt="" class="w-[60px] rounded-xl">
                </div>
                <div class="ml-2 pt-2">
                    <p class="text-blue font-bold text-sm pb-1">Rayland Endri Kurniawan</p>
                    <p class="text-black font-medium text-xs pb-1">Admin</p>
                    <p class="text-blue font-semibold text-xs pb-1">onnline</p>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <div class="ml-4 mt-5 w-[250px] h-[220px] bg-DashboarAdmin rounded-xl" id="halamanSamping">
                <!-- Menu Items -->
                <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                    <img src="{{ asset('storage/dashboard.svg') }}" alt="" class="w-[25px]"> 
                    <a href="{{route('dashboard')}}">
                        <p class="pt-1 pl-3 text-semibold">Dasboard</p>
                    </a>
                </div>
                <div class="flex justify-start items-start pt-3 font-semibold text-sm pl-4">
                    <img src="{{ asset('storage/Data_pengguna.svg') }}" alt="" class="w-[25px]"> 
                    <a class="pt-1 pl-3 text-semibold" href="">Data Pengguna</a>
                </div>
                <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                    <img src="{{ asset('storage/data.svg') }}" alt="" class="w-[20px]"> 
                    <p class="pt-1 pl-4 text-semibold">Data</p>
                    <div class="pl-32 pt-1">
                        <img src="{{ asset('storage/dropdwond.svg') }}" alt="" id="dropdown" class="w-[15px] cursor-pointer">
                    </div>
                </div>
                <!-- Submenu Items -->
                <div class="hidden" id="subText">
                    <a href="{{ route('books.index') }}">
                    <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12">
                        <img src="{{ asset('storage/DataBuku.svg') }}" alt="">
                        <p class="pt-0 pl-4 text-semibold">Data Buku</p>
                    </div>
                    </a>
                    <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12">
                        <img src="{{ asset('storage/KategoriBuku.svg') }}" alt="">
                        <p class="pt-0 pl-4 text-semibold">Kategori Buku</p>
                    </div>
                    <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12">
                        <img src="{{ asset('storage/RakBuku.svg') }}" alt="">
                        <p class="pt-0 pl-4 text-semibold">Rak</p>
                    </div>
                </div>
                <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                    <img src="{{ asset('storage/transaksi.svg') }}" alt="" class="w-[20px]"> 
                    <p class="pt-1 pl-4 text-semibold">Transaksi</p>
                    <div class="pl-[92px] pt-1">
                        <img src="{{ asset('storage/dropdwond.svg') }}" alt="" id="dropdown2" class="w-[15px] cursor-pointer">
                    </div>
                </div>
                <div class="hidden" id="subText2">
                    <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12">
                        <img src="{{ asset('storage/Peminjaman.svg') }}" alt="">
                        <p class="pt-0 pl-4 text-semibold">Peminjaman</p>
                    </div>
                    <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12">
                        <img src="{{ asset('storage/Pengembalian.svg') }}" alt="">
                        <p class="pt-0 pl-4 text-semibold">Pengembalian</p>
                    </div>
                </div>
                <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                    <img src="{{ asset('storage/denda.svg') }}" alt="" class="w-[20px]"> 
                    <p class="pt-[2px] pl-4 text-semibold">Denda</p>
                </div>
            </div>
        </aside>

     
    <div>
           
        <div class="flex justify-start items-center mb-2 mt-4">
            <img src="{{asset('storage/Plus.svg')}}" alt="">
            <h2 class="font-semibold">Tambah User</h2>
        </div>

        
        <hr class="mb-8 bg-blue border border-blue text-blue ml-2">

{{-- menu --}}
        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data" class="ml-2">
            @csrf
            @method('POST')
        <div class="grid grid-cols-2">
            <div class="">
                <label for="nama" class="block font-semibold">Nama Pengguna</label>
                <input type="text" id="nama" name="nama" required placeholder="nama pengguna" class="py-1 pr-44 rounded-md bg-SecondColor">
            </div>

            <div class="ml-8">
                <label for="email" class="block font-semibold">Email:</label>
                <input type="email" id="email" name="email" placeholder="email"  class="py-1 pr-24 rounded-md bg-SecondColor">
            </div>

            <div>
                <label for="tempat_lahir" class="block font-semibold">Tempat Lahir:</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir" class="py-1 pr-44 rounded-md bg-SecondColor">
            </div>

            <div  class="ml-8">
                <label for="telepon" class="block font-semibold">Telepon:</label>
                <input type="text" id="telepon" name="telepon" maxlength="25" class="py-1 pr-24 rounded-md bg-SecondColor" placeholder="cth:0887871817">
            </div>




            <div>
                <label for="tanggal_lahir" class="block font-semibold">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal lahir" class="py-1 pr-56 rounded-md bg-SecondColor">
            </div>

           

         
            <div  class="ml-8">
                <label for="jenis_kelamin" class="font-semibold">Jenis Kelamin:</label>
                <div class="block">
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="pria" placeholder="pria">
                    <label for="jenis_kelamin" class="">Pria</label>
                </div>
                
                <div class="block">
                    <input type="radio" id="jenis_kelamin" name="jenis_kelamin" value="pria" placeholder="wamita">
                    <label for="jenis_kelamin" class="">Wanita</label>
                </div>

            </div>

            <div class="">
                <label for="alamat" class="block font-semibold">Alamat:</label>
                <textarea id="alamat" name="alamat" placeholder="contoh: depok" class="py-1 pr-52 rounded-md bg-SecondColor"></textarea>
            </div>


            <div class="ml-8">
                <label for="foto" class="block font-semibold">Foto:</label>
                <input type="file" accept="image/*" id="foto" name="foto"></input>
            </div>

            <div  class="">
                <label for="password"class="block font-semibold">Password:</label>
                <input type="password" id="password" name="password" required placeholder="password" class="py-1 pr-44 rounded-md bg-SecondColor">
            </div>

            <div  class="ml-8">
                <label for="level"class="block font-semibold">level:</label>
                <select name="level" id="level" class=" mt-1` pr-1 rounded-md bg-SecondColor">
                    <option value="anggota">anggota</option>
                    <option value="pustakawan">pustakawan</option>
                    <option value="admin">admin</option>
                </select>
            </div>


            <div class="">
                
            </div>

            <div class="flex mt-2 justify-end mr-14">
            <button type="submit" class="px-3 py-2  bg-blue rounded-md text-white font-semibold">Create</button>
            </div>

            
        </div>
        </form>
    </div>
</div>

   <script>
    $(document).ready(function() {
    let currentOpenDropdown = null;
    let currentOpenDataElements = null;
    let currentActiveItem = null; // Variable to keep track of the currently active item

    function toggleDropdown(elements, widthElements, dataElements) {
        elements.each(function(index, element) {
            $(element).click(function() {
                if (currentOpenDropdown && currentOpenDropdown !== element) {
                    $(currentOpenDropdown).removeClass('rotate-[270deg]');
                    if (widthElements.eq(index)) {
                        widthElements.eq(index).removeClass('h-[320px]');
                    }
                    if (dataElements.eq(index)) {
                        dataElements.eq(index).addClass('hidden');
                    }
                }

                if (currentOpenDataElements) {
                    currentOpenDataElements.each(function(_, dataElem) {
                        $(dataElem).addClass('hidden');
                    });
                }

                const isOpen = $(element).toggleClass('rotate-[270deg]').hasClass('rotate-[270deg]');
                if (widthElements.eq(index)) {
                    widthElements.eq(index).toggleClass('h-[320px]', isOpen);
                }
                if (dataElements.eq(index)) {
                    dataElements.eq(index).toggleClass('hidden', !isOpen);
                }

                currentOpenDropdown = isOpen ? element : null;
                currentOpenDataElements = isOpen ? dataElements.eq(index) : null;
            });
        });
    }

    const dropdownElements = $('#dropdown');
    const widthBesideElements = $('#halamanSamping');
    const dataElements = $('#subText');

    const dropdownElements_2 = $('#dropdown2');
    const widthBesideElements_2 = $('#halamanSamping');
    const dataElements_2 = $('#subText2');

    toggleDropdown(dropdownElements, widthBesideElements, dataElements);
    toggleDropdown(dropdownElements_2, widthBesideElements_2, dataElements_2);

    // Selector untuk semua elemen menu
    const menuItems = $('#dashoard_color, #data_pengguna_color, #data_buku_color, #kategori_buku_color, #peminjaman, #pengembalian, #denda');

    // Add click event listeners to navbar items to change color when active
    menuItems.click(function() {
        // Reset the active class for all items
        menuItems.removeClass('active');

        // Add the active class to the clicked item
        $(this).addClass('active');
    });
});

    function pindahpage() {
        window.location.href = 'users/create'
    }



</script>
</body>



</html>

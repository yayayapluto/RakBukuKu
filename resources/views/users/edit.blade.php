
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
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous">
    </script>
    <style>
        .active {
    color: red; /* Ganti dengan warna yang Anda inginkan */
}

    </style>
</head>
<body class="font-poppins">
    <!-- Main container for the dashboard -->
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
                    <input type="text" placeholder="Search..." class="bg-transparent flex-grow h-full border-none focus:ring-0 focus:outline-none">
                </div>
            </div>

            <!-- Account Icon -->
            <div class="flex-shrink-0">
                <a href="{{route('dashboard')}}"><svg class="w-[50px] h-[50px] text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"></path>
                </svg>
                </a>
            </div>
        </div>
    </div>


    <!-- sidebar -->
    <div class="flex">
        <aside class="w-[350px] h-full relative">
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
                    <p class="pt-1 pl-3 text-semibold">Dasboard</p>
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
                        <a href="{{route('borrow.index')}}"><p class="pt-0 pl-4 text-semibold">Kategori Buku</p></a>
                    </div>
                    <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12">
                        <img src="{{ asset('storage/RakBuku.svg') }}" alt="">
                        <a href="{{route('racks.index')}}"><p class="pt-0 pl-4 text-semibold">Rak</p></a>
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

        <form action="{{ route('users.update', $data->id) }}" method="POST" enctype="multipart/form-data ">
    @csrf
    @method('PUT')

    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label for="nama" class="block font-semibold">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $data->nama }}" required class="py-1 pr-44 rounded-md bg-SecondColor">
        </div>

        <div>
            <label for="email" class="block font-semibold">Email:</label>
            <input type="email" id="email" name="email" value="{{ $data->email }}" class="py-1 pr-24 rounded-md bg-SecondColor">
        </div>

        <div>
            <label for="password" class="block font-semibold">Password:</label>
            <input type="password" id="password" name="password" required class="py-1 pr-44 rounded-md bg-SecondColor">
        </div>

        <div>
            <label for="tempat_lahir" class="block font-semibold">Tempat Lahir:</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $data->tempat_lahir }}" class="py-1 pr-44 rounded-md bg-SecondColor">
        </div>

        <div>
            <label for="tanggal_lahir" class="block font-semibold">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" class="py-1 pr-56 rounded-md bg-SecondColor">
        </div>

        <div>
            <label for="jenis_kelamin" class="block font-semibold">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" class="mt-1 pr-1 rounded-md bg-SecondColor">
                <option value="pria" {{ $data->jenis_kelamin == 'pria' ? 'selected' : '' }}>Pria</option>
                <option value="wanita" {{ $data->jenis_kelamin == 'wanita' ? 'selected' : '' }}>Wanita</option>
            </select>
        </div>

        <div>
            <label for="alamat" class="block font-semibold">Alamat:</label>
            <textarea id="alamat" name="alamat" class="py-1 pr-52 rounded-md bg-SecondColor">{{ $data->alamat }}</textarea>
        </div>

        <div>
            <label for="telepon" class="block font-semibold">Telepon:</label>
            <input type="text" id="telepon" name="telepon" maxlength="25" value="{{ $data->telepon }}" class="py-1 pr-24 rounded-md bg-SecondColor">
        </div>

        <div>
            <label for="foto" class="block font-semibold">Foto:</label>
            <textarea id="foto" name="foto" class="py-1 pr-52 rounded-md bg-SecondColor">{{ $data->foto }}</textarea>
        </div>

        <div class="flex mt-2 justify-end">
            <button type="submit" class="px-3 py-2 bg-blue rounded-md text-white font-semibold">Update</button>
        </div>
    </div>
</form>



            
        </div>

        
    </div>
</body>
</html>


    


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

    </div>
</body>

</html>

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
    <script src=
"https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous">
    </script>
    
</head>
<body class="font-poppins">
<!-- #region -->
        <div class="w-full bg-white shadow-lg">
        <div class="max-w-6xl mx-auto flex items-center justify-between p-4">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/logoo.svg') }}" alt="Banner Image" class="w-[50px] h-[50px] object-cover">
            </div>
            
            <!-- Search Input (Pusatkan) -->
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
                <svg class="w-[50px] h-[50px] text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"></path>
                </svg>
            </div>
        </div>
    </div>


<div class="flex">
    <aside class="w-[500px] h-full relative" >
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
    <div class="" ">
        <div class="ml-4 mt-5 w-[250px] h-[220px] bg-DashboarAdmin rounded-xl" id="halamanSamping">
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                <img src="{{asset('storage/dashboard.svg')}}" alt="" class="w-[25px]" > 
                <p class="pt-1 pl-3 text-semibold">Dasboard</p>
            </div>
            <div class="flex justify-start items-start pt-3 font-semibold text-sm pl-4">
                <img src="{{asset('storage/Data_pengguna.svg')}}" alt="" class="w-[25px]" > 
                <a class="pt-1 pl-3 text-semibold" href="" >Data Pengguna</a>
            </div>
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                <img src="{{asset('storage/data.svg')}}" alt="" class="w-[20px]" > 
                <p class="pt-1 pl-4 text-semibold">Data</p>
                <div class="pl-32 pt-1">
                <img src="{{asset('storage/dropdwond.svg')}}" alt="" id="dropdown" class="w-[15px] cursor-pointer">
                </div>
            </div>
        <div class="hidden" id="subText">
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12" id="subText">
                <img src="{{asset('storage/DataBuku.svg')}}" alt="">
                <p class="pt-0 pl-4 text-semibold">Data Buku</p>
            </div>
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12" id="subText">
                <img src="{{asset('storage/KategoriBuku.svg')}}" alt="">
                <p class="pt-0 pl-4 text-semibold">Kategori Buku</p>
            </div>
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12" id="subText">
                <img src="{{asset('storage/RakBuku.svg')}}" alt="">
                <p class="pt-0 pl-4 text-semibold">Rak</p>
            </div>
        </div>
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                <img src="{{asset('storage/transaksi.svg')}}" alt="" class="w-[20px]" > 
                <p class="pt-1 pl-4 text-semibold">Transaksi</p>
                <div class="pl-[92px] pt-1">
                <img src="{{asset('storage/dropdwond.svg')}}" alt="" id="dropdown2" class="w-[15px] cursor-pointer" >
                </div>
            </div>
        <div class="hidden" id="subText2">
             <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12" id="subText">
                <img src="{{asset('storage/Peminjaman.svg')}}" alt="">
                <p class="pt-0 pl-4 text-semibold">Peminjaman</p>
            </div>
             <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-12" id="subText">
                <img src="{{asset('storage/Pengembalian.svg')}}" alt="">
                <p class="pt-0 pl-4 text-semibold">Pengembalian</p>
            </div>
        </div>
            <div class="flex justify-start items-start pt-4 font-semibold text-sm pl-4">
                <img src="{{asset('storage/denda.svg')}}" alt="" class="w-[20px]" > 
                <p class="pt-[2px] pl-4 text-semibold">Denda</p>
            </div>
        </div>
    </div>
    </aside>

    <main class="flex justify-start items-center fixed">
        <h1 class="text-blue mt-8 ml-[350px] font-bold text-xl">Dashboard</h1>
        <h1 class="text-black mt-8 ml-2 font-medium text-sm">Control Panel</h1>
        <div class="mt-10 ml-2 grid col-span-3">
        </div>
    </main>

    <section class="flex justify-start items-center fixed">
        <div class="w-[200px] h-[75px] bg-IsiDashboard ml-[350px] mt-20 rounded-lg">
            <div class="grid grid-rows-2">
                
            </div>
        </div>
    </section>
</div>

    










<script>
    $(document).ready(function() {
        let currentOpenDropdown = null;
        let currentOpenDataElements = null;

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
    });
</script>

</body>
</html>

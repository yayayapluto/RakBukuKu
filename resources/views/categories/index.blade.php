<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Index</title>
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
        crossorigin="anonymous">
    </script>
</head >

<body class="font-poppins bg-home">
     <!-- Main container for the dashboard -->
    <div class="w-full bg-white shadow-lg ">
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
                <svg class="w-[50px] h-[50px] text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2a7.2 7.2 0 0 1-6-3.22c.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08a7.2 7.2 0 0 1-6 3.22z"></path>
                </svg>
            </div>
        </div>
    </div>
    <!-- sidebar -->
    <div class="flex">
        <aside class="w-[300px] h-full relative">
            <!-- Sidebar content -->
            <div class="ml-4 mt-5 bg-DashboarAdmin w-[280px] h-[80px] rounded-xl flex items-center">
                <div class="pl-4">
                    <img src="{{ asset('storage/avatar.jpg') }}" alt="" class="w-[60px] rounded-xl">
                </div>
                <div class="ml-2 pt-2">
                    <p class="text-blue font-bold text-sm pb-1">{{Auth::user()->nama}}</p>
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


        <div class="flex justify-start items-center mb-2 mt-4 ml-6">
            <img src="{{asset('storage/daftarData.svg')}}" alt="" class="pl-2">
            <h2 class="font-semibold pl-4">Data Kategori</h2>
        </div>

        <hr class="mb-4 bg-blue border border-blue text-blue ml-8 w-full">

    <div class="flex">
    <section class="w-3/6 h-[10%] bg-SecondColor ml-8 p-5 rounded-lg">
    <h1 class="text-textInput font-medium ">Tambah Kategori</h1>
    <form action="{{ route('categories.store') }}" method="POST" >
        @csrf
        <label for="nama" class="font-semibold">Nama Kategori</label>
        <input type="text" id="nama" name="nama" required>
        <button type="submit" class="pt-2 ">
            <div class="flex px-2 py-2 bg-blue rounded-md items-center ">
                <img src="{{ asset('storage/pluss.svg') }}" alt="hah">
                <p class="font-semibold text-[9px] text-white">Tambah Rak</p>
            </div>
        </button>
    </form>
    </section>

    <table border="1" cellspacing="0" cellpadding="8" class="table-auto w-1/12 max-w-6xl mx-auto text-[10px] mb-5 rounded-lg overflow-hidden">
        <thead class="bg-white">
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="odd:bg-home even:bg-white">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nama }}</td>
                    <td>
                        <a href="{{ route('categories.show', $category) }}">Show</a>
                        <a href="{{ route('categories.edit', $category) }}">Edit</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>

    </div>
    </div>



    <style>
    .swal2-confirm.btn-success {
        background-color: #28a745 !important;
        color: white !important;
        padding: 7px;
        margin-left: 5px;
        border-radius: 5px;
    }
    .swal2-cancel.btn-danger {
        background-color: #dc3545 !important;
        color: white !important;
        padding: 7px;
        margin-left: 5px;
        border-radius: 5px;
    }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
    let currentOpenDropdown = null;
    let currentOpenDataElements = null;
    let currentActiveItem = null;

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

    // Selector for all menu elements
    const menuItems = $('#dashoard_color, #data_pengguna_color, #data_buku_color, #kategori_buku_color, #peminjaman, #pengembalian, #denda');

    // Add click event listeners to navbar items to change color when active
    menuItems.click(function() {
        menuItems.removeClass('active');
        $(this).addClass('active');
    });

    // Delete confirmation
    const deleteForms = document.querySelectorAll('.delete-form');
    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: "Apakah kamu yakin?",
                text: "kamu tidak akan bisa melihat akun ini lagi",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                reverseButtons: true,
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false,
                showClass: {
                    popup: 'animate__animated animate__fadeInDown'
                },
                hideClass: {
                    popup: 'animate__animated animate__fadeOutUp'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Terhapus!",
                        text: "Your file has been deleted.",
                        icon: "success",
                        showClass: {
                            popup: 'animate__animated animate__fadeInDown'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOutUp'
                        }
                    }).then(() => {
                        form.submit(); // Actually submit the form after the animation
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire({
                        title: "Gagal",
                        text: "file kamu aman :)",
                        icon: "error",
                        showClass: {
                            popup: 'animate__animated animate__shakeX'
                        },
                        hideClass: {
                            popup: 'animate__animated animate__fadeOut'
                        }
                    });
                }
            });
        });
    });
});

function pindahpage() {
    window.location.href = 'users/create';
}
</script>
</body>

</html>

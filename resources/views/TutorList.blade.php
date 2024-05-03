<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Tutoran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div>
        <div class="py-8 px-4 mx-auto max-w-6xl lg:py-16">
            <form class="">   
                <label for="search-course" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="search-course" class="block w-full p-4 ps-10 text-lg text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9]focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Kursus"/>
                    <button type="submit" class="absolute end-2.5 bottom-2.5 px-5 py-2 ml-5 bg-[#65668B] hover:bg-[#7981A2] font-bold rounded-full text-white">Search</button>
                </div>
            </form>  
            <div class="w-1/3 flex justify-between">
                <button id="dropdownButton1" data-dropdown-toggle="dropdownKelas" class="text-white mt-4 bg-[#D9D9D9] hover:bg-[#BDBFC5] focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-[#999999] text-base px-5 py-2.5 text-center inline-flex items-center border border-gray-50" type="button">Pilih Kelas <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>
                    <div id="dropdownKelas" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownButton1">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">SD</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">SMP</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">SMA</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">SMK</a></li>
                        </ul>
                    </div>
                <button id="dropdownButton2" data-dropdown-toggle="dropdownMataPelajaran" class="text-white mt-4 bg-[#D9D9D9] hover:bg-[#BDBFC5] focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-[#999999] text-base px-5 py-2.5 text-center inline-flex items-center border border-gray-50" type="button">Pilih Mata Pelajaran <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>
                    <div id="dropdownMataPelajaran" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="text-sm text-gray-700" aria-labelledby="dropdownButton2">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Fisika</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Kimia</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Matematika</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Bahasa Inggris</a></li>
                        </ul>
                    </div>
            </div>
            <div class="grid gap-4 grid-cols-2 gap-6 mt-12">
                @foreach ($tutors as $t)
                    <a href="{{ route('TutorDetailPage', ['TutorID'=>$t->id]) }}" class="grid grid-row-2 border border-gray-300 rounded-lg shadow-md hover:bg-gray-50">
                        <div class="grid grid-cols-4">
                            <img src="{{ asset('/storage/Profile Picture/Tutor/'.$t->Image) }}" class="object-cover w-[100px] h-[100px] m-4 rounded-full" alt="">
                            <div class="flex flex-col col-span-3 mt-4 mr-8 text-justify">
                                <p class="text-[30px] font-bold text-black">{{ $t->Name }}</p>
                                <p class="mb-3 text-base font-normal text-black ">{{ $t->Background }}</p>
                                <p class="w-1/4 py-1 bg-[#65668B] hover:bg-[#7981A2] text-base text-center rounded-full text-white">Sains</p>
                                <div class="flex flex-row my-4">
                                    <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                    </svg>           
                                    <p class="text-base ml-2">4.9/5  (67)</p>                       
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Tutoran</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div>
        <div class="py-8 px-24 mx-auto max-w-6xl lg:py-16">
            <form class="">   
                <label for="search-course" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="search-course" class="block w-full p-4 ps-10 text-lg text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9]focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Membership"/>
                    <button type="submit" class="absolute end-2.5 bottom-2.5 px-5 py-2 ml-5 bg-[#65668B] hover:bg-[#7981A2] font-bold rounded-full text-white">Cari</button>
                </div>
            </form>  
            <div class="grid gap-4 grid-cols-2 gap-8 mt-12">
                <a href="$" class="flex flex-col border border-gray-300 shadow-lg">
                    <img src="img/membership.png" class="object-cover">
                    <div class="flex flex-col">
                        <div class="flex flex-col my-4">
                            <h3 class="text-[20px] font-medium text-center">Membership Indonesia Pintar</h3>
                            <h3 class="text-[20px] font-medium text-center">Membership Indonesia Pintar</h3>
                        </div>
                        <div class="flex flex-col justify-between my-4 mx-4">
                            <div class="flex flex-col">
                                <p>Mulai: 26/02/2024</p>
                                <p>Akhir: 26/03/2024</p>
                            </div>
                            <div>
                                <p class="font-medium text-[18px] mt-4 text-right">Rp 199.000,00</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
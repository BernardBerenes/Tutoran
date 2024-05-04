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
    <div class="bg-white grid grid-cols-2 mx-40 my-20 gap-x-24">
        <div class="flex flex-col">
            <h2 class="mb-4 text-[50px] font-bold text-black">Detail Tutor</h2>
            <hr class="h-px bg-gray-200 border-0 bg-gray-700">
            <div class="flex flex-row items-center">
                <img src="{{ asset('/storage/Profile Picture/Tutor/'.$tutor->Image) }}" class="object-cover w-[150px] h-[150px] mx-4 my-10 rounded-full" alt="">   
                <h2 class="text-[32px] font-bold text-black">{{ $tutor->Name }}</h2>
            </div>
            <h3 class="text-2xl font-semibold">Latar Belakang</h2>
            <p class="text-base text-justify my-8">{{ $tutor->Background }}</p>
            <h3 class="text-2xl font-semibold">Subjek</h2>
            <div class="flex flex-row my-8">
                <p class="px-6 py-2 bg-[#65668B] hover:bg-[#7981A2] text-center text-base rounded-full text-white">Fisika</p>
                <p class="px-6 py-2 ml-5 bg-[#65668B] hover:bg-[#7981A2] text-center text-base rounded-full text-white">Matematika</p>
                <p class="px-6 py-2 ml-5 bg-[#65668B] hover:bg-[#7981A2] text-center text-base rounded-full text-white">Kimia</p>
            </div>
            <div class="flex flex-row items-center">
                <h3 class="text-2xl font-semibold mr-4">Rating</h2>
                    <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/></svg>           
                    <p class="text-base ml-2">{{ $tutor->Rating }}/5  (67)</p>  
            </div>
        </div>
        <div>
            <h2 class="mb-4 text-[50px] font-bold text-black">Daftar Kursus</h2>
            <hr class="h-px bg-gray-200 border-0 bg-gray-700">
            <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto w-[540px] h-[430px] my-10 pr-4">
                <a href="#" class="grid grid-cols-4 border border-gray-300 shadow-md w-[500px] h-[120px] hover:bg-gray-50">
                    <img src="img/Matematika Peminatan.png" class="p-4 object-cover w-[120px] h-[120px]" alt="">
                    <div class="flex flex-col col-span-3 flex flex-col ">
                        <p class="text-2xl font-medium text-black mt-4">Integral Tak Tentu Fungsi Aljabar</p>
                        <p class="mb-3 text-base text-black ">Matematika Peminatan</p>
                    </div>
                </a>
                <a href="#" class="grid grid-cols-4 border border-gray-300 shadow-md w-[500px] h-[120px] hover:bg-gray-50">
                    <img src="img/Kimia.png" class="p-4 object-cover w-[120px] h-[120px]" alt="">
                    <div class="flex flex-col col-span-3 flex flex-col ">
                        <p class="text-2xl font-medium text-black mt-4">Tata Nama Senyawa dan Persamaan Reaksi</p>
                        <p class="mb-3 text-base text-black ">Kimia</p>
                    </div>
                </a>                   
                <a href="#" class="grid grid-cols-4 border border-gray-300 shadow-md w-[500px] h-[120px] hover:bg-gray-50">
                    <img src="img/Kimia.png" class="p-4 object-cover w-[120px] h-[120px]" alt="">
                    <div class="flex flex-col col-span-3 flex flex-col ">
                        <p class="text-2xl font-medium text-black mt-4">Induksi Elektromagnetik</p>
                        <p class="mb-3 text-base text-black ">Fisika</p>
                    </div>
                </a>                   
                <a href="#" class="grid grid-cols-4 border border-gray-300 shadow-md w-[500px] h-[120px] hover:bg-gray-50">
                    <img src="img/Kimia.png" class="p-4 object-cover w-[120px] h-[120px]" alt="">
                    <div class="flex flex-col col-span-3 flex flex-col ">
                        <p class="text-2xl font-medium text-black mt-4">Tata Nama Senyawa dan Persamaan Reaksi</p>
                        <p class="mb-3 text-base text-black ">Kimia</p>
                    </div>
                </a>                   
            </div>
            <div class="flex justify-end">
                <a href="" class="ml-auto">
                    <div class="flex items-center justify-center w-[80px] h-[80px] rounded-full bg-[#65668B] mr-4 hover:bg-[#7981A2]">
                        <svg class="w-[40px] h-[40px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer class="bg-[#27272E]">
        <div class="mx-auto w-full max-w-screen-xl p-4 pt-20 pb-6 lg:pb-8">
            <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="" class="flex items-center">
                    <img src="img/Logo_Tutoran.png" class="h-8 me-3"/>
                </a>
                <div class="text-gray-500 font-medium flex flex-col">
                    <p class="mt-8">Informasi Kontak</p>
                    <div class="mt-4 flex flex-row">
                        <p class="text-white mr-1">Email:</p>
                        <p>tutoran@gmail.com</p>
                    </div>
                    <div class="flex flex-row">
                        <p class="text-white mr-1">Jam:</p>  
                        <p>09:00 - 17:00, Senin - Sabtu</p>
                    </div>            
                </div>
            </div>
            <div class="grid gap-8 sm:gap-4 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white underline underline-offset-4">Menu Utama</h2>
                    <ul class="text-gray-500 font-medium">
                        <li>
                            <a href="HomePage.html" class="hover:underline">Beranda</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Pelayanan Kami</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Kebijakan Privasi</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Syarat dan Ketentuan</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">Pertanyaan yang Sering Ditanyakan</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-10"> <!--flex items-center flex-col-->
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white underline underline-offset-4 ">Tautan</h2>
                    <ul class="text-gray-500  font-medium">
                        <li>
                            <a href="" class="hover:underline">SD</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">SMP</a>
                        </li>
                        <li>
                            <a href="" class="hover:underline">SMA</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white underline underline-offset-4">Media Sosial</h2>
                    <div class="text-gray-500 font-medium flex flex-row">
                            <a href="#" class="flex items-center rtl:space-x-reverse">
                                <img src="img/Facebook.png" class="h-8" alt="Tutoran Logo" />
                            </a>
                            <a href="#" class="flex items-center  rtl:space-x-reverse">
                                <img src="img/Twitter Circled.png" class="h-8" alt="Tutoran Logo" />
                            </a>
                            <a href="#" class="flex items-center  rtl:space-x-reverse">
                                <img src="img/Instagram Circle.png" class="h-8" alt="Tutoran Logo" />
                            </a>  
                            <a href="#" class="flex items-center  rtl:space-x-reverse">
                                <img src="img/LinkedIn.png" class="h-8" alt="Tutoran Logo" />
                            </a>        
                        </div>
                </div>
            </div>
        </div>
        <div class="sm:flex sm:items-center sm:justify-center mt-12">
            <span class="text-sm text-gray-500 sm:text-center text-gray-400">© 2024 <a href="" class="hover:underline">tutoran</a>. All Rights Reserved.
            </span>
            </div>
        </div>
        </div>
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
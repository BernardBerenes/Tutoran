<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Tutoran</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.getElementById('kelas').addEventListener('change', function() {
            var form = document.getElementById('kelas');
            form.submit();
        });
    </script>
</head>
<body class="font-[Inter]">
    <nav class="flex items-center h-28 w-full bg-slate-200">
        <a href=""><img src="/img/Logo_Tutoran.png" alt="" class="ml-20"></a>
        <div class="flex justify-between ml-16 text-2xl font-medium w-3/4">
            <div class="flex gap-x-12">
                <a href="" class="underline underline-offset-2">Beranda</a>
                <a href="index.html" class="group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out my-2 mx-3">Mata Pelajaran</span></a>
                <a href="index.html" class="group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out my-2 mx-3">Tentang Kami</span></a>
            </div>
            <div>
                <a href="" class="px-5 py-3 bg-[#D9D9D9] text-[#65668B] hover:bg-[#BDBFC5] font-bold rounded-full">Masuk/Daftar</a>
                <a href="" class="px-5 py-3 ml-5 bg-[#65668B] hover:bg-[#7981A2] font-bold rounded-full text-white">Langganan</a>
            </div>
        </div>
    </nav>
    <div class="flex flex-col">
        <img src="Assets/Banner.png">
        <div class="flex flex-row bg-white min-h-screen m-16 justify-between">
            <div class="flex flex-col mr-16">
                <div class="flex flex-row">
                    <select id="kelas" class="flex items-center justify-center bg-gray-200 border-none rounded-full p-4 w-[170px] h-[55px] text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <option value="Pilih Kelas" class="bg-white" selected>Pilih Kelas</option>
                        <option value="SD" class="bg-white">SD</option>
                        <option value="SMP" class="bg-white">SMP</option>
                        <option value="SMK" class="bg-white">SMK</option>
                        <option value="SMA" class="bg-white">SMA</option>
                    </select>
                    <select id="kurikulum" class="flex items-center justify-center bg-gray-200 border-none rounded-full p-4 ml-8 w-[170px] h-[55px] text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <option value="Kurikulum" class="bg-white" selected>Kurikulum</option>
                        <option value="SD" class="bg-white">SD</option>
                        <option value="SMP" class="bg-white">SMP</option>
                        <option value="SMK" class="bg-white">SMK</option>
                        <option value="SMA" class="bg-white">SMA</option>
                    </select>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-8">
                    <a href="#" class="flex flex-col items-center justify-center w-[150px] h-[150px] border border-gray-300 rounded-xl shadow-lg hover:border-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <img src="Assets/BahasaInggris.png">
                        <p>Bahasa Inggris</p>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center w-[150px] h-[150px] border border-gray-300 rounded-xl shadow-lg hover:border-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <img src="Assets/BahasaInggris.png">
                        <p>Bahasa Inggris</p>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center w-[150px] h-[150px] border border-gray-300 rounded-xl shadow-lg hover:border-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <img src="Assets/BahasaInggris.png">
                        <p>Bahasa Inggris</p>
                    </a>
                    <a href="#" class="flex flex-col items-center justify-center w-[150px] h-[150px] border border-gray-300 rounded-xl shadow-lg hover:border-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <img src="Assets/BahasaInggris.png">
                        <p>Bahasa Inggris</p>
                    </a>
                </div>
            </div>
            <div>
                <h1 class="text-[50px] font-bold">Daftar Tutor</h1>
                <hr class="border border-gray-300 w-[540px]">
                <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto w-[540px] h-[490px] my-10 pr-4">
                    <a href="#" class="grid grid-row-2 border border-gray-300 rounded-lg w-[480px] h-[225px] shadow-md hover:border-gray-600 hover:bg-gray-50">
                        <div class="grid grid-cols-4">
                            <img src="img/Xi Lhit.png" class="object-cover w-[90px] h-[90px] m-4 rounded-full" alt="">
                            <div class="flex flex-col col-span-3 mt-4 ml-2 mr-8 text-justify">
                                <p class="text-[24px] font-bold text-black">Bernard Bereness</p>
                                <p class="mb-3 text-[14px] font-light text-black ">Perkenalkan nama saya Bernard Bereness, Saya sedang mencari wanita yang siap mengemban masa depan dengan saya</p>
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
                    <a href="#" class="grid grid-row-2 border border-gray-300 rounded-lg w-[480px] h-[225px] shadow-md hover:border-gray-600 hover:bg-gray-50">
                        <div class="grid grid-cols-4">
                            <img src="img/Xi Lhit.png" class="object-cover w-[90px] h-[90px] m-4 rounded-full" alt="">
                            <div class="flex flex-col col-span-3 mt-4 ml-2 mr-8 text-justify">
                                <p class="text-[24px] font-bold text-black">Bernard Bereness</p>
                                <p class="mb-3 text-[14px] font-light text-black ">Perkenalkan nama saya Bernard Bereness, Saya sedang mencari wanita yang siap mengemban masa depan dengan saya</p>
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
                    <a href="#" class="grid grid-row-2 border border-gray-300 rounded-lg w-[480px] h-[225px] shadow-md hover:border-gray-600 hover:bg-gray-50">
                        <div class="grid grid-cols-4">
                            <img src="img/Xi Lhit.png" class="object-cover w-[90px] h-[90px] m-4 rounded-full" alt="">
                            <div class="flex flex-col col-span-3 mt-4 ml-2 mr-8 text-justify">
                                <p class="text-[24px] font-bold text-black">Bernard Bereness</p>
                                <p class="mb-3 text-[14px] font-light text-black ">Perkenalkan nama saya Bernard Bereness, Saya sedang mencari wanita yang siap mengemban masa depan dengan saya</p>
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
                    <a href="#" class="grid grid-row-2 border border-gray-300 rounded-lg w-[480px] h-[225px] shadow-md hover:border-gray-600 hover:bg-gray-50">
                        <div class="grid grid-cols-4">
                            <img src="img/Xi Lhit.png" class="object-cover w-[90px] h-[90px] m-4 rounded-full" alt="">
                            <div class="flex flex-col col-span-3 mt-4 ml-2 mr-8 text-justify">
                                <p class="text-[24px] font-bold text-black">Bernard Bereness</p>
                                <p class="mb-3 text-[14px] font-light text-black ">Perkenalkan nama saya Bernard Bereness, Saya sedang mencari wanita yang siap mengemban masa depan dengan saya</p>
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
                </div>
                <div class="flex items-center justify-end">
                    <a href="#" class="flex items-center justify-center w-[190px] h-[50px] px-5 py-2.5 mr-16 text-[25px] font-semibold text-center text-white bg-[#65668B] hover:bg-[#7981A2] rounded-full focus:ring-4 focus:ring-[#7981A2]">List Tutor</a>
                </div>
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
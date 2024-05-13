<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Rating Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="flex flex-col p-36 justify-center gap-16">
        <!-- foreach mulai disini -->
        <div class="flex justify-center gap-4">
            <img src="img/ProfileStudent.png" class="w-[380px] h-[380px] object-cover bg-no-repeat rounded-xl"/>
            <div class="flex flex-col gap-4">
                <h2 class="text-[36px] font-semibold">Dicky Dharma Susanto</h2>
                <h3 class="text-[30px] font-medium">Kelas 10 SMA-1</h3>
                <a href="" class="flex justify-center w-[80%] py-3 bg-[#65668B] hover:bg-[#7981A2] text-[30px] font-medium rounded-2xl text-white">Beri Nilai</a>
                <ul class="grid grid-cols-2 grid-row-3 gap-x-8 gap-y-2 text-[30px] font-light list-disc list-inside">
                    <li>Matematika</li>
                    <li>Fisika</li>
                    <li>Kimia</li>
                    <li>Kimia</li>
                    <li>Kimia</li>
                </ul>
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
                    <div class="text-[#D9D9D9] font-medium flex flex-row">
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
    </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
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
</head>
<body class="bg-[#7981A2] overflow-x-hidden">
    <nav class="flex items-center h-28 w-full bg-slate-200">
        <a href=""><img src="{{ asset('/Assets/img/Logo_Tutoran.png') }}" alt="" class="ml-20"></a>
        <div class="flex justify-between ml-16 text-2xl font-medium w-3/4">
            <div class="flex gap-x-12">
                <a href="">Beranda</a>
                <a href="">Mata Pelajaran</a>
                <a href="">Tentang Kami</a>
            </div>

            <div>
                <a href="{{ route('LoginPage') }}" class="px-5 py-3 bg-slate-600 font-bold rounded-full">Masuk/Daftar</a>
                <a href="" class="px-5 py-3 ml-5 bg-slate-600 font-bold rounded-full text-white">Langganan</a>
            </div>
        </div>
</nav>
    <div class="main-content bg-[#7981A2]">
        <div class="bg-[url('img/HomeBG.png')] bg-cover min-h-screen flex flex-col bg-no-repeat opacity-60">
            <form class="w-96 mx-auto absolute mr-20 mt-20 right-px">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <img src="/img/Search.png">
                    </div>
                    <input type="search" id="default-search" class="block ml-1 w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 bg-gray-300 focus:ring-blue-500 focus:border-blue-500 rounded-full" placeholder="Search" required />
                    <!-- <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button> -->
                </div>
            </form> 
            <!-- <div class="text-white font-extrabold text-[70px] mx-auto min-h-screen">
                <p class="absolute bottom-10 left-20 h-16 w-100 drop-shadow-md">Platform private tutoring</p>
                <p class="absolute bottom-0 left-20 h-16 w-100 drop-shadow-md">terbaik di Indonesia</p>
            </div> -->
            <div class="text-white font-extrabold text-[70px] drop-shadow-md w-4/6 mt-auto mb-36 ml-10">
                <p>Platform private tutoring terbaik di Indonesia</p>
            </div>
        </div>
        <div class="">
            <div class="flex flex-row justify-center">
                <img src="img/SD.png">
                <img src="img/Smp.png">
                <img src="img/Sma.png">
            </div>
            <div class="flex flex-row space-x-0 place-content-evenly mt-[-80px]">
                <div class="bg-[#65668B] shadow-outer shadow-2xl w-90 h-65">
                    <div class="p-6">
                        <p class="text-[25px] text-white">Mulai dari</p>
                        <p class="text-[#C2CEFF] text-5xl font-bold">Rp 99.000</p>
                        <p class="text-white text-[35px] font-semibold m-2">/bulan</p>
                        <button type="submit" class="text-black end-2.5 bottom-2.5 bg-white hover:bg-gray-200 font-semibold rounded-lg text-2xl px-4 py-2 m-2">Pelajari Selengkapnya</button>
                    </div>
                </div>
                <div class="bg-[#65668B] shadow-outer shadow-2xl w-90 h-65">
                    <div class="p-6">
                        <p class="text-[25px] text-white">Mulai dari</p>
                        <p class="text-[#C2CEFF] text-5xl font-bold">Rp 125.000</p>
                        <p class="text-white text-[35px] font-semibold m-2">/bulan</p>
                        <button type="submit" class="text-black end-2.5 bottom-2.5 bg-white hover:bg-gray-200 font-semibold rounded-lg text-2xl px-4 py-2 m-2">Pelajari Selengkapnya</button>
                    </div>
                </div>
                <div class="bg-[#65668B] shadow-outer shadow-2xl w-90 h-65">
                    <div class="p-6">
                        <p class="text-[25px] text-white">Mulai dari</p>
                        <p class="text-[#C2CEFF] text-5xl font-bold">Rp 150.000</p>
                        <p class="text-white text-[35px] font-semibold m-2">/bulan</p>
                        <button type="submit" class="text-black end-2.5 bottom-2.5 bg-white hover:bg-gray-200 font-semibold rounded-lg text-2xl px-4 py-2 m-2">Pelajari Selengkapnya</button>
                    </div>
                </div>
            </div>
            <div class="bg-[url('img/Main-2.png')] bg-cover min-h-screen"></div>
            <div class="flex justify-end mt-[-140px] mr-40"><button type="submit" class="text-black end-2.5 bottom-2.5 bg-white hover:bg-gray-200 font-semibold rounded-lg text-4xl px-20 py-2 m-2">Beli Sekarang</button></div>
        </div>
        <div class="bg-white py-10">
            <div class="mt-5 m-20 bg-[url('img/Main-3.png')] bg-cover bg-no-repeat">
                <div><p class="text-[90px] font-bold">Tutor Terbaik</p></div>
                <div><p class="text-[32px] font-medium mb-4">Januari 2024 - Juni 2024</p></div>
                <div class="flex flex-row justify-between">
                    <div class="max-w-sm bg-white rounded-lg shadow">
                        <img class="rounded-t-lg" src="/img/Xi Lhit.png"/>
                        <div class="p-5 bg-[#D1D2E5]">
                            <p class="mb-2 text-4xl font-bold tracking-tight text-gray-900">Xi Lhit, S.Pd., M.Si.</p>
                            <div class="flex flex-row">
                                <img src="/img/Rating Star.png">
                                <p class="font-bold text-xl">5.0/5.0 (62)</p>
                            </div>
                            <p class="mt-3 font-bold text-black text-lg">Alumni Universitas Indonesia, Stanford University.</p>
                            <p class="text-lg font-medium">Sebanyak 45/47 murid SMA-nya masuk ke PTN favorit.</p>
                            <a href="#" class="mt-5 inline-flex w-80 justify-center items-center px-3 py-2 text-xl font-bold text-center text-white bg-[#65668B]  rounded-lg hover:bg-[#7981A2]">
                            Lihat Profil
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white rounded-lg shadow">
                        <img class="rounded-t-lg" src="/img/Xi Lhit.png"/>
                        <div class="p-5 bg-[#D1D2E5]">
                            <p class="mb-2 text-4xl font-bold tracking-tight text-gray-900">Xi Lhit, S.Pd., M.Si.</p>
                            <div class="flex flex-row">
                                <img src="/img/Rating Star.png">
                                <p class="font-bold text-xl">5.0/5.0 (62)</p>
                            </div>
                            <p class="mt-3 font-bold text-black text-lg">Alumni Universitas Indonesia, Stanford University.</p>
                            <p class="text-lg font-medium">Sebanyak 45/47 murid SMA-nya masuk ke PTN favorit.</p>
                            <a href="#" class="mt-5 inline-flex w-80 justify-center items-center px-3 py-2 text-xl font-bold text-center text-white bg-[#65668B]  rounded-lg hover:bg-[#7981A2]">
                            Lihat Profil
                            </a>
                        </div>
                    </div>
                    <div class="max-w-sm bg-white rounded-lg shadow">
                        <img class="rounded-t-lg" src="/img/Xi Lhit.png"/>
                        <div class="p-5 bg-[#D1D2E5]">
                            <p class="mb-2 text-4xl font-bold tracking-tight text-gray-900">Xi Lhit, S.Pd., M.Si.</p>
                            <div class="flex flex-row">
                                <img src="/img/Rating Star.png">
                                <p class="font-bold text-xl">5.0/5.0 (62)</p>
                            </div>
                            <p class="mt-3 font-bold text-black text-lg">Alumni Universitas Indonesia, Stanford University.</p>
                            <p class="text-lg font-medium">Sebanyak 45/47 murid SMA-nya masuk ke PTN favorit.</p>
                            <a href="#" class="mt-5 inline-flex w-80 justify-center items-center px-3 py-2 text-xl font-bold text-center text-white bg-[#65668B]  rounded-lg hover:bg-[#7981A2]">
                            Lihat Profil
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center bg-gray-800 my-6 rounded-lg w-1/2">
                    <img src="/img/Trophy 1.png" class="p-6">
                    <div class="m-4">
                        <p class="font-bold text-6xl text-white">Leaderboard</p>
                        <a href="#" class="mt-5 inline-flex w-80 justify-center items-center px-3 py-2 text-xl font-bold text-center text-black bg-white rounded-lg hover:bg-gray-200">Cek Peringkat</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#7981A2]">
            <div class="m-20 flex flex-col">
                <div class="flex flex-row items-center bg-gray-200 rounded-lg w-full shadow md:flex-row my-10">
                    <img class="object-cover rounded-t-lg h-[442px]" src="img/Jessica Profile.png" alt="">
                    <div>
                        <div class="flex flex-col justify-between p-4">
                            <p class="text-[60px] font-semibold text-black">Jessica Wang</p>
                            <p class="mb-2 text-[38px] font-semibold text-black">Kelas 11 - SMA</p>
                            <p class="my-3 text-[32px] font-medium italic text-black">“Awalnya, saya kesulitan di kelas matematika dan merasa tertinggal. Untungnya, saya menemukan aplikasi Tutoran ini. Tutornya baik dan profesional, dan pelajarannya juga dijelaskan dengan sangat baik dan mudah diikuti. Rekomendasi bangett!”</p>
                        </div>   
                    </div>
                </div>
                <div class="flex flex-row items-center bg-gray-200 rounded-lg w-full shadow md:flex-row mb-20">
                    <img class="object-cover rounded-t-lg h-[442px]" src="img/Anissa Profile.png" alt="">
                    <div>
                        <div class="flex flex-col justify-between p-4">
                            <p class="text-[60px] font-semibold text-black">Anissa Rahayu</p>
                            <p class="mb-2 text-[38px] font-semibold text-black">Kelas 5 - SD</p>
                            <p class="my-3 text-[32px] font-medium italic text-black">“Awalnya aku ragu untuk menggunakan aplikasi bimbingan belajar, namun aku merasa puas sekali setelah mencoba aplikasi Tutoran! Kakak tutornya baik dan asik, ga ngebosenin sama sekali dan pertanyaanku selalu terjawab :D. Terima kasih Tutoran!”</p>
                        </div>   
                    </div>
                </div>
                <div class="w-full">
                    <div class="p-6 bg-gradient-to-r from-[#5962BE] to-[#7289C5] rounded-lg shadow flex flex-col items-center">
                        <p class="mb-8 text-6xl font-bold tracking-tight text-white">Mulai Perjalananmu Bersama Tutoran</p>
                        <a href="#" class="items-center px-20 py-4 text-4xl font-medium text-center text-white bg-[#27272E] rounded-full hover:bg-[#3E3E4B] ">
                        Daftar
                        </a>
                    </div>
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
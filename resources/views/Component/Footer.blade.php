<footer class="bg-[#27272E]">
    <div class="mx-auto w-full max-w-screen-xl p-4 pt-20 pb-6 lg:pb-8">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="{{ route('IndexPage') }}" class="flex items-center">
                    <img src="{{ asset('Assets/img/Logo_Tutoran.png') }}" class="h-8 me-3"/>
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
                        <li><a href="{{ route('IndexPage') }}" class="hover:underline">Beranda</a></li>
                        <li><a href="{{ route('AboutUsPage') }}" class="hover:underline">Tentang Kami</a></li>
                        <li><a href="{{ route('JobVacancyPage') }}" class="hover:underline">Gabung dengan Kami</a></li>
                        <li><a href="" class="hover:underline">Pelayanan Kami</a></li>
                        <li><a href="" class="hover:underline">Kebijakan Privasi</a></li>
                        <li><a href="" class="hover:underline">Syarat dan Ketentuan</a></li>
                        <li><a href="" class="hover:underline">Pertanyaan yang Sering Ditanyakan</a></li>
                    </ul>
                </div>
                <div class="ml-10">
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white underline underline-offset-4 ">Tautan</h2>
                    <ul class="text-gray-500  font-medium">
                        <li><a href="{{ route('SubjectPage', ['grade'=>'SD']) }}" class="hover:underline">SD</a></li>
                        <li><a href="{{ route('SubjectPage', ['grade'=>'SMP']) }}" class="hover:underline">SMP</a></li>
                        <li><a href="{{ route('SubjectPage', ['grade'=>'SMA']) }}" class="hover:underline">SMA</a></li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-sm font-semibold uppercase text-white underline underline-offset-4">Media Sosial</h2>
                    <div class="text-gray-500 font-medium flex flex-row">
                        <a href="#" class="flex items-center rtl:space-x-reverse">
                            <img src="{{ asset('Assets/img/Facebook.png') }}" class="h-8" alt="Tutoran Logo" />
                        </a>
                        <a href="#" class="flex items-center  rtl:space-x-reverse">
                            <img src="{{ asset('Assets/img/Twitter Circled.png') }}" class="h-8" alt="Tutoran Logo" />
                        </a>
                        <a href="#" class="flex items-center  rtl:space-x-reverse">
                            <img src="{{ asset('Assets/img/Instagram Circle.png') }}" class="h-8" alt="Tutoran Logo" />
                        </a>  
                        <a href="#" class="flex items-center  rtl:space-x-reverse">
                            <img src="{{ asset('Assets/img/LinkedIn.png') }}" class="h-8" alt="Tutoran Logo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:flex sm:items-center sm:justify-center mt-12">
            <span class="text-sm text-gray-500 sm:text-center text-gray-400">© 2024 
                <a href="{{ route('IndexPage') }}"  class="hover:underline">tutoran</a>. All Rights Reserved.
            </span>
            </div>
        </div>
    </div>
</footer>
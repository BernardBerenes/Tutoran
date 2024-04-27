<nav class="flex items-center h-28 w-full bg-white rounded-b-2xl shadow-md z-10">
    <a href="{{ route('IndexPage') }}"><img src="{{ asset('/Assets/img/Logo_Tutoran.png') }}" alt="" class="ml-20"></a>
    <div class="flex justify-between ml-16 text-2xl font-medium w-3/4 items-center">
        <div class="flex gap-x-12">
            <a href="{{ route('IndexPage') }}" class="{{ $currentPage == 'Beranda' ? 'underline underline-offset-[6px]' : '' }} group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Beranda</span></a>
            <a href="" class="group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[3px]">Mata Pelajaran</span></a>
            <a href="{{ route('AboutUsPage') }}" class="{{ $currentPage == 'About Us' ? 'underline underline-offset-[6px]' : '' }} group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Tentang Kami</span></a>
            @if (auth()->guard('student')->check() || auth()->guard('tutor')->check())
                <a href="" class="{{ $currentPage == 'My Course' ? 'underline underline-offset-[6px]' : '' }} group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Kursus Saya</span></a>
                <a href="{{ route('ForumDiscussionPage') }}" class="{{ $currentPage == 'Forum' ? 'underline underline-offset-[6px]' : '' }} group text-black font-medium transition-all duration-600 ease-in-out"><span class="bg-left-bottom bg-gradient-to-r from-black to-black bg-[length:0%_2px] bg-no-repeat group-hover:bg-[length:100%_2px] transition-all duration-500 ease-out pb-[2px]">Forum</span></a>
            @endif
        </div>    
        <div class="flex gap-x-8 items-center">
            @if (auth()->guard('student')->check() || auth()->guard('tutor')->check())
                <a href="{{ route('CartPage') }}"><img src="{{ asset('Assets/Cart.png') }}" alt=""></a>
                <a href="{{ route('ProfilePage') }}">
                    @if (auth()->guard(strtolower(session('Roles')))->user()->Image)
                        <img src="{{ asset('/storage/Profile Picture/'.auth()->guard(strtolower(session('Roles')))->user()->Image) }}" alt="" class="w-12 h-12 rounded-full cursor-pointer">
                    @else
                        <img src="{{ asset('/storage/Profile Picture/Default.png') }}" alt="" class="w-12 h-12 rounded-full cursor-pointer">
                    @endif
                </a>
            @else
                <a href="{{ route('LoginPage') }}" class="px-5 py-3 bg-[#D9D9D9] text-[#65668B] hover:bg-[#BDBFC5] font-bold rounded-full">Masuk/Daftar</a>
                <a href="" class="px-5 py-3 ml-5 bg-[#65668B] hover:bg-[#7981A2] font-bold rounded-full text-white">Langganan</a>
            @endif
        </div>
    </div>
</nav>
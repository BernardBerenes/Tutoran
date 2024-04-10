<nav class="flex items-center h-28 w-full bg-white rounded-b-2xl shadow-md z-10">
    <a href="{{ route('IndexPage') }}"><img src="{{ asset('/Assets/img/Logo_Tutoran.png') }}" alt="" class="ml-20"></a>
    <div class="flex justify-between ml-16 text-2xl font-medium w-3/4 items-center">
        <div class="flex gap-x-12">
            <a href="{{ route('IndexPage') }}" class="{{ $currentPage == 'Beranda' ? 'underline underline-offset-[6px]' : '' }}">Beranda</a>
            <a href="">Mata Pelajaran</a>
            <a href="{{ route('AboutUsPage') }}" class="{{ $currentPage == 'About Us' ? 'underline underline-offset-[6px]' : '' }}">Tentang Kami</a>
            @if (auth()->guard('student')->check() || auth()->guard('tutor')->check())
                <a href="" class="{{ $currentPage == 'Course' ? 'underline underline-offset-[6px]' : '' }}">Kursus Saya</a>
                <a href="" class="{{ $currentPage == 'Forum' ? 'underline underline-offset-[6px]' : '' }}">Forum</a>
            @endif
        </div>    
        <div class="flex gap-x-8 items-center">
            @if (auth()->guard('student')->check() || auth()->guard('tutor')->check())
                <a href="{{ route('CartPage') }}"><img src="{{ asset('Assets/Cart.png') }}" alt=""></a>
                <a href="{{ route('ProfilePage') }}"><img src="{{ asset('Assets/img/Mayang.png') }}" alt="" class="w-12 h-12 rounded-full"></a>
            @else
                <a href="{{ route('LoginPage') }}" class="px-5 py-3 bg-slate-600 font-bold rounded-full">Masuk/Daftar</a>
                <a href="" class="px-5 py-3 ml-5 bg-slate-600 font-bold rounded-full text-white">Langganan</a>
            @endif
        </div>
    </div>
</nav>
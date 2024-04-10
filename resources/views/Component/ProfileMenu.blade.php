<div class="bg-white w-96 h-full shadow-[inset_0_6px_3px_-2px_rgb(0,0,0,0.1)] drop-shadow-[20px_25px_25px_rgba(0,0,0,0.25)] flex flex-col items-center">
    <img src="{{ asset('Assets/img/Mayang.png') }}" alt="" class="w-36 h-36 rounded-full mt-12">
    <h6 class="font-semibold mt-2">Dicky Dharma Susanto</h6>
    <div class="w-full text-2xl font-regular mt-4">
        <a href="{{ route('ProfilePage') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-100 {{ $currentPage === 'Profile' ? 'bg-gray-200' : ''}}">Profil</a>
        <a href="" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-100">Riwayat Pembelian</a>
        <a href="" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-100">Laporan Siswa</a>
        <a href="{{ route('ChangePasswordPage') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-100 {{ $currentPage === 'ChangePassword' ? 'bg-gray-200' : ''}}">Ubah Kata Sandi</a>
        <form method="POST" action="{{ route('Logout') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 hover:cursor-pointer transition duration-100 text-red-600">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>
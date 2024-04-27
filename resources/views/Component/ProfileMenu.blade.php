<div class="bg-white w-96 shadow-[inset_0_6px_3px_-2px_rgb(0,0,0,0.1)] drop-shadow-[10px_25px_10px_rgba(0,0,0,0.3)] flex flex-col items-center">
    @if (auth()->guard(strtolower(session('Roles')))->user()->Image)
        <img src="{{ asset('/storage/Profile Picture/'.auth()->guard(strtolower(session('Roles')))->user()->Image) }}" alt="" class="w-36 h-36 rounded-full mt-12 cursor-pointer">
    @else
        <img src="{{ asset('/storage/Profile Picture/Default.png') }}" alt="" class="w-36 h-36 rounded-full mt-12 cursor-pointer">
    @endif
    <form method="POST" action="{{ route('ChangePicture') }}" enctype="multipart/form-data" id="form-file">
        @csrf
        <label for="file" class="w-36 h-36 rounded-full absolute top-12 bg-transparent left-[84px] cursor-pointer"></label>
        <input type="file" id="file" class="hidden" name="image" onchange="uploadPicture(this)">
    </form>
    <h6 class="font-semibold mt-2">{{ session('User')->Name }}</h6>
    <div class="w-full text-2xl font-regular mt-4">
        <a href="{{ route('ProfilePage') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150 {{ $currentPage === 'Profile' ? 'bg-gray-200' : ''}}">Profil</a>
        @if(auth()->guard('student')->check())
            <a href="" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150">Riwayat Pembelian</a>
        @endif
        <a href="" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150">Laporan Siswa</a>
        <a href="{{ route('ChangePasswordPage') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150 {{ $currentPage === 'ChangePassword' ? 'bg-gray-200' : ''}}">Ubah Kata Sandi</a>
        <form method="POST" action="{{ route('Logout') }}" class="h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 hover:cursor-pointer transition duration-100 text-red-600">
            @csrf
            <button type="submit" class="pl-4 w-full h-full text-start">Logout</button>
        </form>
    </div>
</div>

<script>
    function uploadPicture(input){
        var form = document.getElementById('form-file');
        form.submit();
    }
</script>
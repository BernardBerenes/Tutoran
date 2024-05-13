<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Style/ProfileMenu.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<div class="bg-white w-96 shadow-[inset_0_6px_3px_-2px_rgb(0,0,0,0.1)] drop-shadow-[10px_25px_10px_rgba(0,0,0,0.3)] flex flex-col items-center">
    <form method="POST" action="{{ route('ChangePicture') }}" enctype="multipart/form-data" id="form-file" class="profile-pic mt-12">
        @csrf
        <label class="-label" for="file">
            <span>
                <svg class="w-6 h-6 text-white hover:inline-block" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M4 18V8a1 1 0 0 1 1-1h1.5l1.707-1.707A1 1 0 0 1 8.914 5h6.172a1 1 0 0 1 .707.293L17.5 7H19a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1Z"/>
                <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>
            </span>
            <span>Change Image</span>
        </label>
        <input id="file" type="file" onchange="uploadPicture()" class="hidden" name="image"/>
        <img src="{{ asset('/storage/Profile Picture/'.session('Roles').'/'.auth(strtolower(session('Roles')))->user()->Image) }}" id="output" width="200" class="border-[1px] border-solid border-gray-300" />
    </form>
    <h6 class="font-semibold mt-2">{{ auth(strtolower(session('Roles')))->user()->Name }}</h6>
    <div class="w-full text-2xl font-regular mt-4">
        <a href="{{ route('ProfilePage') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150 {{ $currentPage === 'Profile' ? 'bg-gray-200' : ''}}">Profil</a>
        @if(auth('student')->check())
            <a href="" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150">Riwayat Pembelian</a>
        @endif
        <a href="{{ route('StudentReportPage') }}" class="pl-4 h-14 flex items-center border border-y-gray-300 hover:bg-gray-300 transition duration-150 {{ $currentPage === 'Report' ? 'bg-gray-200' : ''}}">Laporan Siswa</a>
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
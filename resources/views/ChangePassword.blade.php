<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Change Password</title>
</head>
<body class="overflow-hidden">
    @include('Component.Navbar')
    <div class="flex flex-row h-[90vh]">
        @include('Component.ProfileMenu')
        <div class="w-full flex justify-center">
            <div class="w-1/2 h-2/5 mt-12 flex flex-col">
                <h1 class="font-medium text-4xl mb-7">Ubah Kata Sandi</h1>
                <form method="POST" action="{{ route('ChangePassword') }}" class="flex flex-col gap-y-5">
                    @method('PATCH')
                    @csrf
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Kata Sandi Sekarang</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="currentPassword" >
                        @error('currentPassword')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Kata Sandi Baru</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="newPassword" >
                    </div>
                    <button type="submit" class="bg-slate-500 rounded-md py-3 w-32 font-semibold text-white text-xl align">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
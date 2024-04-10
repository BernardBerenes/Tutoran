<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>
<body class="overflow-hidden">
    @include('Component.Navbar')
    <div class="flex flex-row h-[90vh]">
        @include('Component.ProfileMenu')
        <div class="w-full flex justify-center">
            <div class="w-1/2 h-3/4 mt-12 flex flex-col">
                <h1 class="font-medium text-4xl mb-7">Profil</h1>
                <form action="{{ route('IndexPage') }}" class="flex flex-col gap-y-5">
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Nama</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="name" >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Email</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="email" >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Jenis Kelamin</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="gender" >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Tanggal Lahir</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="dob" >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Nomor HP</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg" name="phoneNumber" >
                    </div>
                    <button type="submit" class="bg-slate-500 rounded-md py-3 w-32 font-semibold text-white text-xl align">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>
<body class="overflow-hidden">
    @include('Component.Navbar')
    <div class="flex flex-row h-screen">
        @include('Component.ProfileMenu')
        <div class="w-full flex flex-col my-16 mx-32">
            <h2 class="text-[40px] font-medium">Laporan Siswa</h2>
            <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto w-[540px] h-[430px] my-10 border border-gray-100">           
                <a href="#" class="grid grid-cols-4 border border-gray-300 shadow-md w-[500px] h-[120px] hover:bg-gray-50">
                    <img src="{{ asset('/storage/Poster/') }}" class="p-4 object-cover w-[120px] h-[120px]" alt="">
                    <div class="flex flex-col col-span-3 flex flex-col ">
                        <p class="text-2xl font-medium text-black mt-4"></p>
                        <p class="mb-3 text-base text-black "></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
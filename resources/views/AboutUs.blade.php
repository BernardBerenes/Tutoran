<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/AboutUs.css') }}">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-0 p-0 box-border h-full bg-[#8292AC]">
    @include('Component.Navbar')
    <section class="bg-[url('Assets/Teachers.png')] h-[430px] p-[20px] opacity-40 bg-cover bg-no-repeat z-0">
    </section>
    <div class="text-white mt-[-350px] ml-[80px] mr-[230px] z-1 pb-4">
        <h2 class="text-[70px] font-medium">TENTANG</h2>
        <h1 class="mt-[-40px] text-[90px] font-extrabold">TUTORAN</h1>
        <div class="text-black flex flex-col text-[28px] font-medium">
            <p>Tutoran berkomitmen untuk memberikan pengalaman</p>
            <p>pembelajaran terbaik bagi setiap siswa.</p>
        </div>
    </div>      
    <div class="flex flex-row m-[80px] mt-[120px]">
        <img src="{{ asset('Assets/Study.png')}}">
        <div class="ml-[80px] flex flex-col text-[28px] text-justify gap-[16px] items-center h-full my-12">
            <p>Dengan tim tutor berpengalaman dan berkualitas, Tutoran siap membantu Anda meraih potensi akademis terbaik.</p> 
            <p>Tutoran percaya bahwa setiap individu memiliki kemampuan untuk berhasil, dan kami berdedikasi untuk membimbing Anda dalam mencapai tujuan akademis Anda.</p>
        </div>
    </div>
    <div class="bg-white flex flex-col p-[80px]">
        <p class="text-[28px] text-justify tracking-tight">Tutoran didesain sebagai tempat yang ramah dan inklusif, di mana belajar menjadi menyenangkan dan memotivasi. Dengan pendekatan personal dan metode pembelajaran yang disesuaikan, Tutoran menempatkan kebutuhan Anda di garis depan setiap sesi pembelajaran.</p>
        <div class="flex flex-row gap-4 mt-8">    
            <img src="{{ asset('Assets/TeacherTeach.png')}}">
            <img src="{{ asset('Assets/TeacherTeach2.png')}}">
        </div>
    </div>
    <div class="flex flex-col text-black text-[40px] font-semibold px-[40px] py-[120px] text-center">
        <p>Bergabunglah dengan Tutoran hari ini dan temukan perbedaan</p> 
        <p>yang dapat kami buat dalam perjalanan pendidikan Anda!</p>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
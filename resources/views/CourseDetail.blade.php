<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Course Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="my-36 mx-64 px-16 py-8 flex flex-col justify-center shadow-md gap-4">
        <h1 class="text-center font-bold text-[32px] mb-4">{{ $course->Title }}</h1>
        <div class="flex flex-row mx-12 justify-between">
            <img src="{{ asset('/storage/Poster/'.$course->Poster) }}" class="w-[360px] h-[360px] bg-red-100">
            <div class="flex flex-col gap-8">
                <h2 class="font-medium text-[25px]">Detail Pembahasan:</h2>
                <ul class="text-[23px] list-disc list-inside">
                    <li>Apa Itu Tata Nama Senyawa Kimia?</li>
                    <li>Mengapa Tata Nama Senyawa Itu Penting?</li>
                    <li>Sistem Penamaan Senyawa Kimia Ada Berapa?</li>
                    <li>Tata Nama Senyawa Biner Anorganik</li>
                    <li>Tata Nama Senyawa Biner Organik</li>
                    <li>Tata Nama Senyawa Poliatomik Anorganik</li>
                    <li>Tata Nama Senyawa Poliatomik Organik</li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col mx-12">
            <form method="POST" action="{{ route('InsertCart', ['CourseID'=>$course->id]) }}" class="flex items-center justify-between">
                @csrf
                <div class="flex flex-col text-base font-regular">
                    <p>Mulai: {{ date('d/m/Y') }}</p>
                    <p>Akhir: {{ date('d/m/Y', strtotime('+1 year')) }}</p>
                </div>
                <button type="submit" class="flex flex-row px-4 py-2 justify-center bg-[#65668B] hover:bg-[#7981A2] text-base rounded-full text-white">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                    </svg>
                    Tambahkan
                </button>
            </form>
            <form action="{{ route('Payment', ['CourseID'=>$course->id]) }}" class="flex items-center justify-between">
                @csrf
                <p class="font-medium text-[18px] text-black">Rp {{ number_format($course->Price, 2, ',', '.') }}</p>
                <button type="submit" class="py-2 px-5 items-center bg-[#65668B] hover:bg-[#7981A2] text-base rounded-full text-white">Beli Sekarang</button>
            </form>
        </div>
    </div>
    @include('Component.Footer')
</body>
</html>
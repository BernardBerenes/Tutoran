<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Sub Topic</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="min-h-[90vh]">
        <div class="py-8 px-4 mx-auto max-w-4xl lg:py-16">
            @if (!$course->isEmpty())
                <form class="">   
                    <label for="search-course" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative flex justify-center items-center">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search-course" class="block w-full p-4 ps-10 text-lg text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9]focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Kursus" required/>
                        <button type="submit" class="absolute end-2.5 bottom-2.5 px-5 py-2 ml-5 bg-[#65668B] hover:bg-[#7981A2] font-bold rounded-full text-white">Search</button>
                    </div>
                </form>
                {{-- <img src="{{ asset('Assets/empty-img/empty-not-found.png')}}" class="object-cover mx-auto h-96 mt-28"> --}}
            @endif
            <div class="grid gap-4 grid-rows-3 gap-6 mt-12">
                @foreach ($course as $c)
                    <a href="{{ route('CourseDetailPage', ['CourseID'=>$c->id]) }}" class="grid grid-cols-4 border border-gray-300 shadow-md">
                        <img src="{{ asset('/storage/Poster/Course/'.$c->Poster) }}" class="object-cover w-[235px] h-[216px]" alt="">
                        <div class="grid grid-row-5 col-span-3 flex flex-col p-4">
                            <p class="text-[30px] font-medium text-black">{{ $c->Title }}</p>
                            <p class="mb-3 text-base font-normal text-black ">oleh {{ $c->Tutor->Name }}</p>
                            <form method="POST" action="{{ route('InsertCart', ['CourseID'=>$c->id]) }}" class="flex items-center justify-between">
                                @csrf
                                <div class="flex flex-col text-base font-regular">
                                    <p>Mulai: {{ date('d/m/Y') }}</p>
                                    <p>Akhir: {{ date('d/m/Y', strtotime('+1 year')) }}</p>
                                </div>
                                @if (auth('student')->check() || auth()->guest())
                                    <button class="flex flex-row w-32 justify-center px-2 py-2 bg-[#65668B] hover:bg-[#7981A2] text-base rounded-full text-white">
                                        <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/>
                                        </svg>
                                        Tambahkan
                                    </button>
                                @endif
                            </form>
                            <div class="flex items-center justify-between">
                                <p class="font-medium text-[18px] text-black">Rp {{ number_format($c->Price, 2, ',', '.') }}</p>
                                @if (auth('student')->check() || auth()->guest())
                                    <object class="flex justify-center w-32 px-2 py-2 bg-[#65668B] hover:bg-[#7981A2] text-base rounded-full text-white">
                                        <a href="{{ route('PaymentPage', ['Menu'=>'course', 'ItemID'=>$c->id]) }}" class="">Beli Sekarang</a>
                                    </object>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
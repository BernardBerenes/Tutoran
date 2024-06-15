<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>My Course List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="min-h-[90vh] flex flex-col justify-between">
        <div class="pt-8 px-4 mx-96 lg:pt-16">
            @if (!$course->isEmpty())
                <form method="GET" action="{{ route('MyCourseListPage') }}">   
                    <label for="search-course" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="search-course" class="block w-full p-4 ps-10 text-lg text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9]focus:ring-blue-500 focus:border-blue-500" placeholder="Cari Course" name="courseToFind"/>
                        <button type="submit" class="absolute end-2.5 bottom-2.5 px-5 py-2 ml-5 bg-[#65668B] hover:bg-[#7981A2] font-bold rounded-full text-white">Search</button>
                    </div>
                </form>
            @endif
            <div class="grid gap-6 mt-12">
                @if ($course->isEmpty())
                    <img src="{{ asset('Assets/empty-img/empty-my-course-list.png') }}" class="w-1/4 mx-auto mt-32" alt="empty-cart">
                @endif
                {{-- <img src="{{ asset('Assets/empty-img/empty-not-found.png')}}" class="object-cover mx-auto h-96 my-10"> --}}
                @foreach ($course as $c)
                    <a href="{{ route('CourseDetailPaymentPage', ['CourseID'=>$c->id]) }}" class="flex flex-row border border-gray-300 shadow-md hover:bg-gray-200">
                        <img src="{{ asset('/storage/Poster/'.$c->Poster) }}" class="object-cover w-[120px] h-[120px] m-4" alt="">
                        <div class="flex flex-col w-full m-4">
                            <h2 class="text-[24px] font-medium mt-4">{{ $c->Title }}</h2>
                            <p class="mt-3 text-base font-light">{{ auth('student')->check() ? 'Oleh '.$c->Name : $c->Subject->SubjectName }}</p>
                            <p class="flex justify-end font-light">Ditambahkan pada: {{ \Carbon\Carbon::parse($c->created_at)->format('d M Y') }}
                            </p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex justify-between m-8">
            <a href="{{ auth('student')->check() ? route('SubTopicPage', ['SubjectName'=>'all']) : route('AddCoursePage') }}">
                <svg class="w-[100px] h-[100px] text-[#65668B] hover:text-[#7981A2]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                  </svg>
            </a>  
            <a href="#" class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#65668B] mr-4 hover:bg-[#7981A2]">
                <svg class="w-[50px] h-[50px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
            </a>            
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Subject</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-x-hidden">
    @include('Component.Navbar')
    <div class="flex flex-col">
        <img src="{{ asset('Assets/Banner.png') }}">
        <div class="flex flex-row bg-white min-h-screen mt-16 mx-40 justify-between">
            <div class="flex flex-col mr-16">
                <div class="flex flex-row">
                    <form action="" id="class-form">
                        <select id="class" class="flex items-center justify-center bg-gray-200 border-none rounded-full p-4 w-[170px] h-[55px] text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300" name="grade">
                            @if (!$grade)
                                <option class="bg-white" selected>Pilih Kelas</option>
                            @endif
                            <option value="SD" class="bg-white" {{ $grade == 'SD' ? 'selected' : '' }}>SD</option>
                            <option value="SMP" class="bg-white" {{ $grade == 'SMP' ? 'selected' : '' }}>SMP</option>
                            <option value="SMK" class="bg-white" {{ $grade == 'SMK' ? 'selected' : '' }}>SMK</option>
                            <option value="SMA" class="bg-white" {{ $grade == 'SMA' ? 'selected' : '' }}>SMA</option>
                        </select>
                    </form>
                    <form action="" id="curriculum-form">
                        <select id="curriculum" class="flex items-center justify-center bg-gray-200 border-none rounded-full p-4 ml-8 w-[170px] h-[55px] text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300" name="curriculum">
                            <option value="Kurikulum" class="bg-white" selected>Kurikulum</option>
                            <option value="SD" class="bg-white">SD</option>
                            <option value="SMP" class="bg-white">SMP</option>
                            <option value="SMK" class="bg-white">SMK</option>
                            <option value="SMA" class="bg-white">SMA</option>
                        </select>
                    </form>
                </div>
                <div class="grid grid-cols-3 gap-8 mt-8">
                    @foreach ($subject as $s)
                        <a href="{{ route('SubTopicPage', ['SubjectName'=>$s->SubjectName]) }}" class="flex flex-col items-center justify-center w-[150px] h-[150px] border border-gray-300 rounded-xl shadow-lg hover:border-gray-600 focus:ring-4 focus:outline-none focus:ring-gray-300">
                            <img src="{{ asset('Assets/Subject Poster/' . $s->SubjectName . '.png') }}">
                            <p>{{ $s->SubjectName }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
            <div>
                <h1 class="text-[50px] font-bold">Daftar Tutor</h1>
                <hr class="border border-gray-300 w-[540px]">
                <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto w-[540px] h-[490px] my-10 pr-4">
                    @foreach ($topTutor as $top)
                        <a href="{{ route('TutorDetailPage', ['TutorID'=>$top->id]) }}" class="grid grid-row-2 border border-gray-300 rounded-lg w-[480px] h-[225px] shadow-md hover:bg-gray-50">
                            <div class="grid grid-cols-4">
                                <img src="{{ asset('/storage/Profile Picture/Tutor/'.$top->Image) }}" class="object-cover w-[90px] h-[90px] m-4 rounded-full" alt="">
                                <div class="flex flex-col col-span-3 mt-4 ml-2 mr-8 text-justify">
                                    <p class="text-[24px] font-bold text-black">{{ $top->Name }}</p>
                                    <p class="mb-3 text-[14px] font-light text-black ">{{ $top->Background}}</p>
                                    <div class="flex flex-row my-4">
                                        <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                        </svg>           
                                        <p class="text-base ml-2">{{ $top->Rating ? $top->Rating : '-' }}/5  (67)</p>                       
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="flex items-center justify-end">
                    <a href="{{ route('TutorListPage') }}" class="flex items-center justify-center w-[190px] h-[50px] px-5 py-2.5 mr-16 text-[25px] font-semibold text-center text-white bg-[#65668B] hover:bg-[#7981A2] rounded-full focus:ring-4 focus:ring-[#7981A2]">List Tutor</a>
                </div>
            </div>
        </div>
    </div> 
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document.getElementById('class').addEventListener('change', function () {
            var selectedValue = this.value;
            var form = document.getElementById('class-form');
            console.log(selectedValue);
            form.submit();
        });
        document.getElementById('curriculum').addEventListener('change', function () {
            var selectedValue = this.value;
            var form = document.getElementById('curriculum-form');
            console.log(selectedValue);
            form.submit();
        });
    </script>
</body>
</html>
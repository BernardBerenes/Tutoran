<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Rating Tutor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="flex flex-row ml-16 p-16">
        <img src="{{ asset('/storage/Profile Picture/Tutor/'.$tutor->Image) }}" class="w-[483px] h-[720px] object-cover bg-no-repeat"/>
        <div class="flex flex-col my-8 ml-16 ">
            <h1 class="text-[48px] font-bold">{{ $tutor->Name }}</h1>
            <h3 class="text-[30px] font-medium">{{ $course->Title }}</h3>
            <hr class="w-[80%] h-[2px] my-4 bg-gray-200 border-0 bg-gray-700">
            <h2 class="text-[30px] font-bold mt-8">Seberapa puas Anda dengan tutor ini?</h2>
            <form method="POST" action="{{ route('UpdateTutorRating', ['CourseID'=>$course->id]) }}" class="flex flex-col my-4 gap-4">
                @method('PATCH')
                @csrf
                <div class="grid grid-cols-2">
                    <div class="flex flex-row justify-end">
                        <label class="text-[25px] font-medium">Kemampuan mengajar (1-5)</label>
                        <div class="flex items-center">
                            <svg class="w-[30px] h-[25px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input type="number" class="w-[186px] h-[33px] ml-4 p-4 text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9] focus:ring-blue-500 focus:border-blue-500 items-center" placeholder="Masukkan Angka" name="rating_1">
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-row justify-end">
                        <label class="text-[25px] font-medium">Interaktif dan proaktif (1-5)</label>
                        <div class="flex items-center">
                            <svg class="w-[30px] h-[25px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> 
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input type="number" class="w-[186px] h-[33px] ml-4 p-4 text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9] focus:ring-blue-500 focus:border-blue-500 items-center" placeholder="Masukkan Angka" name="rating_2">
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-row justify-end">
                        <label class="text-[25px] font-medium">Memotivasi (1-5)</label>
                        <div class="flex items-center">
                            <svg class="w-[30px] h-[25px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> 
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input type="number" class="w-[186px] h-[33px] ml-4 p-4 text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9] focus:ring-blue-500 focus:border-blue-500 items-center" placeholder="Masukkan Angka" name="rating_3">
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="flex flex-row justify-end">
                        <label class="text-[25px] font-medium">Kreatif (1-5)</label>
                        <div class="flex items-center">
                            <svg class="w-[30px] h-[25px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg> 
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input type="number" class="w-[186px] h-[33px] ml-4 p-4 text-gray-900 border border-gray-300 rounded-full bg-[#D9D9D9] focus:ring-blue-500 focus:border-blue-500 items-center" placeholder="Masukkan Angka" name="rating_4">
                    </div>
                </div>
                <button class="w-[80%] text-center items-center py-2 text-[25px] mt-8 font-medium text-white bg-[#65668B] border border-gray-300 rounded-full hover:bg-[#7981A2]">Terapkan</button>
            </form>
            <p class="text-[20px]">Mohon periksa kembali sebelum submit, terima kasih!</p>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
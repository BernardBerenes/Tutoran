<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Forum Discussion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function forumInput() {
            var inputField = document.getElementById('popup');
            var addForumBtn = document.getElementById('addForumBtn');
            inputField.classList.toggle('hidden');
            addForumBtn.classList.toggle('hidden');
        }
    </script>
</head>
<body>
    @include('Component.Navbar')
    <div>
        <div class="py-16 px-4 mx-auto max-w-6xl"> 
            <div class="flex justify-between">
                <button id="dropdownButton1" data-dropdown-toggle="dropdownKelas" class="text-gray-400 mt-4 bg-[#D9D9D9] hover:bg-[#BDBFC5] focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-full text-[#999999] text-base px-5 py-2.5 text-center inline-flex items-center border border-gray-50" type="button">Terbaru 
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdownKelas" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Terbaru</a></li>
                    <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">Terlama</a></li>
                </ul>
                <div class="flex flex-col">
                    <button id="addForum" onclick=forumInput() class="w-[150px] h-[50px] bg-[#65668B] hover:bg-[#7981A2] font-semibold rounded-2xl text-[20px] text-white">Tambah</button>
                </div>
            </div>
            <form method="POST" action="{{ route('AddForumQuestion') }}">
                @csrf
                <textarea id="popup" rows="4" class="hidden bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[100px] p-2.5 mb-5 mt-16 resize-none" placeholder="Tulis pertanyaanmu disini" name="question"></textarea>
                @error('question')
                    <p class="text-red-400">{{ $message }}</p>
                @enderror
                <button id="addForumBtn" class="hidden w-[150px] h-[50px] bg-[#65668B] hover:bg-[#7981A2] font-semibold rounded-2xl text-[20px] text-white">Tambahkan</button>
            </form>
            <div class="grid gap-4 grid-cols-2 gap-6 mt-12">
                @foreach ($question as $q)
                    <a href="{{ route('ForumDiscussionDetailPage', ['QuestionID'=>$q->id]) }}" class="flex flex-col border border-gray-300 rounded-lg shadow-md">
                        <div class="flex flex-row my-4 mx-8">
                            <img src="{{ asset('/storage/Profile Picture/Student/'.$q->Student->Image) }}" class="object-cover w-[60px] h-[60px] mr-8 rounded-full border-[1px] border-solid border-gray-300" alt="">
                            <div class="flex-col">
                                <h2 class="text-2xl font-medium text-black">{{ $q->Student->Name }}</h2>    
                                <h2 class="text-base font-light text-black">{{ strftime('%e %B %Y', strtotime($q->created_at)) }}</h2>
                            </div>
                        </div>
                        <div class="flex flex-col justify-between">
                            <p class="mx-8 text-justify text-[22px] font-medium">{{ $q->Question }}</p>
                            <div class="flex justify-end">
                                <p class="text-base my-4 mx-8">2 jawaban</p>
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
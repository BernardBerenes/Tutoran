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
                <form method="GET" action="{{ route('ForumDiscussionPage') }}" id="sorting-form">
                    <select id="sorting" class="flex items-center bg-gray-200 border-none rounded-3xl py-3 px-4 text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300" name="sorting">
                        <option value="newest" class="bg-white" {{ $sorting == 'newest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="latest" class="bg-white" {{ $sorting == 'latest' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </form>
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
    <script>
        document.getElementById('sorting').addEventListener('change', function () {
            var selectedValue = this.value;
            var form = document.getElementById('sorting-form');
            console.log(selectedValue);
            form.submit();
        });
    </script>
</body>
</html>
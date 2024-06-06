<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Forum Discussion Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="px-36 py-24 flex flex-col gap-12">
        <div class="flex flex-col">
            <div class="flex flex-row my-4">
                <img src="{{ asset('/storage/Profile Picture/'.($forumQuestion->StudentID ? 'Student/'.$forumQuestion->Student->Image : 'Tutor/'.$forumQuestion->Tutor->Image)) }}" class="object-cover w-[60px] h-[60px] mr-8 rounded-full" alt="">
                <div class="flex-col">
                    <h2 class="text-2xl font-medium {{ $forumQuestion->StudentID ? 'text-black' : 'text-[#0F4C82]'}}">{{ $forumQuestion->StudentID ? $forumQuestion->Student->Name : $forumQuestion->Tutor->Name }}</h2>    
                    <h2 class="text-base font-light text-black">{{ strftime('%e %B %Y', strtotime($forumQuestion->created_at)) }}</h2>    
                </div>
            </div>
            <p class="my-4 text-justify text-[22px] font-medium">{{ $forumQuestion->Question }}</p> 
        </div>
        <div class="flex flex-row">
            <img src="{{ asset('/storage/Profile Picture/'.session('Roles').'/'.auth(strtolower(session('Roles')))->user()->Image) }}" class="object-cover w-[60px] h-[60px] rounded-full" alt="">
            <form method="POST" action="{{ route('AddForumAnswer', ['QuestionID'=>$forumQuestion->id]) }}" class="flex flex-col w-full">
                @csrf
                <textarea id="popup" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-[100px] p-2.5 mx-4 mb-4 resize-none" placeholder="Tulis jawabanmu disini" name="answer"></textarea>    
                <div class="flex justify-end">
                    <button id="addForumBtn" class="w-[150px] h-[50px] bg-[#65668B] hover:bg-[#7981A2] font-semibold rounded-2xl text-[20px] text-white">Tambahkan</button>
                </div>   
            </form>
        </div>
        @if (!$forumAnswer->isEmpty())
            <hr class="h-px w-full bg-gray-200 border-0 bg-gray-700">
        @endif
        @foreach ($forumAnswer as $answer)
            <div class="flex flex-col relative">
                <div class="flex flex-row my-4">
                    <img src="{{ asset('/storage/Profile Picture/'.($answer->StudentID ? 'Student/'.$answer->Student->Image : 'Tutor/'.$answer->Tutor->Image)) }}" class="object-cover w-[60px] h-[60px] mr-8 rounded-full" alt="">
                    <div class="flex-col">
                        <h2 class="text-2xl font-medium grow {{ $answer->StudentID ? 'text-black' : 'text-[#0F4C82]'}}">{{ $answer->StudentID ? $answer->Student->Name : $answer->Tutor->Name }}</h2>    
                        <h2 class="text-base font-light text-black">{{ strftime('%e %B %Y', strtotime($answer->created_at)) }}</h2>    
                    </div>
                </div>
                <p class="my-4 text-justify text-[22px] font-medium">{{ $answer->Answer }}</p>
            </div>
        @endforeach
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
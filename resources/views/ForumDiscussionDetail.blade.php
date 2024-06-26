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
            <div class="flex flex-row my-4 relative">
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
                @error('answer')
                    <p>{{ $message }}</p> 
                @enderror
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
                    @if (auth(strtolower(session('Roles')))->check())
                        @if (auth('student')->user())
                            @if ($answer->StudentID == auth('student')->user()->id)
                                <div class="absolute right-0 top-4 z-50 cursor-pointer toggle-button" type="button" onclick="toggleActionMenu(this); event.stopPropagation();">
                                    <svg class="w-8 h-8 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01"/>
                                    </svg>
                                </div>
                                <form method="POST" action="{{ route('DeleteForumAnswer', ['QuestionID' => $QuestionID,  'AnswerID'=>$answer->id]) }}" class="absolute flex flex-col bg-white top-0 right-0 mr-6 mt-3  hidden actionButton" onclick="event.stopPropagation();">
                                    @method('DELETE')
                                    @csrf
                                    <button class="p-2 cursor-pointer rounded-md text-white bg-red-500 hover:bg-red-600">Delete</button>
                                </form>
                            @endif
                        @else
                            @if ($answer->TutorID == auth('tutor')->user()->id)
                                <div class="absolute right-0 top-4 z-50 cursor-pointer toggle-button" type="button" onclick="toggleActionMenu(this); event.stopPropagation();">
                                    <svg class="w-8 h-8 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M12 6h.01M12 12h.01M12 18h.01"/>
                                    </svg>
                                </div>
                                <form method="POST" action="{{ route('DeleteForumAnswer', ['QuestionID' => $QuestionID,  'AnswerID'=>$answer->id]) }}" class="absolute flex flex-col bg-white top-0 right-0 mr-6 mt-3  hidden actionButton" onclick="event.stopPropagation();">
                                    @method('DELETE')
                                    @csrf
                                    <button class="p-2 cursor-pointer rounded-md text-white bg-red-500 hover:bg-red-600">Delete</button>
                                </form>
                            @endif
                        @endif
                    @endif
                </div>
                <p class="my-4 text-justify text-[22px] font-medium">{{ $answer->Answer }}</p>
            </div>
        @endforeach
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function toggleActionMenu(button) {
            document.querySelectorAll('.actionButton').forEach(function(menu) {
                if (menu !== button.nextElementSibling) {
                    menu.classList.add('hidden');
                }
            });
            var actionButton = button.nextElementSibling;
            actionButton.classList.toggle('hidden');
        }
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.actionButton') && !event.target.closest('.toggle-button')) {
                document.querySelectorAll('.actionButton').forEach(function(menu) {
                    menu.classList.add('hidden');
                });
            }
        });
    </script>
</body>
</html>
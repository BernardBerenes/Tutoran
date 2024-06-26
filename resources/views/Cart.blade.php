<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="grid grid-row-2 min-h-[90vh]">
        <div class="py-14 px-28 flex flex-col">
            <p class="font-semibold text-5xl mb-10">Keranjang Belanja</p>
            @if($course->isEmpty())
                <img src="{{ asset('Assets/empty-img/empty-cart.png') }}" class="w-1/4 mx-auto" alt="empty-cart">
            @else
                <div class="text-[28px] font-semibold grid grid-cols-8">
                    <p class="col-span-6">Kursus</p>
                    <p>Harga</p>
                </div>
                <hr class="h-px mt-8 bg-gray-200 border-0 bg-gray-700">
                @foreach ($course as $c)
                    <a href="{{ route('CourseDetailPage', ['CourseID'=>$c->id]) }}" class="grid grid-cols-8 hover:bg-gray-200 transition duration-200 ease-in-out p-8">
                        <img src="{{ asset('/storage/Poster/Course/'.$c->Poster) }}" class="w-32 h-32">
                        <div class="flex-row col-span-5 items-center">
                            <p class="text-[32px]">{{ $c->Title }}</p>
                            <p class="text-xl font-light">{{ $c->Lesson }}</p>
                            <p class="text-base font-medium">Oleh {{ $c->Tutor->Name }}</p>
                        </div>
                        <div class="flex flex-row col-span-2">
                            <form method="POST" action="{{ route('DeleteCart', ['CourseID'=>$c->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button href="">
                                    <svg class="w-[29px] h-[29px] stroke-current text-black hover:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                    </svg>
                                </button>
                            </form>
                            <p class="ml-2 font-medium text-2xl">Rp {{ number_format($c->Price, 2, ',', '.') }}</p>
                        </div>
                    </a>
                    <hr class="h-px bg-gray-200 border-0 bg-gray-700">
                @endforeach
                <div class="flex flex-row items-center mt-8">
                    <a href="{{ route('SubTopicPage', ['SubjectName'=>'all']) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[50px] h-[50px] text-[#65668B] hover:text-[#7981A2]">
                            <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                        </svg>                                                     
                    </a>
                    <p class="text-2xl text-[#65668B] font-medium ml-4">Tambah Kursus</p>
                </div>
            </div>
            @php
                $ids = implode('-', $course->pluck('id')->toArray())
            @endphp
            <div class="px-32 py-14 flex flex-col justify-between">
                <p class="text-[40px] font-medium">Total:</p>
                <p class="text-4xl font-medium">Rp {{ number_format($price, 2, ',', '.') }}</p>
                <a href="{{ route('PaymentPage', ['Menu'=>'course', 'ItemID'=>$ids]) }}" class="mt-5 inline-flex w-80 justify-center items-center px-3 py-3 text-xl font-bold text-center text-white bg-[#65668B] rounded-lg hover:bg-[#7981A2]">Checkout</a>
                <div class="ml-auto">
                    <a href="#" class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#65668B] hover:bg-[#7981A2]">
                        <svg class="w-[50px] h-[50px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            @endif
            @if ($course->isEmpty())
                <div class="flex justify-between mt-32">
                    <a href="{{ route('SubTopicPage', ['SubjectName'=>'all']) }}">
                        <svg class="w-[100px] h-[100px] text-[#65668B] hover:text-[#7981A2]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                    <a href="#" class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#65668B] hover:bg-[#7981A2]">
                        <svg class="w-[50px] h-[50px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                    </a>
                </div>
            @endif
        </div>
    </div>
    @include('Component.Footer')
</body>
</html>
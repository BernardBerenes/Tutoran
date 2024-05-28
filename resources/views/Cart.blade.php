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
            <img src="Assets/empty-img/empty-cart.png" class="w-1/4 mx-auto" alt="empty-cart">
            {{-- <div class="text-[28px] font-semibold grid grid-cols-8">
                <p class="col-span-6">Kursus</p>
                <p>Harga</p>
            </div>
            @foreach ($course as $c)
                <hr class="h-px my-8 bg-gray    -200 border-0 bg-gray-700">
                <div class="grid grid-cols-8">
                    <img src="{{ asset('/storage/Poster/'.$c->Poster) }}" class="w-32 h-32">
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
                </div>
                <hr class="h-px my-8 bg-gray-200 border-0 bg-gray-700">
            @endforeach
            <div class="flex flex-row items-center">
                <a href="{{ route('SubTopicPage', ['SubjectName'=>'all']) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[50px] h-[50px] text-[#65668B] hover:text-[#7981A2]">
                        <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 9a.75.75 0 0 0-1.5 0v2.25H9a.75.75 0 0 0 0 1.5h2.25V15a.75.75 0 0 0 1.5 0v-2.25H15a.75.75 0 0 0 0-1.5h-2.25V9Z" clip-rule="evenodd" />
                      </svg>                                                     
                </a>
                <p class="text-2xl text-[#65668B] font-medium ml-4">Tambah Kursus</p>
            </div>
        </div>
        <div class="px-32 py-14 flex flex-col justify-between">
            <p class="text-[40px] font-medium">Total:</p>
            <p class="text-4xl font-medium">Rp 358.000,00</p>
            <a href="#" class="mt-5 inline-flex w-80 justify-center items-center px-3 py-3 text-xl font-bold text-center text-white bg-[#65668B] rounded-lg hover:bg-[#7981A2]">Checkout</a>
            <hr class="h-px my-8 w-[412px] bg-gray-200 border-0 bg-gray-700">
            <form class="">
                <label for="" class="text-2xl font-medium">Kupon Promo</label>
                <div class="flex">
                    <input type="text" id="" class="rounded-l-lg" placeholder="Masukkan Kupon">
                    <button class="inline-flex items-center px-3 text-xl text-white bg-[#65668B] border border-gray-300 rounded-r-lg hover:bg-[#7981A2]">Terapkan</button>
                </div>
            </form>
            <a href="" class="ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-[80px] h-[80px] text-[#65668B] hover:text-[#7981A2]">
                    <path fill-rule="evenodd" d="M4.804 21.644A6.707 6.707 0 0 0 6 21.75a6.721 6.721 0 0 0 3.583-1.029c.774.182 1.584.279 2.417.279 5.322 0 9.75-3.97 9.75-9 0-5.03-4.428-9-9.75-9s-9.75 3.97-9.75 9c0 2.409 1.025 4.587 2.674 6.192.232.226.277.428.254.543a3.73 3.73 0 0 1-.814 1.686.75.75 0 0 0 .44 1.223ZM8.25 10.875a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25ZM10.875 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875-1.125a1.125 1.125 0 1 0 0 2.25 1.125 1.125 0 0 0 0-2.25Z" clip-rule="evenodd"/>
                </svg>                      
            </a> --}}
            <div class="flex justify-between mt-32">
                <a href="{{ route('AddCoursePage') }}">
                    <svg class="w-[100px] h-[100px] text-[#65668B] hover:text-[#7981A2]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                      </svg>
                </a>  
                <a href="#" class="flex items-center justify-center w-[100px] h-[100px] rounded-full bg-[#65668B] hover:bg-[#7981A2]">
                    <svg class="w-[50px] h-[50px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                </a>            
            </div>
        </div>
    </div>
    @include('Component.Footer')
</body>
</html>
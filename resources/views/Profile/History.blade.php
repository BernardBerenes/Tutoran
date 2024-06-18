<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>History</title>
</head>
<body class="overflow-hidden">
    @include('Component.Navbar')
    <div class="flex flex-row h-[90vh]">
        @include('Component.ProfileMenu')
        <div class="w-full flex justify-center relative">
            <div class="w-1/2 mt-12 flex flex-col">
                <h1 class="font-medium text-[40px] mb-7">Riwayat Pembelian</h1>
                @if ($history->isEmpty())
                    <img src="{{ asset('Assets/empty-img/empty-history.png')}}" class="object-cover mx-auto h-96 mt-28">
                @endif
                <form action="" id="history-filter" class="ml-auto">
                    <select id="history" class="flex items-center justify-center bg-gray-200 border-none rounded-full p-4 w-[170px] h-[55px] text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300" name="menu">
                        <option value="course" class="bg-white" {{ $menu == 'course' ? 'selected' : '' }}>Kursus</option>
                        <option value="membership" class="bg-white" {{ $menu == 'membership' ? 'selected' : '' }}>Membership</option>
                    </select>
                </form>
                <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto h-[540px] mt-8 pr-4">
                    @foreach ($history as $item)
                    <div class="flex flex-row border shadow-md">
                        <img src="{{ asset('/storage/Poster/'.($menu == 'course' ? 'Course/' : 'Membership/').$item->Poster) }}" class="w-[250px] h-[250px] bg-red-100">
                        <div class="flex flex-col p-4 justify-between ">
                            <div class="min-w-[380px]">
                                <h2 class="text-[20px] font-medium">{{ $menu == 'course' ? $item->Title : $item->MembershipName }}</h2>
                            </div>
                            <div class="text-base flex flex-col">
                                <p>Mulai: {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y') }}</p>
                                <p>Akhir: {{ \Carbon\Carbon::parse($item->created_at)->addYear()->format('d/m/Y') }}
                                </p>
                                <p class="text-[18px] font-medium ml-96">Rp {{ number_format($item->Price, 2, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a href="{{ route('SubTopicPage', ['SubjectName'=>'all']) }}" class="absolute left-8 bottom-8">
                    <svg class="w-[100px] h-[100px] text-[#65668B] hover:text-[#7981A2]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z" clip-rule="evenodd"/>
                      </svg>
                </a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('history').addEventListener('change', function () {
            var selectedValue = this.value;
            var form = document.getElementById('history-filter');
            console.log(selectedValue);
            form.submit();
        });
    </script>
</body>
</html>
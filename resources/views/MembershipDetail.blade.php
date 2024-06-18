<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>Membership Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="my-36 mx-64 px-16 py-8 flex flex-col justify-center shadow-md gap-4">
        <h1 class="text-center font-bold text-[32px] mb-4">{{ $membership->MembershipName }}</h1>
        <div class="flex flex-row mx-12 justify-between">
            <img src="{{ asset('/storage/Poster/Membership/'.$membership->Poster) }}" class="w-[360px] h-[360px] bg-red-100">
            <div class="flex flex-col gap-8">
                <h2 class="font-medium text-[25px]">Detail Pembahasan:</h2>
                <ul class="text-[23px] list-disc list-inside">
                    <li>Apa Itu Tata Nama Senyawa Kimia?</li>
                    <li>Mengapa Tata Nama Senyawa Itu Penting?</li>
                    <li>Sistem Penamaan Senyawa Kimia Ada Berapa?</li>
                    <li>Tata Nama Senyawa Biner Anorganik</li>
                    <li>Tata Nama Senyawa Biner Organik</li>
                    <li>Tata Nama Senyawa Poliatomik Anorganik</li>
                    <li>Tata Nama Senyawa Poliatomik Organik</li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col mx-12">
            @csrf
            <div class="flex flex-col text-base font-regular">
                <p>Mulai: {{ date('d/m/Y') }}</p>
                <p>Akhir: {{ date('d/m/Y', strtotime('+1 year')) }}</p>
            </div>
            <div class="flex items-center justify-between">
                @csrf
                <p class="font-medium text-[18px] text-black">Rp {{ number_format($membership->Price, 2, ',', '.') }}</p>
                @if (auth('student')->check() || auth()->guest())
                    <a href="{{ route('PaymentPage', ['Menu' => 'membership', 'ItemID' => $membership->id]) }}" class="py-2 px-5 items-center bg-[#65668B] hover:bg-[#7981A2] text-base rounded-full text-white">Beli Sekarang</a>
                @endif
            </div>
        </div>
    </div>
    @include('Component.Footer')
</body>
</html>
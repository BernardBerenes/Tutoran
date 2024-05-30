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
        <div class="w-full flex justify-center">
            <div class="w-1/2 mt-12 flex flex-col">
                <h1 class="font-medium text-[40px] mb-7">Riwayat Pembelian</h1>
                <div class="bg-[url('Assets/empty-img/empty-history.png')] w-1/2 h-1/2 z-10">

                </div>
                {{-- <form action="" id="history-filter" class="ml-auto">
                    <select id="history" class="flex items-center justify-center bg-gray-200 border-none rounded-full p-4 w-[170px] h-[55px] text-base font-light text-[#999999] hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300">
                        <option value="Kurikulum" class="bg-white" selected>Kurikulum</option>
                        <option value="Membership" class="bg-white">Membership</option>
                    </select>
                </form>
                <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto h-[540px] mt-8 pr-4">
                    <div class="flex flex-row border shadow-md">
                        <img src="" class="w-[250px] h-[250px] bg-red-100">
                        <div class="flex flex-col p-4 justify-between ">
                            <div class="min-w-[380px]">
                                <h2 class="text-[20px] font-medium">Membership Indonesia Pintar</h2>
                                <h2 class="text-[20px] font-medium">Membership Indonesia Pintar</h2>
                            </div>
                            <div class="text-base flex flex-col">
                                <p>Mulai: 26/02/2024</p>
                                <p>Akhir: 26/03/2024</p>
                                <p class="text-[18px] font-medium ml-auto">Rp 199.000,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row border shadow-md">
                        <img src="" class="w-[250px] h-[250px] bg-red-100">
                        <div class="flex flex-col p-4 justify-between ">
                            <div class="min-w-[380px]">
                                <h2 class="text-[20px] font-medium">Membership Indonesia Pintar</h2>
                                <h2 class="text-[20px] font-medium">Membership Indonesia Pintar</h2>
                            </div>
                            <div class="text-base flex flex-col">
                                <p>Mulai: 26/02/2024</p>
                                <p>Akhir: 26/03/2024</p>
                                <p class="text-[18px] font-medium ml-auto">Rp 199.000,00</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-row border shadow-md">
                        <img src="" class="w-[250px] h-[250px] bg-red-100">
                        <div class="flex flex-col p-4 justify-between ">
                            <div class="min-w-[380px]">
                                <h2 class="text-[20px] font-medium">Membership Indonesia Pintar</h2>
                                <h2 class="text-[20px] font-medium">Membership Indonesia Pintar</h2>
                            </div>
                            <div class="text-base flex flex-col">
                                <p>Mulai: 26/02/2024</p>
                                <p>Akhir: 26/03/2024</p>
                                <p class="text-[18px] font-medium ml-auto">Rp 199.000,00</p>
                            </div>
                        </div>
                    </div> 
                </div>--}}
            </div>
        </div>
    </div>
    <script>
        document.getElementById('history').addEventListener('change', function () {
            var selectedValue = this.value;
            var form = document.getElementById('history-filter');
            console.log(selectedValue);
            // form.submit();
        });
    </script>
</body>
</html>
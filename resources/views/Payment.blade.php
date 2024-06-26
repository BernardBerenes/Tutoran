<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Payment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        var loadFile = function (event) {
            var image = document.getElementById("output");
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</head>
<body>
    @include('Component.Navbar')
    <div class="flex flex-row px-12 py-36 gap-8">
        <div class="flex flex-col w-1/2">
            <label for="payment" class="font-semibold text-[28px]">Pilih Metode Pembayaran</label>
            
            <button id="dropdownRadioBgHoverButton1" data-dropdown-toggle="dropdownRadioBgHover1" class="text-black bg-white border border-gray-300 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-lg text-[16px] font-semibold px-5 py-2.5 text-center inline-flex items-center justify-between" type="button">E-Wallet<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
            </button>
            <div id="dropdownRadioBgHover1" class="z-10 hidden w-[47%] bg-white divide-y divide-gray-100 rounded-lg shadow border border-gray-300">
                <ul class="grid grid-cols-2 p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioBgHoverButton1">
                    <li>
                        <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-1').click();">
                            <input id="default-radio-1" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/Dana.png') }}" name="paymentOption">
                            <div class="flex flex-col">
                                <img src="{{ asset('Assets/Payment/Dana.png') }}" class="w-[300px] h-[150px]" alt="Dana Wallet">
                                <label for="default-radio-1" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">Dana Wallet</label>
                            </div>
                        </div>
                    </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-2').click();">
                        <input id="default-radio-2" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/OVO.png') }}" name="paymentOption">
                        <div class="flex flex-col">
                            <img src="{{ asset('Assets/Payment/OVO.png') }}" class=" w-full h-[150px]" alt="">
                            <label for="default-radio-2" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">OVO</label>    
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-3').click();">
                        <input id="default-radio-3" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/QRIS.png') }}" name="paymentOption">
                        <div class="flex flex-col">
                            <img src="{{ asset('Assets/Payment/QRIS.png') }}" class=" w-[300px] h-[150px]" alt="">
                            <label for="default-radio-3" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">QRIS</label>    
                        </div>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 gap-4 cursor-pointer" onclick="document.getElementById('default-radio-4').click();">
                        <input id="default-radio-4" type="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500" value="{{ asset('Assets/Payment/Gopay.png') }}" name="paymentOption">
                        <div class="flex flex-col">
                            <img src="{{ asset('Assets/Payment/Gopay.png') }}" class="w-[300px] h-[150px]" alt="">
                            <label for="default-radio-4" class="flex w-auto text-sm font-medium text-gray-900 rounded items-center justify-center">Gopay</label>    
                        </div>
                    </div>
                </li>
                </ul>
            </div>
        </div>
        <div class="flex flex-col w-1/2"> 
            <h3 class="font-semibold text-[28px]">Rincian Pembayaran</h3>
            <div class="flex flex-col border border-gray-800 divide-y divide-gray-800">
                <div class="flex flex-row justify-between p-8">
                    <p class="flex items-center justify-center text-[23px] font-semibold">PEMBAYARAN DARI</p>
                    <img src="{{ asset('Assets/img/Logo_Tutoran.png') }}" alt="" class="w-[250px] h-[70px]">
                </div>
                <div class="p-8">
                    <div class="flex justify-between font-medium text-[23px]">
                        <p>Nomor Pembayaran</p>
                        <p>{{ session('invoiceNumber') }}</p>
                    </div>
                    <div class="flex justify-between font-medium text-[23px] mt-2">
                        <p>Created</p>
                        <p>2024-03-25 17:41:09</p>
                    </div>
                    <div class="flex justify-between font-medium text-[23px]">
                        <p>Expiry</p>
                        <p>2024-03-25 22:41:09</p>
                    </div>
                    <div class="flex justify-between font-semibold text-[23px] mt-2 mb-8">
                        <p>Total</p>
                        <p class="text-[#65668B]">Rp {{ number_format(session('price'), 2, ',', '.') }}</p>
                    </div>
                    <form method="POST" action="{{ route('ApplyCoupon') }}" class="mx-auto flex justify-between">
                        @csrf
                        <p class="font-semibold text-[23px]">Kupon</p>
                        <div class="flex flex-col">
                            <div class="flex">
                                <input type="text" class="rounded-l-lg border border-gray-400 p-2" placeholder="Masukkan Kupon" value="{{ session('usedCoupon') }}" name="coupon">
                                <button class="inline-flex items-center px-3 text-xl text-white bg-[#65668B] border border-gray-300 rounded-r-lg hover:bg-[#7981A2]"><i class="bi bi-check-lg"></i></button>
                            </div>
                            @error('coupon')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </form>
                </div>   
                <div class="flex flex-row justify-between p-8">
                    <p class="flex items-center justify-center text-[19px]">PEMBAYARAN DENGAN</p>
                    <img src="{{ asset('Assets/img/Logo_Tutoran.png') }}" id="selectedPayment" class="w-[180px] h-[70px]">
                </div>
                <form method="POST" action="{{ $menu == 'course' ? route('CoursePayment', ['CourseID'=>$ids]) : route('MembershipPayment', ['MembershipID'=>$ids]) }}" class="w-full flex items-center justify-center">
                    @csrf
                    <input type="text" class="hidden" value="{{ session('usedCoupon') }}" name="coupon">
                    <button type="submit" class="flex w-[90%] p-2 m-5 items-center justify-center bg-[#65668B] hover:bg-[#7981A2] text-[21px] font-semibold rounded-md text-white">Bayar</button>
                </form>
            </div>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const radioButtons = document.querySelectorAll('input[name="paymentOption"]');
            const selectedImage = document.getElementById('selectedPayment');

            function updateImage() {
                const selectedValue = document.querySelector('input[name="paymentOption"]:checked').value;
                selectedImage.src = selectedValue;
            }

            radioButtons.forEach(radio => {
                radio.addEventListener('change', updateImage);
            });

            updateImage();
        });
    </script>
</body>
</html>
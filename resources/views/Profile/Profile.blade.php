<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>
<body class="overflow-hidden" onclick="disablePhoneNumberInput(event)">
    @include('Component.Navbar')
    <div class="flex flex-row h-screen ">
        @include('Component.ProfileMenu')
        <div class="w-full flex justify-center">
            <div class="w-1/2 mt-12 flex flex-col">
                <h1 class="font-medium text-4xl mb-7">Profil</h1>
                <form method="POST" action="{{ route('UpdateProfile') }}" class="flex flex-col gap-y-3">
                    @method('PATCH')
                    @csrf
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Nama</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg bg-gray-300 p-2" name="name" value="{{$user->Name}}" disabled >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Email</label>
                        <input type="text" class="rounded-lg h-12 border-gray-400 shadow-lg bg-gray-300 p-2" name="email" value="{{$user->Email}}" disabled >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Jenis Kelamin</label>
                        <select class="rounded-lg h-12 border-gray-400 shadow-lg p-2" name="gender">
                            @if (!$user->Gender)
                                <option selected>Pilih Jenis Kelamin</option>
                            @endif
                            <option value="M" {{ $user->Gender == 'M' ? 'selected' : ''}}>Laki-laki</option>
                            <option value="F"  {{ $user->Gender == 'F' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Tanggal Lahir</label>
                        <input type="date" class="rounded-lg h-12 border-gray-400 shadow-lg p-2" name="dob" value="{{ $user->DateOfBirth }}" >
                    </div>
                    <div class="flex flex-col">
                        <label class="font-medium text-2xl">Nomor HP</label>
                        <div class="relative">
                            <input type="number" id="phoneNumber" class="rounded-lg w-full h-12 border-gray-400 shadow-lg p-2" name="phoneNumber" disabled value="{{ $user->PhoneNumber }}">
                            <i class="absolute bi bi-pencil-square right-2 text-xl mt-2 cursor-pointer" onclick="enablePhoneNumberInput(event)"></i>
                        </div>
                        @error('phoneNumber')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    @if (auth('tutor')->check())
                        <div class="flex flex-col">
                            <label class="font-medium text-2xl">Latar Belakang</label>
                            <textarea rows="3" class="border border-gray-400 shadow-lg text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 resize-none" name="background">{{ $user->Background }}</textarea>
                        </div>
                    @endif
                    <button type="submit" class="bg-slate-500 rounded-md py-3 w-32 font-semibold text-white text-xl align">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        function enablePhoneNumberInput(event) {
            event.stopPropagation();
            const phoneNumberInput = document.getElementById('phoneNumber');
            phoneNumberInput.disabled = false;
            phoneNumberInput.focus();
            phoneNumberInput.select();
        }

        function disablePhoneNumberInput(event) {
            const phoneNumberInput = document.getElementById('phoneNumber');
            if (!phoneNumberInput.contains(event.target) && !event.target.classList.contains('bi-pencil-square')) {
                phoneNumberInput.disabled = true;
            }
        }
    </script>
</body>
</html>

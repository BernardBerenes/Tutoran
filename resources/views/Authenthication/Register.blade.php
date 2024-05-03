<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container bg-indigo-200 min-h-screen max-w-full flex">
        <div class="w-1/2 flex flex-col pt-28 justify-center items-center">
            <a href="{{ route('IndexPage') }}"><img src="{{ asset('/Assets/img/Logo_Tutoran.png') }}" alt=""></a>
            <img src="{{ asset('/Assets/204 1.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 bg-indigo-400 flex justify-center items-center">
            <form method="POST" action="{{ route('Register') }}" class="h-[90%] w-4/5 bg-white rounded-2xl p-12">
                @csrf
                <div class="text-4xl h-12 flex justify-around mb-10">
                    <a href="{{ route('LoginPage') }}">Masuk</a>
                    <a href="{{ route('RegisterPage') }}" class="underline underline-offset-8">Daftar</a>
                </div>
                <div>
                    <a href="#" class="w-full flex border border-black flex justify-center items-center text-xl font-medium rounded-3xl py-2 gap-5 mb-5">
                        <img src="{{ asset('/Assets/Logo google.png') }}" alt="">
                        <p>Lanjutkan dengan Google</p>
                    </a>
                    <a href="#" class="w-full flex border border-black flex justify-center items-center text-xl font-medium rounded-3xl py-2 gap-5 mb-7">
                        <img src="{{ asset('/Assets/Logo fb.png') }}" alt="">
                        <p>Lanjutkan dengan Facebook</p>
                    </a>
                </div>
                <div class="flex items-center justify-between mb-3">
                    <hr class="w-2/3 border-b border-gray-500">
                    <span class="mx-4">atau</span>
                    <hr class="w-2/3 border-b border-gray-500">
                </div>
                <div class="flex flex-col text-2xl mb-4">
                    <label class="mb-3 font-medium">Nama</label>
                    <input type="text" class="h-12 rounded-xl text-xl" value="{{ old('name') }}" name="name">
                    @error('name')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col text-2xl mb-4">
                    <label class="mb-3 font-medium">Email</label>
                    <input type="text" class="h-12 rounded-xl text-xl" value="{{ old('email') }}" name="email">
                    @error('email')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col text-2xl mb-4">
                    <label class="mb-3 font-medium">Kata Sandi</label>
                    <input type="password" class="h-12 rounded-xl text-xl" name="password">
                    @error('password')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col font-medium mb-8">
                    <div class="flex flex-row items-center gap-1">
                        <input type="checkbox" name="" id="">
                        <label for="">Ingatkan saya</label>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-indigo-400 rounded-full w-44 h-16 text-2xl text-white">Daftar</button>
                </div>
                <p class="text-center">Dengan mengklik Lanjutkan atau Daftar, Anda menyetujui <a href="" class="underline underline-offset-4">Ketentuan Pengguna tutoran</a> termasuk <a href="" class="underline underline-offset-4">Ketentuan Langganan</a> dan <a href="" class="underline underline-offset-4">Kebijakan Privasi</a></p>
            </form>
        </div>
    </div>
</body>
</html>
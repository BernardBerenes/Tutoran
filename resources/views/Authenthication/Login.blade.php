<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container bg-indigo-200 min-h-screen max-w-full flex">
        <div class="w-1/2 flex flex-col pt-28 justify-center items-center">
            <a href=""><img src="{{ asset('/Assets/Logo_Tutoran.png') }}" alt=""></a>
            <img src="{{ asset('/Assets/204 1.png') }}" alt="" class="w-full">
        </div>
        <div class="w-1/2 bg-indigo-400 flex justify-center items-center">
            <form method="POST" action="{{ route('Login') }}" class="h-4/5 w-4/5 bg-white rounded-2xl p-12">
                @csrf
                <div class="text-4xl h-12 flex justify-around mb-10">
                    <a href="{{ route('LoginPage') }}" class="underline underline-offset-8">Masuk</a>
                    <a href="{{ route('RegisterPage') }}">Daftar</a>
                </div>
                <div>
                    <a href="#" class="w-full flex border border-black flex justify-center items-center text-xl font-medium rounded-3xl py-2 gap-5 mb-5">
                        <img src="{{ asset('/Assets/Logo google.png') }}" alt="">
                        <p>Lanjutkan dengan Google</p>
                    </a>
                    <a href="#" class="w-full flex border border-black flex justify-center items-center text-xl font-medium rounded-3xl py-2 gap-5 mb-10">
                        <img src="{{ asset('/Assets/Logo fb.png') }}" alt="">
                        <p>Lanjutkan dengan Facebook</p>
                    </a>
                </div>
                <div class="flex items-center justify-between mb-6">
                    <hr class="w-2/3 border-b border-gray-500">
                    <span class="mx-4">atau</span>
                    <hr class="w-2/3 border-b border-gray-500">
                </div>
                <div class="flex flex-col text-2xl mb-4">
                    <label class="mb-3 font-medium">Email</label>
                    <input type="text" class="h-12 rounded-xl text-xl" name="email">
                    @error('Email')
                        <p>{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex flex-col text-2xl mb-4">
                    <label class="mb-3 font-medium">Kata Sandi</label>
                    <input type="password" class="h-12 rounded-xl text-xl" name="password">
                </div>
                <div class="flex flex-col font-medium">
                    <a href="" class="underline underline-offset-4 text-black mb-2">Lupa kata sandi?</a>
                    <div class="flex flex-row items-center gap-1">
                        <input type="checkbox" name="" id="">
                        <label for="">Ingatkan saya</label>
                    </div>
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-indigo-400 rounded-full w-44 h-16 text-2xl text-white">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
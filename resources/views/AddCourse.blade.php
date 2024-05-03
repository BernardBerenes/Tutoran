<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Add Course</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div>
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-3xl font-bold text-black">Tambah Kursus</h2>
            <form method="POST" action="{{ route('AddCourse') }}" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Judul</label>
                        <input type="text" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: Limit Fungsi dan Aljabar" name="title">
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Harga</label>
                        <input type="number" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: 100000" name="price">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="mataPelajaran" class="block mb-2 text-2xl font-medium text-black ">Mata Pelajaran</label>
                        <select id="mataPelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 shadow-md">
                            <option selected>Pilih Mata Pelajaran</option>
                            <option value="">Matematika Peminatan</option>
                            <option value="TV">Matematika</option>
                            <option value="PC">Biology</option>
                            <option value="GA">Fisika</option>
                            <option value="PH">Kimia</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Kurikulum</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 shadow-md" name="curriculum">
                            <option selected>Pilih Kurikulum</option>
                            <option value="ABC">Kurikulum Merdeka 1</option>
                            <option value="">Kurikulum Merdeka 2</option>
                            <option value="">Kurikulum Merdeka 3</option>
                            <option value="">Kurikulum Merdeka 4</option>
                            <option value="">Kurikulum Merdeka 5</option>
                        </select>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="gambarPoster" class="block mb-2 text-2xl font-medium text-black ">Gambar Poster</label>
                        <div class="flex items-center justify-center w-full shadow-md">
                            <label for="gambarPoster" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                </div>
                                <input type="file" id="gambarPoster" class="hidden" name="poster"/>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-[#65668B] hover:bg-[#7981A2] rounded-lg focus:ring-4 focus:ring-[#7981A2]">
                    Tambahkan
                </button>
            </form>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
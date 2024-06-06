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
                        @error('title')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Harga</label>
                        <input type="number" class="bg-white border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 shadow-md" placeholder="Contoh: 100000" name="price">
                        @error('price')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="mataPelajaran" class="block mb-2 text-2xl font-medium text-black ">Mata Pelajaran</label>
                        <select id="mataPelajaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 shadow-md" name="subject">
                            <option selected>Pilih Mata Pelajaran</option>
                            @foreach ($subject as $s)
                                <option value="{{ $s->SubjectName }}">{{ $s->SubjectName }}</option>
                            @endforeach
                        </select>
                        @error('subject')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="jenjang" class="block mb-2 text-2xl font-medium text-black ">Jenjang</label>
                        <select id="jenjang" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 shadow-md" name="grade">
                            <option selected>Pilih Jenjang</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                        </select>
                        @error('grade')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-2xl font-medium text-black ">Kurikulum</label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 shadow-md" name="curriculum">
                            <option selected>Pilih Kurikulum</option>
                            <option value="Kurikulum Merdeka">Kurikulum Merdeka</option>
                            <option value="Kurikulum KTSP">Kurikulum Tingkat Satuan Pendidikan (KTSP)</option>
                            <option value="Kurikulum 2013">K-13</option>
                        </select>
                        @error('curriculum')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex flex-col col-span-2">
                        <label for="detailCourse" class="block mb-2 text-2xl font-medium text-black ">Detail</label>
                        <textarea id="detailCourse" rows="4" class="flex sm:col-span-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-full h-[100px] p-2.5 mb-5 resize-none" placeholder="Tulis penjelasan disini" name="detail"></textarea>
                        @error('detail')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
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
                    <div class="sm:col-span-2">
                        <label for="videoCourse" class="block mb-2 text-2xl font-medium text-black ">Video</label>
                        <div class="flex items-center justify-center w-full shadow-md">
                            <label for="videoCourse" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                    <p class="text-xs text-gray-500">.MP4 or MOV</p>
                                </div>
                                <input type="file" id="videoCourse" class="hidden" name="video"/>
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
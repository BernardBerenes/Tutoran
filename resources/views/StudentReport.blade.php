<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Profile</title>
</head>
<body class="overflow-hidden">
    @include('Component.Navbar')
    <div class="flex flex-row h-screen">
        @include('Component.ProfileMenu')
        {{-- ini untuk tutor --}}
        <div class="w-full flex flex-col my-16 mx-40">
            <h2 class="text-[40px] font-medium">Laporan Siswa</h2>
            <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto p-8 h-[630px] my-10 border border-gray-200 shadow-md rounded-2xl">
                -- foreach mulai dari sini--
                <div class="flex flex-row justify-between px-4 py-4 mx-4 items-center rounded-lg border border-gray-300 shadow-md">
                    <div class="flex flex-col">
                        <p class="text-[20px]">Dicky Dharma Susanto</p>
                        <p class="text-[base] font-light">Sistem Persamaan Linear</p>
                    </div>
                    <div class="flex flex-row mr-12">
                        <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg>           
                          <p class="text-base ml-2">4/5</p>  
                    </div>
                </div>
            </div>
        </div>
        {{-- ini untuk role student yg dibawah ini --}}
        {{--<div class="w-full flex flex-col my-16 mx-40">
            <h2 class="text-[40px] font-medium">Laporan Siswa</h2>
            <div class="flex flex-col gap-y-8 p-8 h-[630px] my-10 border border-gray-200 shadow-md rounded-2xl">
                <div class="flex flex-col gap-y-8 overflow-x-hidden overflow-y-auto h-[350px] my-10  rounded-2xl">
                    foreach mulai dari sini
                    <div class="flex flex-row justify-between px-4 py-4 mx-4 items-center rounded-lg border border-gray-300 shadow-md">
                        <div class="flex flex-col">
                            <p class="text-[20px]">Dicky Dharma Susanto</p>
                            <p class="text-[base] font-light">Sistem Persamaan Linear</p>
                        </div>
                        <div class="flex flex-row mr-12">
                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                              </svg>           
                              <p class="text-base ml-2">4/5</p>  
                        </div>
                    </div>
                    <div class="flex flex-row justify-between px-4 py-4 mx-4 items-center rounded-lg border border-gray-300 shadow-md">
                        <div class="flex flex-col">
                            <p class="text-[20px]">Dicky Dharma Susanto</p>
                            <p class="text-[base] font-light">Sistem Persamaan Linear</p>
                        </div>
                        <div class="flex flex-row mr-12">
                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                              </svg>           
                              <p class="text-base ml-2">4/5</p>  
                        </div>
                    </div>
                    <div class="flex flex-row justify-between px-4 py-4 mx-4 items-center rounded-lg border border-gray-300 shadow-md">
                        <div class="flex flex-col">
                            <p class="text-[20px]">Dicky Dharma Susanto</p>
                            <p class="text-[base] font-light">Sistem Persamaan Linear</p>
                        </div>
                        <div class="flex flex-row mr-12">
                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                              </svg>           
                              <p class="text-base ml-2">4/5</p>  
                        </div>
                    </div>
                    <div class="flex flex-row justify-between px-4 py-4 mx-4 items-center rounded-lg border border-gray-300 shadow-md">
                        <div class="flex flex-col">
                            <p class="text-[20px]">Dicky Dharma Susanto</p>
                            <p class="text-[base] font-light">Sistem Persamaan Linear</p>
                        </div>
                        <div class="flex flex-row mr-12">
                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                              </svg>           
                              <p class="text-base ml-2">4/5</p>  
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <div class="flex flex-row justify-between px-4 py-4 mx-4 items-center rounded-lg border border-gray-300 shadow-md w-[30%]">
                        <p class="text-[20px] font-bold">Nilai rata-rata</p>
                        <div class="flex flex-row mr-4">
                            <svg class="w-6 h-6 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                              </svg>           
                              <p class="text-base ml-2">4/5</p>  
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
</body>
</html>
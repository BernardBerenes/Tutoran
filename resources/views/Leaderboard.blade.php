<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Rating Student Detail</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @include('Component.Navbar')
    <div class="bg-[#D6BBEB] p-24 min-h-[90vh]">
        <div class="flex flex-col items-center justify-center gap-y-24">
            <h1 class="text-[40px] font-bold">Leaderboard</h1>
            <div class="flex flex-row gap-x-16">
                <div class="flex flex-col">
                    <div class="flex flex-col justify-center w-[15em] mt-[8em]">
                        <div class="flex justify-center">
                            <img class="flex w-[12.5em] h-[12.5em] border border-white-300 border-4px rounded-full justify-center" src="">
                        </div>
                        <div class="flex justify-center">
                            <div class="flex justify-center bg-[#FF9900] rounded-full w-[3.75em] h-[3.75em] border border-white-100 border-[4px] mt-[-3em]">
                                <h1 class="text-[30px] font-bold">2</h1>  
                            </div>
                        </div>
                        <h2 class="text-center text-[20px] font-bold">Bernard Bereness</h2>
                        <div class="flex flex-row items-center gap-2">
                            <a href="" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-[#65668B] hover:bg-[#7981A2]">
                                <svg class="w-[15px] h-[15px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                            </a>
                            <div class="flex flex-row items-center">
                                <svg class="w-[30px] h-[30px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                  </svg>           
                                  <p class="text-[16px] ml-2">4.0/5.0 (97)</p>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col justify-center">
                        <div class="flex justify-center">
                            <img class="w-[16.5625em] h-[16.5625em] border border-white-300 border-4px rounded-full" src="">
                        </div>
                        <div class="flex justify-center">
                            <div class="flex justify-center bg-[#FF9900] rounded-full w-[5.375em] h-[5.375em] border border-white-100 border-[4px] mt-[-4em]">
                                <h1 class="text-[50px] font-bold">1</h1>  
                            </div>
                        </div>
                        <h2 class="text-center text-[24px] font-bold">Dicky Dharma Susanto</h2>
                        <div class="flex flex-row items-center">
                            <a href="" class="flex items-center justify-center w-[40px] h-[40px] rounded-full bg-[#65668B] mr-4 hover:bg-[#7981A2]">
                                <svg class="w-[20px] h-[20px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                            </a>
                            <div class="flex flex-row mr-12 items-center">
                                <svg class="w-[40px] h-[40px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                  </svg>           
                                  <p class="text-[1.25em] ml-2">4.0/5.0 (97)</p>  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="flex flex-col justify-center w-[15em] mt-[10em]">
                        <div class="flex justify-center">
                           <img class="flex justify-center w-[9.375em] h-[9.375em] border border-white-300 border-4px rounded-full" src=""> 
                        </div>
                        <div class="flex justify-center">
                            <div class="flex justify-center bg-[#FF9900] rounded-full w-[2.5em] h-[2.5em] border border-white-100 border-[4px] mt-[-2.1em]">
                                <h1 class="text-[22px] font-bold">3</h1>  
                            </div>
                        </div>
                        <h2 class="text-center text-[20px] font-bold">Bernard Bereness</h2>
                        <div class="flex flex-row items-center">
                            <a href="" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-[#65668B] mr-4 hover:bg-[#7981A2]">
                                <svg class="w-[15px] h-[15px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                            </a>
                            <div class="flex flex-row mr-12 items-center">
                                <svg class="w-[30px] h-[30px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                  </svg>           
                                  <p class="text-[1em] ml-2">4.0/5.0 (97)</p>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- foreach disini --}}
            <div class="flex justify-between bg-white w-[60%] px-4 py-4 mx-4 items-center rounded-2xl border border-gray-300 shadow-md">
                <div class="flex flex-row items-center gap-x-4 ">
                    <p class="text-[26px] font-medium ml-2">1</p>
                    <img class="w-[40px] h-[40px] border border-white-100 rounded-full" src="">
                    <h3 class="text-[30px] font-medium">Bernard Bereness</h3>
                </div>
                <div class="flex flex-row items-center">
                    <a href="" class="flex items-center justify-center w-[30px] h-[30px] rounded-full bg-[#65668B] mr-4 hover:bg-[#7981A2]">
                        <svg class="w-[15px] h-[15px] text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M4 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v2a1 1 0 0 0 1.707.707L9.414 13H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4Z" clip-rule="evenodd"/><path fill-rule="evenodd" d="M8.023 17.215c.033-.03.066-.062.098-.094L10.243 15H15a3 3 0 0 0 3-3V8h2a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1v2a1 1 0 0 1-1.707.707L14.586 18H9a1 1 0 0 1-.977-.785Z" clip-rule="evenodd"/></svg>
                    </a>
                    <div class="flex flex-row mr-8 items-center">
                        <svg class="w-[30px] h-[30px] text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                          </svg>           
                          <p class="text-[1em] ml-2">4.0/5.0 (97)</p>  
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('Component.Footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
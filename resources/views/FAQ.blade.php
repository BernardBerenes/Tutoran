<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <style>
            .accordion-content {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease-out;
            }
            .accordion-content.show {
                max-height: 500px;
                transition: max-height 0.3s ease-in;
            }
            </style>
        <title>FAQ</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        @include('Component.Navbar')
        <div class="text-center">
            <h1 class="font-bold text-[100px]">FAQs</h1>
        </div>
        <div class="">
            <div class="mx-auto max-w-[90rem] mt-8 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-row gap-24 justify-center max-lg:max-w-2xl mx-auto max-w-full">
                    <div class="w-full lg:w-1/2">
                        <img src="{{ asset('Assets/FAQ.jpeg') }}" class="w-full" />
                    </div>
                    <div class="w-full lg:w-1/2 transition-all duration-500">
                        <div class="max-w-4xl">
                            <div class="accordion-group mt-4 shadow-xl" data-accordion="default-accordion">
                                <div class="accordion border border-solid border-gray-200" id="basic-heading-one-with-arrow-always-open">
                                    <button class="p-4 accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition-all duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:font-medium always-open" aria-controls="basic-collapse-one-with-arrow-always-open" onclick="toggleAccordion('basic-collapse-one-with-arrow-always-open', this)">
                                        <h5 class="font-medium text-[20px] text-left">Bagaimana Anda melihat kontribusi forum diskusi dalam meningkatkan pengalaman belajar online Anda?</h5>
                                        <i class="bi bi-caret-down-fill accordion-icon w-[40px] text-gray-900 ml-4 transition duration-500 group-hover:text-indigo-600"></i>
                                    </button>
                                    <div id="basic-collapse-one-with-arrow-always-open" class="accordion-content w-full px-0" aria-labelledby="basic-heading-one-with-arrow-always-open">
                                        <p class="p-4 text-[20px] text-black bg-gray-100 text-justify">Forum diskusi memberikan kesempatan bagi saya untuk berinteraksi dengan sesama siswa dan tutor, berbagi pengalaman, dan memperdalam pemahaman saya tentang materi pelajaran. Saya dapat bertukar ide, menyelesaikan masalah bersama, dan mendapatkan sudut pandang baru tentang topik yang sedang dibahas. Selain itu, forum ini juga memberikan ruang untuk bertanya pertanyaan, mendapatkan umpan balik, dan memperluas jaringan sosial saya dalam konteks pendidikan. Dengan demikian, saya melihat forum diskusi sebagai sarana yang sangat berharga dalam mendukung pembelajaran online saya.</p>
                                    </div>
                                </div>
                                <div class="accordion border border-solid border-gray-200" id="basic-heading-two-with-arrow-always-open">
                                    <button class="p-4 accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition-all duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:font-medium always-open" aria-controls="basic-collapse-two-with-arrow-always-open" onclick="toggleAccordion('basic-collapse-two-with-arrow-always-open', this)">
                                        <h5 class="font-medium text-[20px] text-left">Bagaimana apabila kualitas layanan tutor tidak memenuhi harapan pengguna?</h5>
                                        <i class="bi bi-caret-down-fill accordion-icon w-[40px] text-gray-900 ml-4 transition duration-500 group-hover:text-indigo-600"></i>
                                    </button>
                                    <div id="basic-collapse-two-with-arrow-always-open" class="accordion-content w-full px-0" aria-labelledby="basic-heading-two-with-arrow-always-open">
                                        <p class="p-4 text-[20px] text-black bg-gray-100 text-justify">Kami akan menerapkan sistem evaluasi dan umpan balik untuk murid dan tutor. Respon cepat terhadap keluhan dan tindakan perbaikan berbasis umpan balik pelanggan.</p>
                                    </div>
                                </div>
                                <div class="accordion border border-solid border-gray-200" id="basic-heading-three-with-arrow-always-open">
                                    <button class="p-4 accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition-all duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:font-medium always-open" aria-controls="basic-collapse-three-with-arrow-always-open" onclick="toggleAccordion('basic-collapse-three-with-arrow-always-open', this)">
                                        <h5 class="font-medium text-[20px] text-left">Bagaimana cara menghindari terjadinya ketidaksetaraan dalam evaluasi dan rating tutor?</h5>
                                        <i class="bi bi-caret-down-fill accordion-icon w-[40px] text-gray-900 ml-4 transition duration-500 group-hover:text-indigo-600"></i>
                                    </button>
                                    <div id="basic-collapse-three-with-arrow-always-open" class="accordion-content w-full px-0" aria-labelledby="basic-heading-three-with-arrow-always-open">
                                        <p class="p-4 text-[20px] text-black bg-gray-100 text-justify">Kami akan menerapkan sistem evaluasi yang adil dan menyeluruh, serta memberikan peluang bagi tutor untuk memberikan tanggapan tentang penilaian mereka.
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion border border-solid border-gray-200" id="basic-heading-four-with-arrow-always-open">
                                    <button class="p-4 accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 text-gray-600 w-full transition-all duration-500 hover:text-indigo-600 accordion-active:text-indigo-600 accordion-active:font-medium always-open" aria-controls="basic-collapse-four-with-arrow-always-open" onclick="toggleAccordion('basic-collapse-four-with-arrow-always-open', this)">
                                        <h5 class="font-medium text-[20px] text-left">Bagaimana aplikasi kami dapat membantu meningkatkan kualitas pendidikan di Indonesia melalui penyediaan tutor berkualitas yang memiliki sertifikasi guru atau izin praktik mengajar?</h5>
                                        <i class="bi bi-caret-down-fill accordion-icon w-[40px] text-gray-900 ml-4 transition duration-500 group-hover:text-indigo-600"></i>
                                    </button>
                                    <div id="basic-collapse-four-with-arrow-always-open" class="accordion-content w-full px-0" aria-labelledby="basic-heading-four-with-arrow-always-open">
                                        <p class="p-4 text-[20px] text-black bg-gray-100 text-justify">Aplikasi kami membantu meningkatkan kualitas pendidikan di Indonesia dengan menyediakan akses mudah dan cepat ke tutor berkualitas yang memiliki sertifikasi guru atau izin praktik mengajar. Dengan demikian, kami membantu memastikan bahwa setiap sesi pembelajaran yang  melalui aplikasi kami memenuhi standar pendidikan yang tinggi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Component.Footer')
        <script>
            function toggleAccordion(id, button) {
                const content = document.getElementById(id);
                const isOpen = content.classList.contains("show");

                const allContents =
                    document.querySelectorAll(".accordion-content");
                allContents.forEach((item) => {
                    item.classList.remove("show");
                });

                const allIcons = document.querySelectorAll(".accordion-icon");
                allIcons.forEach((icon) => {
                    icon.classList.remove("rotate-180");
                });

                if (!isOpen) {
                    content.classList.add("show");
                    const accordionIcon =
                        button.querySelector(".accordion-icon");
                    accordionIcon.classList.add("rotate-180");
                }
            }
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('Style/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Lowongan Kerja Tutor</title>
</head>
<body>
    @include('Component.Navbar')
    <div class="flex flex-row">
        <div class="w-1/2 flex flex-col mx-20">
            <h1 class="font-bold text-[56px] mt-12 mb-6">
                Lowongan Kerja Tutor
            </h1>
            <p class="text-justify text-[20px]">
                Dengan Tutoran, peluang menjadi tutor tidak pernah semudah
                ini. Apakah Anda mencari pekerjaan sebagai tutor di
                Indonesia, ingin mengajar secara online, mencari posisi di
                bidang pendidikan, atau merasa cocok sebagai tutor
                berpengalaman, Tutoran hadir untuk memenuhi semua kebutuhan
                anda.
            </p>
            <br />
            <p class="text-justify text-[20px]">
                Raih penghasilan besar dan nikmati kebebasan menjadi bos
                untuk diri Anda sendiri. Sediakan kursus di rumah atau
                temukan peluang mengajar privat online dengan ribuan siswa
                berpotensi di seluruh Indonesia melalui jaringan kami.
            </p>
            <br />
            <p class="text-justify text-[20px]">
                Kami yakin bahwa setiap individu memiliki keterampilan untuk
                menjadi tutor yang luar biasa. Bergabunglah dengan Tutoran,
                jadilah tutor, dan bagikan hasrat, semangat, dan pengetahuan
                Anda dengan mereka yang ingin belajar!
            </p>

            <div class="mt-10 flex flex-col gap-8">
                <p class="font-medium text-[35px]">
                    Gali Potensi Anda Dengan Mengirimkan CV Anda
                </p>
                <div class="flex flex-row items-center gap-4">
                    <img src="{{ asset('Assets/Email.png') }}" alt="" />
                    <p class="text-[28px]">tutoran@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="bg-center bg-cover bg-no-repeat opacity-70">
            <img src="{{ asset('Assets/lokerBG.png') }}" class="object-cover w-[770px] h-[800px]"/>
        </div>
    </div>
    @include('Component.Footer')
</body>
</html>

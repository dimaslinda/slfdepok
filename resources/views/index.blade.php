<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <header>

        <nav class="bg-white">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="/"
                    class="flex items-center italic uppercase font-ubuntu font-bold text-footer text-xl 2xl:text-2xl space-x-3">
                    jasa <span class="text-tombol mx-1">slf</span> depok
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="https://wa.me/62851175466634" target="_blank"
                        class="text-white font-poppins uppercase bg-tombol hover:bg-[#ff9900] font-bold rounded-lg text-sm px-5 md:px-10 py-2 text-center">
                        kontak
                    </a>
                </div>
            </div>
        </nav>

    </header>

    <section class="flex flex-col md:flex-row items-center bg-white overflow-hidden">
        <div class="relative
        md:w-1/2 w-full h-72 md:h-80 lg:h-auto 2xl:h-[600px]">
            <img src="{{ asset('img/general/bg-about.webp') }}" alt="SLF" class="object-cover w-full h-full" />
            <!-- Overlay gradient putih di sebelah kanan, tanpa blur -->
            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/40 to-white"></div>
        </div>
        <div class="md:w-1/2 w-full absolute flex flex-col justify-center md:relative items-start p-8 md:bg-white">
            <h2
                class="font-poppins font-bold text-2xl md:text-3xl lg:text-5xl xl:text-6xl text-footer md:text-banner mb-4 leading-tight">
                SLF UNTUK <br>
                MENINGKATKAN <br>
                KEAMANAN DAN <br>
                LEGALITAS BISNIS ANDA
            </h2>
            <a href="https://wa.me/62851175466634" target="_blank"
                class="mt-4 inline-block bg-tombol hover:bg-[#ff9900] text-white font-poppins font-semibold rounded-lg px-6 py-2 text-sm xl:text-xl shadow-2xl drop-shadow-2xl transition">
                HUBUNGI SEKARANG
            </a>
        </div>
    </section>

    <section class="bg-[#F1FAFA] py-10">
        <div class="container mx-auto p-6">
            <div class="flex flex-col md:flex-row">
                <div class="flex-1 p-0 md:p-8">
                    <div class="2xl:text-lg font-poppins mb-2 text-tombol w-fit">
                        About SLF
                        <div class="mt-1 w-10 h-1 bg-tombol rounded"></div>
                    </div>
                    <div class="text-2xl font-bold capitalize font-inter mb-5 2xl:text-3xl">
                        apa itu sertifikat laik fungsi (SLF)
                    </div>
                    <div class="font-poppins text-[#515151] text-justify 2xl:text-xl leading-relaxed">
                        SLF adalah Sertifikat Laik Fungsi. Dokumen resmi yang diterbitkan oleh pemerintah atau otoritas
                        terkait untuk menunjukkan bahwa suatu bangunan atau properti telah memenuhi persyaratan dan
                        standar yang ditetapkan untuk digunakan sesuai dengan fungsinya.
                    </div>
                </div>
                <div class="flex-1 flex items-center justify-center">
                    <img src="{{ asset('img/general/profile.webp') }}" alt="profile">
                </div>
            </div>
        </div>
    </section>

    <section class="relative bg-[url('../../public/img/general/bg-alasan.webp')] bg-no-repeat bg-cover h-auto">
        <div class="container px-6 py-20 mx-auto lg:px-60 2xl:px-96">
            <div class="flex flex-col justify-center">
                <div
                    class="mb-10 text-xl font-bold text-center uppercase md:text-left font-inter lg:text-2xl lg:leading-normal 2xl:text-4xl 2xl:leading-normal">
                    <span class="px-1 text-white bg-judul">5 Alasan</span>
                    Mengapa Jasa SLF penting untuk
                    <span class="px-1 text-white bg-judul">bisnis</span> atau <span
                        class="px-1 text-white bg-judul">properti anda</span> ?
                </div>
                <ul class="pl-5 font-bold list-decimal text-paragraph font-poppins">
                    <li class="pl-2 mb-5 md:pl-10">
                        <h4 class="mb-4 text-xl italic capitalize">
                            untuk legalitas dan kepatuhan
                        </h4>
                        <p class="font-normal leading-normal text-justify">
                            Memiliki SLF merupakan bukti bahwa bisnis atau properti tersebut beroperasi secara sah dan
                            mematuhi peraturan yang berlaku
                        </p>
                    </li>
                    <li class="pl-2 mb-5 md:pl-10">
                        <h4 class="mb-4 text-xl italic capitalize">
                            kepercayaan pelanggan
                        </h4>
                        <p class="font-normal leading-normal text-justify">
                            Pelanggan akan merasa lebih nyaman dan yakin menggunakan layanan atau menghuni properti yang
                            telah melewati proses audit dan mendapatkan sertifikasi resmi
                        </p>
                    </li>
                    <li class="pl-2 mb-5 md:pl-10">
                        <h4 class="mb-4 text-xl italic capitalize">
                            keamanan dan kenyamanan
                        </h4>
                        <p class="font-normal leading-normal text-justify">
                            Sertifikat Laik Fungsi memastikan bahwa bangunan atau properti telah melalui pemeriksaan
                            yang ketat untuk memastikan keamanan dan kenyamanan bagi penghuninya.
                        </p>
                    </li>
                    <li class="pl-2 mb-5 md:pl-10">
                        <h4 class="mb-4 text-xl italic capitalize">
                            Nilai properti
                        </h4>
                        <p class="font-normal leading-normal text-justify">
                            Sertifikat ini menunjukkan bahwa bangunan atau properti telah memenuhi standar yang tinggi
                            dalam hal kualitas, keamanan, dan keandalan.
                        </p>
                    </li>
                    <li class="pl-2 md:pl-10">
                        <h4 class="mb-4 text-xl italic capitalize">
                            persyaratan hukum dan perizinan
                        </h4>
                        <p class="font-normal leading-normal text-justify">
                            Tanpa SLF yang valid, bisnis atau properti dapat menghadapi konsekuensi hukum dan
                            administratif yang serius, termasuk sanksi atau larangan penggunaan.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="relative bg-[#f1fafa]">
        <div class="container mx-auto p-6">
            <div class="text-center text-footer text-2xl font-bold mb-10 capitalize font-poppins md:text-4xl">
                syarat pengajuan SLF
            </div>

            <div class="flex flex-col gap-5 px-10 lg:px-32 lg:flex-row">
                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1e1e1e] font-poppins text-2xl font-semibold">
                            persyaratan administratif
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 rounded-lg shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-[#515151] font-poppins">
                            <li>
                                Fotokopi KTP dan KK pemohon
                            </li>
                            <li>
                                Fotokopi Surat Pemberitahuan Pajak Terhutang Pajak Bumi dan Bangunan (SPPT PBB) terbaru
                            </li>
                            <li>
                                Fotokopi Surat pernyataan penguasaan fisik bidang tanah (SHM, SHGB, AJB, dll.)
                            </li>
                            <li>
                                Fotokopi Izin Mendirikan Bangunan (IMB)
                            </li>
                            <li>
                                Fotokopi Surat pernyataan telah menyelesaikan pembangunan
                            </li>
                            <li>
                                Surat pernyataan kesanggupan untuk mentaati persyaratan laik fungsi
                            </li>
                            <li>
                                Fotokopi NPWP (opsional)
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex flex-col w-full gap-5 lg:w-1/2">
                    <div class="w-full p-10 text-center rounded-lg shadow-2xl drop-shadow-2xl">
                        <h3 class="text-[#1e1e1e] font-poppins text-2xl font-semibold">
                            Persyaratan Teknis
                        </h3>
                    </div>
                    <div class="w-full h-full px-10 py-10 rounded-lg shadow-2xl md:px-20 drop-shadow-2xl">
                        <ul class="space-y-2 list-disc text-[#515151] font-poppins">
                            <li>
                                Gambar rencana teknis bangunan
                            </li>
                            <li>
                                Hasil pengujian kelaikan fungsi bangunan dari tim ahli
                            </li>
                            <li>
                                Rekomendasi teknis dari Dinas Pemadam Kebakaran
                            </li>
                            <li>
                                Rekomendasi teknis dari Dinas Kesehatan
                            </li>
                            <li>
                                Sertifikat laik operasi (SLO) untuk bangunan tertentu (misalnya, lift, genset, dll.)
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative">
        <div class="container mx-auto">
            <div class="flex flex-col-reverse md:flex-row">
                <div class="w-full py-20 pl-6 lg:px-20 2xl:px-32">
                    <div
                        class="mb-2 text-xl font-bold leading-normal uppercase lg:leading-normal lg:text-3xl text-judul font-poppins">
                        Segera konsultasikan Sertifikat Laik fungsi Anda sekarang!
                    </div>
                    <div class="mb-5 font-semibold font-poppins text-[#1e1e1e]">
                        Temukan solusi penerbitan dengan layanan yang profesional, optimis, tuntas dan solutif dari
                        kami.
                    </div>

                    <div class="flex w-full">
                        <a href="https://wa.me/62851175466634" target="_blank"
                            class="flex items-center self-center justify-center w-3/4 px-5 py-3 space-x-2 text-center transition-all rounded-full bg-tombol group hover:scale-105 hover:drop-shadow-2xl hover:shadow-2xl hover:shadow-tombol">
                            <div class="text-xl font-semibold text-white uppercase lg:text-2xl font-poppins">
                                konsultasi sekarang
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-10 pt-1" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="evenodd" stroke="none" stroke-width="1"
                                    stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                    stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                    font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(8,8)">
                                        <path
                                            d="M24.50391,7.50391c-2.25781,-2.25781 -5.25781,-3.50391 -8.45312,-3.50391c-6.58594,0 -11.94922,5.35938 -11.94922,11.94531c-0.00391,2.10547 0.54688,4.16016 1.59375,5.97266l-1.69531,6.19141l6.33594,-1.66406c1.74219,0.95313 3.71094,1.45313 5.71094,1.45703h0.00391c6.58594,0 11.94531,-5.35937 11.94922,-11.94922c0,-3.19141 -1.24219,-6.19141 -3.49609,-8.44922zM16.05078,25.88281h-0.00391c-1.78125,0 -3.53125,-0.48047 -5.05469,-1.38281l-0.36328,-0.21484l-3.76172,0.98438l1.00391,-3.66406l-0.23437,-0.375c-0.99609,-1.58203 -1.51953,-3.41016 -1.51953,-5.28516c0,-5.47266 4.45703,-9.92578 9.9375,-9.92578c2.65234,0 5.14453,1.03516 7.01953,2.91016c1.875,1.87891 2.90625,4.37109 2.90625,7.02344c0,5.47656 -4.45703,9.92969 -9.92969,9.92969zM21.49609,18.44531c-0.29687,-0.14844 -1.76562,-0.87109 -2.03906,-0.96875c-0.27344,-0.10156 -0.47266,-0.14844 -0.67187,0.14844c-0.19922,0.30078 -0.76953,0.97266 -0.94531,1.17188c-0.17187,0.19531 -0.34766,0.22266 -0.64453,0.07422c-0.30078,-0.14844 -1.26172,-0.46484 -2.40234,-1.48437c-0.88672,-0.78906 -1.48828,-1.76953 -1.66016,-2.06641c-0.17578,-0.30078 -0.01953,-0.46094 0.12891,-0.60937c0.13672,-0.13281 0.30078,-0.34766 0.44922,-0.52344c0.14844,-0.17187 0.19922,-0.29687 0.30078,-0.49609c0.09766,-0.19922 0.04688,-0.375 -0.02734,-0.52344c-0.07422,-0.14844 -0.67187,-1.62109 -0.92187,-2.21875c-0.24219,-0.58203 -0.48828,-0.5 -0.67187,-0.51172c-0.17187,-0.00781 -0.37109,-0.00781 -0.57031,-0.00781c-0.19922,0 -0.52344,0.07422 -0.79687,0.375c-0.27344,0.29688 -1.04297,1.01953 -1.04297,2.48828c0,1.46875 1.07031,2.89063 1.21875,3.08984c0.14844,0.19531 2.10547,3.21094 5.10156,4.50391c0.71094,0.30859 1.26563,0.49219 1.69922,0.62891c0.71484,0.22656 1.36719,0.19531 1.88281,0.12109c0.57422,-0.08594 1.76563,-0.72266 2.01563,-1.42187c0.24609,-0.69531 0.24609,-1.29297 0.17188,-1.41797c-0.07422,-0.125 -0.27344,-0.19922 -0.57422,-0.35156z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <img loading="lazy" src="{{ asset('img/general/konsultasi.webp') }}" alt="konsultasi">
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="mt-auto font-poppins">
        <footer class="bg-footer shadow antialiased">
            <div class="container p-4 mx-auto">
                <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <div class="flex justify-center mx-auto">
                            <div class="grid justify-between grid-cols-1 gap-6 sm:grid-cols-2 lg:flex lg:flex-row">
                                <div class="lg:max-w-[50%]">
                                    <h2
                                        class="flex items-center italic uppercase font-ubuntu font-bold text-white text-xl 2xl:text-2xl space-x-3">
                                        jasa <span class="text-tombol mx-1">slf</span> depok
                                    </h2>
                                    <div class="my-3 w-20 h-1 bg-tombol rounded"></div>
                                    <ul class="text-gray-600 dark:text-gray-400">
                                        <li class="mb-4">
                                            <div class="text-white">
                                                Hubungi Kami Untuk Mendapatkan SLF Gratis Konsultasi.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lg:max-w-[50%]">
                                    <h2 class="mb-6 text-lg font-semibold text-tombol">
                                        Informasi Kontak
                                        <div class="my-1 w-20 h-1 bg-tombol rounded"></div>
                                    </h2>
                                    <ul class="text-gray-600 dark:text-gray-400">
                                        <li class="mb-2">
                                            <div class="text-white flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none">
                                                    <path
                                                        d="M1.125 6.50244V12.9374C1.125 13.5342 1.36205 14.1065 1.78401 14.5284C2.20597 14.9504 2.77826 15.1874 3.375 15.1874H14.625C15.2217 15.1874 15.794 14.9504 16.216 14.5284C16.6379 14.1065 16.875 13.5342 16.875 12.9374V6.50244L10.179 10.6222C9.82443 10.8403 9.4163 10.9558 9 10.9558C8.5837 10.9558 8.17557 10.8403 7.821 10.6222L1.125 6.50244Z"
                                                        fill="white" />
                                                    <path
                                                        d="M16.875 5.181V5.0625C16.875 4.46576 16.6379 3.89347 16.216 3.47151C15.794 3.04955 15.2217 2.8125 14.625 2.8125H3.375C2.77826 2.8125 2.20597 3.04955 1.78401 3.47151C1.36205 3.89347 1.125 4.46576 1.125 5.0625V5.181L8.4105 9.6645C8.58778 9.77357 8.79185 9.83132 9 9.83132C9.20815 9.83132 9.41222 9.77357 9.5895 9.6645L16.875 5.181Z"
                                                        fill="white" />
                                                </svg>
                                                marketing@rekanusa.co.id
                                            </div>
                                        </li>
                                        <li>
                                            <div class="flex gap-2 text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 20 20" fill="none">
                                                    <path
                                                        d="M15.8749 4.09155C15.1109 3.31982 14.2009 2.70794 13.198 2.2916C12.195 1.87525 11.1192 1.66277 10.0333 1.66655C5.48325 1.66655 1.77492 5.37489 1.77492 9.92489C1.77492 11.3832 2.15825 12.7999 2.87492 14.0499L1.70825 18.3332L6.08325 17.1832C7.29158 17.8416 8.64992 18.1916 10.0333 18.1916C14.5833 18.1916 18.2916 14.4832 18.2916 9.93322C18.2916 7.72489 17.4333 5.64989 15.8749 4.09155ZM10.0333 16.7916C8.79992 16.7916 7.59159 16.4582 6.53325 15.8332L6.28325 15.6832L3.68325 16.3666L4.37492 13.8332L4.20825 13.5749C3.52304 12.4807 3.1592 11.2159 3.15825 9.92489C3.15825 6.14155 6.24158 3.05822 10.0249 3.05822C11.8583 3.05822 13.5833 3.77489 14.8749 5.07489C15.5145 5.71152 16.0213 6.46877 16.3661 7.30274C16.7108 8.13671 16.8866 9.03081 16.8833 9.93322C16.8999 13.7166 13.8166 16.7916 10.0333 16.7916ZM13.7999 11.6582C13.5916 11.5582 12.5749 11.0582 12.3916 10.9832C12.1999 10.9166 12.0666 10.8832 11.9249 11.0832C11.7833 11.2916 11.3916 11.7582 11.2749 11.8916C11.1583 12.0332 11.0333 12.0499 10.8249 11.9416C10.6166 11.8416 9.94992 11.6166 9.16658 10.9166C8.54992 10.3666 8.14158 9.69155 8.01658 9.48322C7.89992 9.27489 7.99992 9.16655 8.10825 9.05822C8.19992 8.96655 8.31659 8.81655 8.41659 8.69989C8.51659 8.58322 8.55825 8.49155 8.62492 8.35822C8.69159 8.21655 8.65825 8.09989 8.60825 7.99989C8.55825 7.89989 8.14158 6.88322 7.97492 6.46655C7.80825 6.06655 7.63325 6.11655 7.50825 6.10822H7.10825C6.96658 6.10822 6.74992 6.15822 6.55825 6.36655C6.37492 6.57489 5.84159 7.07489 5.84159 8.09155C5.84159 9.10822 6.58325 10.0916 6.68325 10.2249C6.78325 10.3666 8.14158 12.4499 10.2083 13.3416C10.6999 13.5582 11.0833 13.6832 11.3833 13.7749C11.8749 13.9332 12.3249 13.9082 12.6833 13.8582C13.0833 13.7999 13.9083 13.3582 14.0749 12.8749C14.2499 12.3916 14.2499 11.9832 14.1916 11.8916C14.1333 11.7999 14.0083 11.7582 13.7999 11.6582Z"
                                                        fill="white" />
                                                </svg>
                                                +62 851-1754-6634
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="lg:max-w-[50%]">
                                    <h2 class="mb-6 text-lg font-semibold text-tombol">
                                        Sosial Media
                                        <div class="my-1 w-15 h-1 bg-tombol rounded"></div>
                                    </h2>
                                    <ul
                                        class="flex flex-row gap-3 font-medium text-gray-600 dark:text-gray-400 lg:justify-between">
                                        <a href="https://www.facebook.com/PT-Kinarya-Kompegriti-Rekanusa-103244125241983"
                                            target="_blank"
                                            class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                                viewBox="0 0 27 27" fill="none">
                                                <path
                                                    d="M13.5635 26.6513C6.25603 26.6513 0.311523 20.7068 0.311523 13.3999C0.311523 6.09294 6.25603 0.147949 13.5635 0.147949C20.8704 0.147949 26.8149 6.09294 26.8149 13.3999C26.8149 20.7068 20.8699 26.6513 13.5635 26.6513ZM13.5635 1.57156C7.04067 1.57156 1.73514 6.87758 1.73514 13.3999C1.73514 19.9217 7.04116 25.2277 13.5635 25.2277C20.0853 25.2277 25.3908 19.9217 25.3908 13.3999C25.3908 6.87807 20.0848 1.57156 13.5635 1.57156Z"
                                                    fill="white" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M11.4869 13.46V21.1403C11.4869 21.251 11.5767 21.3404 11.687 21.3404H14.539C14.6497 21.3404 14.7391 21.2505 14.7391 21.1403V13.3347H16.8065C16.9109 13.3347 16.9973 13.2551 17.0061 13.1517L17.2047 10.7997C17.2149 10.6832 17.1226 10.5826 17.0056 10.5826H14.7391V8.91384C14.7391 8.52249 15.0557 8.20592 15.447 8.20592H17.0406C17.1513 8.20592 17.2406 8.11658 17.2406 8.00587V5.6539C17.2406 5.5432 17.1508 5.45386 17.0406 5.45386H14.3477C12.7673 5.45386 11.4864 6.73472 11.4864 8.31516V10.5826H10.0599C9.9492 10.5826 9.85986 10.6725 9.85986 10.7827V13.1347C9.85986 13.2454 9.94968 13.3347 10.0599 13.3347H11.4864V13.46H11.4869Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                        <a href="https://www.youtube.com/channel/UCANa1f9qaHiBLl99354fg1A"
                                            target="_blank"
                                            class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27"
                                                viewBox="0 0 28 27" fill="none">
                                                <path
                                                    d="M14.1775 26.6514C6.87005 26.6514 0.925537 20.7064 0.925537 13.3994C0.925537 6.09247 6.87005 0.147949 14.1775 0.147949C21.4844 0.147949 27.4289 6.09247 27.4289 13.3994C27.4289 20.7064 21.4844 26.6514 14.1775 26.6514ZM14.1775 1.57108C7.65469 1.57108 2.34914 6.8771 2.34914 13.3989C2.34914 19.9207 7.65517 25.2273 14.1775 25.2273C20.6998 25.2273 26.0053 19.9212 26.0053 13.3989C26.0053 6.87662 20.6993 1.57108 14.1775 1.57108Z"
                                                    fill="white" />
                                                <path
                                                    d="M22.1169 11.3827C22.1169 9.50312 20.5928 7.97949 18.7133 7.97949H9.88658C8.00752 7.97949 6.4834 9.50312 6.4834 11.3827V15.5195C6.4834 17.399 8.00752 18.9227 9.88658 18.9227H18.7133C20.5928 18.9227 22.1169 17.399 22.1169 15.5195V11.3827ZM16.5477 13.6594L13.0276 15.5904C12.8746 15.6729 12.7367 15.5622 12.7367 15.3884V11.4254C12.7367 11.2491 12.8785 11.1384 13.0314 11.2258L16.5759 13.2583C16.7327 13.3467 16.706 13.5734 16.5477 13.6594Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                        <a href="https://www.instagram.com/rekanusa_konsultan/" target="_blank"
                                            class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27"
                                                viewBox="0 0 28 27" fill="none">
                                                <path
                                                    d="M13.7913 26.6513C6.48424 26.6513 0.539307 20.7064 0.539307 13.3999C0.539307 6.09337 6.48424 0.147949 13.7913 0.147949C21.0978 0.147949 27.0427 6.09288 27.0427 13.3999C27.0427 20.7069 21.0978 26.6513 13.7913 26.6513ZM13.7913 1.40692C7.17824 1.40692 1.79829 6.78687 1.79829 13.3999C1.79829 20.0129 7.17824 25.3929 13.7913 25.3929C20.4038 25.3929 25.7842 20.0129 25.7842 13.3999C25.7842 6.78687 20.4038 1.40692 13.7913 1.40692ZM18.2592 8.02336C17.7177 8.02336 17.2783 8.46225 17.2783 9.00376C17.2783 9.54528 17.7172 9.98415 18.2592 9.98415C18.8003 9.98415 19.2396 9.54528 19.2396 9.00376C19.2396 8.46225 18.8008 8.02336 18.2592 8.02336ZM13.9002 9.28038C11.6291 9.28038 9.78072 11.1283 9.78072 13.3994C9.78072 15.6705 11.6286 17.5184 13.9002 17.5184C16.1709 17.5184 18.0193 15.6705 18.0193 13.3994C18.0193 11.1283 16.1709 9.28038 13.9002 9.28038ZM13.9002 16.0386C12.4448 16.0386 11.2616 14.8548 11.2616 13.3999C11.2616 11.9449 12.4453 10.7612 13.9002 10.7612C15.3552 10.7612 16.5384 11.9449 16.5384 13.3999C16.5384 14.8548 15.3547 16.0386 13.9002 16.0386ZM22.2111 9.97633C22.2111 7.20181 19.9615 4.95218 17.187 4.95218H10.5563C7.78133 4.95218 5.53169 7.20181 5.53169 9.97633V16.6079C5.53169 19.3825 7.78181 21.6321 10.5563 21.6321H17.187C19.962 21.6321 22.2111 19.3825 22.2111 16.6079V9.97633ZM20.6384 16.6079C20.6384 18.5135 19.093 20.0584 17.187 20.0584H10.5563C8.65029 20.0584 7.10541 18.5135 7.10541 16.6079V9.97633C7.10541 8.07077 8.6498 6.52589 10.5563 6.52589H17.187C19.0925 6.52589 20.6384 8.07077 20.6384 9.97633V16.6079Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                        <a href="https://www.instagram.com/rekanusa_konsultan/" target="_blank"
                                            class="text-white group hover:text-[#030f27] transition-all transform ease-in-out delay-75 duration-75">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27"
                                                viewBox="0 0 27 27" fill="none">
                                                <path
                                                    d="M13.2519 26.5034C5.94451 26.5034 0 20.5584 0 13.2515C0 5.94452 5.94451 0 13.2519 0C20.5589 0 26.5034 5.94452 26.5034 13.2515C26.5034 20.5584 20.5589 26.5034 13.2519 26.5034ZM13.2519 1.42313C6.72915 1.42313 1.4236 6.72915 1.4236 13.251C1.4236 19.7728 6.72964 25.0793 13.2519 25.0793C19.7743 25.0793 25.0798 19.7733 25.0798 13.251C25.0798 6.72867 19.7738 1.42313 13.2519 1.42313Z"
                                                    fill="white" />
                                                <path
                                                    d="M17.1071 7.50667C16.4968 6.813 16.1605 5.92216 16.1607 5H13.4018V16.0222C13.3805 16.6187 13.1276 17.1837 12.6962 17.5982C12.2649 18.0127 11.6888 18.2444 11.0893 18.2444C9.82143 18.2444 8.76786 17.2133 8.76786 15.9333C8.76786 14.4044 10.25 13.2578 11.7768 13.7289V10.92C8.69643 10.5111 6 12.8933 6 15.9333C6 18.8933 8.46429 21 11.0804 21C13.8839 21 16.1607 18.7333 16.1607 15.9333V10.3422C17.2795 11.1421 18.6226 11.5712 20 11.5689V8.82222C20 8.82222 18.3214 8.90222 17.1071 7.50667Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>

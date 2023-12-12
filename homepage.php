<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/asset.css">

</head>

<body>
    <?php include("components-navbar.php"); ?>
    <div class="relative top-[160px] pb-10 px-10 sm:px-16 md:px-24 lg:px-28 flex flex-col gap-8">
        <div class="bg-[#fff] w-full rounded-3xl py-5 px-7 pb-9 flex flex-col gap-2 max-[390px]:gap-1.5 max-[390px]:rounded-2xl sm:gap-4">
            <div>
                <h1 class="text-[26px] font-bold text-[#1AB188] truncate sm:text-[32px] max-[390px]:text-[18px] ">Pengumuman</h1>
            </div>
            <div class="px-4 flex flex-col gap-2 max-[390px]:px-1.5 sm:gap-5">
                <section>
                    <div>
                        <h3 class="font-medium text-lg truncate sm:text-2xl max-[390px]:text-sm ">[Untuk Guru]</h3>
                    </div>
                    <div>
                        <ul class="list-disc pl-8 text-[14px] max-[390px]:text-xs max-[390px]:pl-6 sm:text-[20px] ">
                            <li>Selama masa pembelajaran, aktivitas IMPORT, BACKUP, dan RESTORE tidak bisa digunakan pada hari Senin-Kamis pukul 06.00 - 15.00 WIB</li>
                            <li>Panduan Peenambahan Simulasi Interaktif PHET ke dalam kelas untuk mendukung kelas: Link</li>
                            <li>Panduan IMPORT MATERI untuk penggandaan konten kelas: Link</li>
                        </ul>
                    </div>
                </section>
                <section>
                    <div>
                        <h3 class="font-medium text-lg max-[390px]:text-sm sm:text-2xl">[Untuk Siswa]</h3>
                    </div>
                    <div>
                        <ul class="list-disc pl-8 text-[14px] max-[390px]:text-xs max-[390px]:pl-6 sm:text-[20px]">
                            <li>Panduan penggunaan ACC Classroom bagi siswa, terdapat di link Panduan Siswa pada bagian atas.</li>
                            <li>Untuk melihat kelas yang telah diambil sebelumnya di dashboard. Pada Course Overview, ubah fiktering menjadi “Past”</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div class="bg-[#fff] w-full rounded-3xl py-5 px-7 pb-9 flex flex-col gap-4 max-[390px]:rounded-2xl">
            <div>
                <h1 class="text-[32px] font-bold text-[#1AB188] max-[390px]:text-[18px]">Course Overview</h1>
            </div>
            <div class="flex flex-row items-center sm:gap-5 gap-3">
                <div class="btn-swiper-prev w-[25px] flex justify-center items-center h-[170px] bg-[#4ECB71] rounded-3xl max-[390px]:h-[33.335vw]">
                    <i class="fa-solid fa-chevron-left text-white"></i>
                </div>
                <div class="swiper mySwiper w-[100%] max-[390px]:h-[33.335vw] h-[170px] flex flex-row justify-around">
                    <div class="swiper-wrapper">
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg max-[390px]:h-[33.335vw]" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2 max-[390px]:px-3 max-[390px]:py-1">
                                <h6 class="font-semibold text-lg w-full truncate max-[390px]:text-[4vw] max-[390px]:leading-[20px]">Sistem Basis Data</h6>
                                <p class="font-light max-[390px]:text-[4vw]">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                        <a class="swiper-slide relative bg-[url('./img/Rectangle.png')] w-[240px] h-[170px] rounded-lg" href="/classroom.php">
                            <div class="absolute bottom-0 w-full bg-[#4ECB71] text-[#fff] rounded-b-lg px-4 py-2">
                                <h6 class="font-semibold text-lg w-full truncate">Sistem Basis Data</h6>
                                <p class="font-light">Kelas A</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="btn-swiper-next w-[25px] flex justify-center items-center h-[170px] bg-[#4ECB71] rounded-3xl max-[390px]:h-[33.335vw]">
                    <i class="fa-solid fa-chevron-right text-white"></i>
                </div>
            </div>
        </div>

    </div>

    <script src="js/hamburger.js"></script>
    <script src="js/dropdown.js"></script>
    <!-- Initialize Swiper -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var mySwiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                centeredSlides: false,
                slidesPerGroupSkip: 1,
                spaceBetween: 20,
                breakpoints: {
                    390: {
                        slidesPerView: 1,
                    },
                    640: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 4,
                    },
                    1530: {
                        slidesPerView: 5,
                    },
                    1800: {
                        slidesPerView: 6,
                    },
                },
                navigation: {
                    nextEl: ".btn-swiper-next",
                    prevEl: ".btn-swiper-prev",
                },
            });
        });
    </script>
</body>

</html>
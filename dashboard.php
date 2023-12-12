<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/asset.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include("components-navbar.php"); ?>

    <div class="relative top-[120px] xl:top-[140px] px-10 pb-10 sm:px-16 md:px-24 lg:px-28 flex flex-col items-center gap-8">
        <div class="relative h-auto rounded-3xl flex flex-col shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] overflow-hidden w-full max-w-[1550px]">
            <div class="relative bg-[#1AB188] w-full rounded-t-3xl flex justify-end pt-12 pr-1 md:pr-7">
                <img src="./img/twoCircle.png" alt="twocircle" srcset="./img/twoCircle.png" class="relative right-[20px]  w-[240px] sm:w-[330px] md:w-[420px]">
            </div>
            <div class="relative bottom-0 bg-white pt-20 w-full rounded-b-3xl z-20">
                <div class="absolute top-0 left-5 translate-y-[-60%] w-[140px] h-[140px] md:w-[190px] md:h-[190px] md:left-10 rounded-full border-8 border-white bg-[#C1BBEB]"></div>
                <div class="absolute top-[20px] right-[40px]"><i class="fa-solid fa-ellipsis text-[40px] text-[#A098AE]"></i></div>
                <div class="relative px-10">
                    <h2 class="text-[24px] sm:text-[28px] text-[#303972] font-bold w-full truncate md:text-[32px]">Anjasdyasda Fasadad</h2>
                </div>
                <div class="relative bottom-0 h-auto pl-10 pr-10 pb-[33px] pt-10 flex flex-wrap items-start gap-5 justify-between w-full">
                    <div class="w-full flex-1">
                        <h3 class="text-[16px] md:text-[18px] text-[#303972] font-semibold mb-3">Siswa</h3>
                        <div class="flex gap-3 items-center">
                            <i class="fa-solid fa-location-dot text-[20px] text-[#A098AE]"></i>
                            <p class="text-[16px] md:text-[18px] text-[#A098AE] w-full truncate">Surabaya, Indonesia adasdadasdda</p>
                        </div>
                    </div>
                    <div class="w-full flex-1">
                        <h3 class="text-[16px] md:text-[18px] text-[#A098AE] mb-3">Phone</h3>
                        <div class="flex gap-3 items-center">
                            <i class="fa-solid fa-phone text-[20px] text-white bg-[#FB7D5B] p-3 rounded-full"></i>
                            <p class="text-[16px] md:text-[18px] font-semibold w-full truncate">0812312345421441</p>
                        </div>
                    </div>
                    <div class="w-full flex-1">
                        <h3 class="text-[16px] md:text-[18px] text-[#A098AE] mb-3">Email</h3>
                        <div class="flex gap-3 items-center">
                            <i class="fa-solid fa-envelope text-[20px] text-white bg-[#FB7D5B] p-3 rounded-full"></i>
                            <p class="text-[16px] md:text-[18px] font-semibold w-full truncate">asdaefasdadadfafwfaefefs@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative h-auto rounded-3xl bg-white p-10 shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] flex justify-between overflow-hidden w-full max-w-[1550px] gap-10 flex-col md:flex-row md:gap-2">
            <div class="flex-1 flex flex-col items-center gap-5 ">
                <i class="fa-regular fa-clock text-[60px]"></i>
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-[20px] font-bold text-center">Monitoring 24/7</h3>
                    <p class="text-center text-[#8794BA] text-[18px]">Monitoring Tugas</p>
                </div>
            </div>
            <div class="flex-1 flex flex-col items-center gap-5">
                <i class="fa-regular fa-address-card text-[60px] text-center"></i>
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-[20px] font-bold">Biodata</h3>
                    <p class="text-center text-[#8794BA] text-[18px]">Informasi Biodata Siswa</p>
                </div>
            </div>
            <div class="flex-1 flex flex-col items-center gap-5">
                <i class=" fa-solid fa-chalkboard-user text-[60px] text-center"></i>
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-[20px] font-bold">Penilaian</h3>
                    <p class="text-center text-[#8794BA] text-[18px]">Informasi nilai Siswa</p>
                </div>
            </div>
            <div class="flex-1 flex flex-col items-center gap-5">
                <i class="fa-solid fa-calendar-days text-[60px] text-center"></i>
                <div class="flex flex-col items-center gap-2">
                    <h3 class="text-[20px] font-bold">Absen</h3>
                    <p class="text-center text-[#8794BA] text-[18px]">Informasi kehadiran siswa di kelas</p>
                </div>
            </div>
        </div>
    </div>


    <script src="js/hamburger.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>
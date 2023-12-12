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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/asset.css">

</head>

<body>
    <?php include("components-navbar.php"); ?>
    <div class="relative top-[130px] xl:top-[160px] px-10 pb-10 sm:px-16 md:px-24 lg:px-28 flex flex-col gap-8">
        <div class="w-full px-5 py-7 bg-[#4F7A93] flex flex-col justify-between rounded-lg min-h-[250px] md:min-h-[270px] xl:min-h-[330px]">
            <div class="flex flex-col gap-1">
                <h1 class="text-white  font-medium text-2xl md:text-[35px]/[38px] xl:text-[40px]/[42px]">Sistem Basis Data</h1>
                <h3 class="text-white  font-light text-[20px] md:text-[26px] xl:text-[32px]">Kelas C</h3>
            </div>
            <div class="flex flex-col items-end gap-8">
                <i class="fa-solid fa-circle-user text-white text-[50px] md:text-[60px] xl:text-[70px]"></i>
                <div class="flex flex-row w-full">
                    <div class="h-[25px] w-[80%] bg-[#4ECB71] rounded-l-2xl"></div>
                    <div class="h-[25px] w-[20%] bg-[#D9D9D9] rounded-r-2xl"></div>
                </div>
            </div>

        </div>
        <div class="w-full px-8 py-6 bg-white flex flex-col justify-between rounded-lg shadow-[0px_4px_4px_0px_rgba(0,0,0,0.25)] gap-8 sm:px-10 sm:py-8">
            <div class="flex flex-col gap-5">
                <div class="border-b-2 border-[#1AB188]">
                    <h5 class="text-[#1AB188]  font-bold pl-2 text-[22px] sm:text-[24px]">Materi 1</h5>
                </div>
                <ul class="pl-2 flex flex-col gap-4">
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file-powerpoint text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">PPT Pertemuan 1</a>
                            <p>Perbedaan Data, Informasi dan Pengetahuan
                            </p>
                            <p> Vidio <span class="text-[rgba(24,131,165,1)] underline"><a href="https://www.youtube.com/">Pengantar Basis Data</a></span></p>
                        </div>
                    </li>
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">Tugas 1</a>
                            <p>Kerjakan Sebagai Latihan, Dan Kumpulkan.
                                Pertemuan 2 akan dibahas.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-5">
                <div class="border-b-2 border-[#1AB188]">
                    <h5 class="text-[#1AB188]  font-bold pl-2 text-[22px] sm:text-[24px]">Materi 1</h5>
                </div>
                <ul class="pl-2 flex flex-col gap-4">
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file-powerpoint text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">PPT Pertemuan 1</a>
                            <p>Perbedaan Data, Informasi dan Pengetahuan
                            </p>
                            <p> Vidio <span class="text-[rgba(24,131,165,1)] underline"><a href="https://www.youtube.com/">Pengantar Basis Data</a></span></p>
                        </div>
                    </li>
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">Tugas 1</a>
                            <p>Kerjakan Sebagai Latihan, Dan Kumpulkan.
                                Pertemuan 2 akan dibahas.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-5">
                <div class="border-b-2 border-[#1AB188]">
                    <h5 class="text-[#1AB188]  font-bold pl-2 text-[22px] sm:text-[24px]">Materi 1</h5>
                </div>
                <ul class="pl-2 flex flex-col gap-4">
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file-powerpoint text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">PPT Pertemuan 1</a>
                            <p>Perbedaan Data, Informasi dan Pengetahuan
                            </p>
                            <p> Vidio <span class="text-[rgba(24,131,165,1)] underline"><a href="https://www.youtube.com/">Pengantar Basis Data</a></span></p>
                        </div>
                    </li>
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">Tugas 1</a>
                            <p>Kerjakan Sebagai Latihan, Dan Kumpulkan.
                                Pertemuan 2 akan dibahas.</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col gap-5">
                <div class="border-b-2 border-[#1AB188]">
                    <h5 class="text-[#1AB188]  font-bold pl-2 text-[22px] sm:text-[24px]">Materi 1</h5>
                </div>
                <ul class="pl-2 flex flex-col gap-4">
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file-powerpoint text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">PPT Pertemuan 1</a>
                            <p>Perbedaan Data, Informasi dan Pengetahuan
                            </p>
                            <p> Vidio <span class="text-[rgba(24,131,165,1)] underline"><a href="https://www.youtube.com/">Pengantar Basis Data</a></span></p>
                        </div>
                    </li>
                    <li class="flex gap-5 max-[390px]:flex-col">
                        <div class="max-[390px]:flex max-[390px]:justify-center"><i class="fa-regular fa-file text-[22px] sm:text-[30px]"></i></div>
                        <div class="max-w-[550px] text-[16px]/[18px] sm:text-[20px]/[24px] font-light">
                            <a href="/dashboard.php" target="_blank" rel="noopener noreferrer" class="text-[rgba(24,131,165,1)] font-medium text-[22px] sm:text-[26px]">Tugas 1</a>
                            <p>Kerjakan Sebagai Latihan, Dan Kumpulkan.
                                Pertemuan 2 akan dibahas.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="js/hamburger.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>
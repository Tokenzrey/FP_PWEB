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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/asset.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php include("components-navbar.php"); ?>
    <div class="relative top-[120px] xl:top-[140px] px-10 pb-10 sm:px-16 lg:px-28 flex flex-col gap-16">
        <div class="flex justify-between items-center text-[#1AB188] font-bold">
            <h1 class="text-[20px] sm:text-[30px] lg:text-[36px]">Penilaian</h1>
            <div class="flex inline-block justify-center items-center">
                <div class="relative">
                    <input type="text" placeholder="Seacrh here . . ." class="input rounded-full border  border-2 border-[#1AB188!important] hover:shadow-sm focus:outline-none  pl-8 pt-2 pb-2 pr-2 text-[#1AB188] text-sm bg-transparent tracking-wider w-full justify-center items-center">
                    </input>
                    <div class="absolute left-1 top-[25%]">
                        <i class="fa-solid fa-magnifying-glass ml-2 text-[#1AB188]"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center mt-16">
            <div class="flex  w-full max-w-[850px] items-center gap-5 flex-col lg:flex-row lg:justify-between">
                <div class="flex items-center gap-4 flex-col lg:flex-row">
                    <div class="p-3 w-fit bg-[#1AB188] rounded-full"><i class="fa-regular fa-user flex justify-center items-center w-[50px] h-[50px] text-white text-[40px]"></i></div>
                    <div class="flex flex-col gap-2">
                        <p class="text-[#A098AE] text-[20px]">Students</p>
                        <h2 class="text-[#303972] text-[30px] font-bold text-center">932</h2>
                    </div>
                </div>
                <div class="flex items-center gap-4 flex-col lg:flex-row">
                    <div class="p-3 w-fit bg-[#FB7D5B] rounded-full"><i class="fa-solid fa-person-chalkboard flex justify-center items-center w-[50px] h-[50px] text-white text-[40px]"></i></div>
                    <div class="flex flex-col gap-2">
                        <p class="text-[#A098AE] text-[20px]">Teachers</p>
                        <h2 class="text-[#303972] text-[30px] font-bold text-center">754</h2>
                    </div>
                </div>
                <div class="flex items-center gap-4 flex-col lg:flex-row">
                    <div class="p-3 w-fit bg-[#FCC43E] rounded-full"><i class="fa-regular fa-calendar flex justify-center items-center w-[50px] h-[50px] text-white text-[40px]"></i></div>
                    <div class="flex flex-col gap-2">
                        <p class="text-[#A098AE] text-[20px]">Events</p>
                        <h2 class="text-[#303972] text-[30px] font-bold text-center">40</h2>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h1 class="text-[#303972] font-bold text-[24px] mb-3">ACC Student Intuition</h1>
            <ul class="flex flex-col gap-3 pl-2 lg:pl-16">
                <li class="flex justify-between items-center w-full gap-3">
                    <div class="w-[32px] h-[32px] lg:w-[48px] lg:h-[48px] bg-[#079ECD] rounded-full hidden sm:block"></div>
                    <h1 class="text-[#303972] text-[16px] lg:text-[20px] font-bold truncate max-w-[40%]">Samantha William Samantha William Samantha William</h1>
                    <h1 class="text-[#4D44B5] text-[16px] lg:text-[20px] font-bold truncate hidden sm:block">ID 123456789</h1>
                    <div class="flex items-center gap-3">
                        <div class="p-3 bg-[#FB7D5B] rounded-full"><i class="fa-regular fa-user w-[20px] h-[20px] text-[20px] flex justify-center items-center text-white"></i></div>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#A098AE] text-[16px] lg:text-[18px] truncate">Class</p>
                            <h5 class="text-[#303972] text-[16px] lg:text-[20px] font-semibold truncate">VII A</h5>
                        </div>
                    </div>
                    <h1 class="text-[16px] lg:text-[22px] text-[#303972] font-bold truncate">94,1</h1>
                </li>
                <li class="flex justify-between items-center w-full gap-3">
                    <div class="w-[32px] h-[32px] lg:w-[48px] lg:h-[48px] bg-[#079ECD] rounded-full hidden sm:block"></div>
                    <h1 class="text-[#303972] text-[16px] lg:text-[20px] font-bold truncate max-w-[40%]">Samantha William Samantha William Samantha William</h1>
                    <h1 class="text-[#4D44B5] text-[16px] lg:text-[20px] font-bold truncate hidden sm:block">ID 123456789</h1>
                    <div class="flex items-center gap-3">
                        <div class="p-3 bg-[#FB7D5B] rounded-full"><i class="fa-regular fa-user w-[20px] h-[20px] text-[20px] flex justify-center items-center text-white"></i></div>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#A098AE] text-[16px] lg:text-[18px] truncate">Class</p>
                            <h5 class="text-[#303972] text-[16px] lg:text-[20px] font-semibold truncate">VII A</h5>
                        </div>
                    </div>
                    <h1 class="text-[16px] lg:text-[22px] text-[#303972] font-bold truncate">94,1</h1>
                </li>
                <li class="flex justify-between items-center w-full gap-3">
                    <div class="w-[32px] h-[32px] lg:w-[48px] lg:h-[48px] bg-[#079ECD] rounded-full hidden sm:block"></div>
                    <h1 class="text-[#303972] text-[16px] lg:text-[20px] font-bold truncate max-w-[40%]">Samantha William Samantha William Samantha William</h1>
                    <h1 class="text-[#4D44B5] text-[16px] lg:text-[20px] font-bold truncate hidden sm:block">ID 123456789</h1>
                    <div class="flex items-center gap-3">
                        <div class="p-3 bg-[#FB7D5B] rounded-full"><i class="fa-regular fa-user w-[20px] h-[20px] text-[20px] flex justify-center items-center text-white"></i></div>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#A098AE] text-[16px] lg:text-[18px] truncate">Class</p>
                            <h5 class="text-[#303972] text-[16px] lg:text-[20px] font-semibold truncate">VII A</h5>
                        </div>
                    </div>
                    <h1 class="text-[16px] lg:text-[22px] text-[#303972] font-bold truncate">94,1</h1>
                </li>
                <li class="flex justify-between items-center w-full gap-3">
                    <div class="w-[32px] h-[32px] lg:w-[48px] lg:h-[48px] bg-[#079ECD] rounded-full hidden sm:block"></div>
                    <h1 class="text-[#303972] text-[16px] lg:text-[20px] font-bold truncate max-w-[40%]">Samantha William Samantha William Samantha William</h1>
                    <h1 class="text-[#4D44B5] text-[16px] lg:text-[20px] font-bold truncate hidden sm:block">ID 123456789</h1>
                    <div class="flex items-center gap-3">
                        <div class="p-3 bg-[#FB7D5B] rounded-full"><i class="fa-regular fa-user w-[20px] h-[20px] text-[20px] flex justify-center items-center text-white"></i></div>
                        <div class="flex flex-col gap-2">
                            <p class="text-[#A098AE] text-[16px] lg:text-[18px] truncate">Class</p>
                            <h5 class="text-[#303972] text-[16px] lg:text-[20px] font-semibold truncate">VII A</h5>
                        </div>
                    </div>
                    <h1 class="text-[16px] lg:text-[22px] text-[#303972] font-bold truncate">94,1</h1>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/hamburger.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>
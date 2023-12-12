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
    <div class="relative top-[120px] xl:top-[140px] px-10 pb-10 sm:px-16 md:px-24 lg:px-28 flex flex-col gap-8">
        <div class="bg-[#fff] w-full rounded-3xl flex flex-col gap-2 sm:gap-4">
            <div class="py-2.5 px-10 bg-[#1AB188] rounded-t-3xl">
                <h1 class="text-[24px] text-white font-bold">Student Details</h1>
            </div>
            <div class="flex gap-4 pt-3 pb-5 px-10 pb-9 flex-col items-center md:items-start md:flex-row">
                <div class="max-w-[200px] md:w-[25%]">
                    <label for="imageProfile" class="form-label">Photo <span class="text-danger">*</span></label>
                    <img id="imageProfile" src="./img/placeholderPhoto.png" alt="placeholderPhoto" srcset="./img/placeholderPhoto.png" class="w-full">
                </div>
                <div class="w-full flex flex-col gap-3 w-[70%]">
                    <div class="w-full flex flex-col md:flex-row gap-4">
                        <div class="md:w-[50%]">
                            <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="firstName" disabled value="yahahahha">
                        </div>
                        <div class="md:w-[50%]">
                            <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="lastName" disabled value="uhuuuy">
                        </div>
                    </div>
                    <div>
                        <div class="flex gap-4 flex-col md:flex-row">
                            <div class="md:w-[50%]">
                                <label for="birthPlace" class="form-label">Date & Place of Birth <span class="text-danger">*</span></label>
                                <div id="dateBirthPlace" class="flex gap-3 flex-col sm:flex-row">
                                    <input type="text" class="form-control text-[#A098AE]" id="dateBirth" disabled value="04 April 2003">
                                    <input type="text" class="form-control text-[#A098AE]" id="birthPlace" disabled value="Surabaya">
                                </div>
                            </div>
                            <div class="md:w-[50%]">
                                <label for="ParentName" class="form-label">Parent Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control text-[#A098AE]" id="ParentName" disabled value="asrer">
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-4 flex-col md:flex-row">
                        <div class="md:w-[50%]">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="email" disabled value="tokenzrey@gmail.com">
                        </div>
                        <div class="md:w-[50%]">
                            <label for="Phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="Phone" disabled value="08231233424">
                        </div>
                    </div>
                    <div class="md:w-[48.6%]">
                        <div>
                            <label for="Address" class="form-label">Address <span class="text-danger">*</span></label>
                            <textarea class="form-control text-[#A098AE]" id="Address" rows="5" disabled>Jl. Suko Semolo X, Blok D No.17c</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#fff] w-full rounded-3xl flex flex-col gap-2 sm:gap-4">
            <div class="py-2.5 px-10 bg-[#1AB188] rounded-t-3xl">
                <h1 class="text-[24px] text-white font-bold">Parent Details</h1>
            </div>
            <div class="flex gap-4 pt-3 pb-5 px-10 pb-9">
                <div class="w-full flex flex-col gap-3 w-[80%]">
                    <div class="w-full flex gap-4 flex-col md:flex-row">
                        <div class="md:w-[50%]">
                            <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="firstName" disabled value="yahahahha">
                        </div>
                        <div class="md:w-[50%]">
                            <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="lastName" disabled value="uhuuuy">
                        </div>
                    </div>
                    <div class="flex gap-4 flex-col md:flex-row">
                        <div class="md:w-[50%]">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="email" disabled value="tokenzrey@gmail.com">
                        </div>
                        <div class="md:w-[50%]">
                            <label for="Phone" class="form-label">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control text-[#A098AE]" id="Phone" disabled value="08231233424">
                        </div>
                    </div>
                    <div class="flex flex-col md:w-[48.8%]">
                        <label for="Address" class="form-label">Address <span class="text-danger">*</span></label>
                        <textarea class="form-control text-[#A098AE]" id="Address" rows="5" disabled>Jl. Suko Semolo X, Blok D No.17c</textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/hamburger.js"></script>
    <script src="js/dropdown.js"></script>
</body>

</html>
<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/src/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <title>Screaming - Video</title>
    <title>Profile - Screaming</title>
</head>



<body class="bg-[#1D1D1D]">


    <?php
    include("header.php")
    ?>



    <div class="w-4/5  mx-auto mt-6 flex flex-col justify-center">
        <div class="flex justify-between items-center mb-14">
            <div class="flex">
                <img src="../../images/avatar-5.jpeg" class="md:w-32 w-20 md:mr-0 mr-6 rounded-full md:mr-20" alt="">
                <div class="flex flex-col justify-center space-y-2">
                    <span class="text-white font-bold"><?php echo($_SESSION['username']) ?></span>
                    <div class="flex space-x-3">
                        <img src="../../images/icon/calendar.svg" class="w-6" alt="">
                        <p class="text-[#808080]">A rejoint en <?php echo($_SESSION['registration_date']) ?></p>
                    </div>
                    <div class="flex space-x-3">
                        <img src="../../images/icon/clapper-board.svg" class="w-6" alt="">
                        <p class="text-[#808080]">12 films visionnés</p>
                    </div>
                </div>
            </div>

            <div class="">
                <a href="settings.php">
                    <img src="../../images/icon/setting.svg" class="md:w-12 w-10 border rounded-full p-2" alt="">
                </a>
            </div>
        </div>

        <div class="flex flex-col">
            <span class="text-[#E84545] border-b pb-1 mb-11 border-[#404040] w-fit">Commentaires récents</span>

            <div class="flex mb-11">
                <div class="w-fit">
                    <img src="../../images/silent-hill-thumbnail.webp" class="lg:w-14 md:w-14 w-[50px] rounded-full" alt="">
                </div>


                <div class="flex flex-col md:w-2/3 w-5/6 pl-6">
                    <p class="text-white text-sm font-bold">Silent Hill</p>
                    <p class="text-[#808080] text-sm">Fantastique / Épouvante-Horreur</p>

                    <p class="text-white mt-3 mb-6">La photographie du film est sublime, l'esthétisme est parfaitement fidèle à ce qu'on avait dans les jeux, et franchement lorsqu'on voit les prouesses techniques qu'offrent les nvelles générations de consoles, on rêverait tous d'avoir un Silent Hill digne de ce nom qui tournerait sur Unreal Engine 5.</p>
                    <div class="flex">
                        <div class="flex"></div>
                        <a href="">
                            <img src="../../images/icon/like.svg" class="w-4" alt="">
                        </a>
                        <p class="text-[#808080] ml-1">6</p>
                        <a href="">
                            <img src="../../images/icon/triangle-grey.svg" class="w-4 ml-6" alt="">
                        </a>
                    </div>

                </div>

            </div>


            
        </div>

    </div>




    <?php
    include("footer.php");
    ?>

</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="../app.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
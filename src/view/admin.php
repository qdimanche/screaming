<?php
    session_start();
    if (!isset($_SESSION['email'])){
        header('location:login.php');
    }
    elseif ($_SESSION['role'] !== 'admin') {
        header('location:index.php');
    }


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <title>Screaming</title>
</head>
<body class="bg-[#1D1D1D]">

    <?php
        include("header.php")
    ?>


    <div class="flex justify-center">
        <div class="flex flex-col bg-[#343434] m-20  py-6  px-8 rounded">

            <h1 class="text-xl text-white">Espace administrateur</h1>

            <a href="addUser.php" class="border-2 mt-10 border-[#F14747] text-white px-4 py-2 rounded-md text-1xl font-medium hover:bg-[#F14747] transition duration-300 w-full">Ajouter un utilisateur</a>
            <a href="updateUser.php.php" class="border-2 mt-6 border-[#F14747] text-white px-4 py-2 rounded-md text-1xl font-medium hover:bg-[#F14747] transition duration-300 w-full">Modifier un utilisateur</a>


        </div>


    </div>





    <?php
    include("footer.php");
    ?>

</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="/src/app.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>





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
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css"/>
    <title>Screaming</title>
</head>
<body class="bg-[#1D1D1D]">

<?php
include("header.php")
?>


<div class="flex justify-center">
    <div class="flex flex-col bg-[#343434] m-16  py-6  px-8 rounded">
        <form action="../controller/createUser.php" class="flex flex-col space-y-3" method="post">


            <input name="firstName" type="text" placeholder="Prénom"
                   class=" py-3 px-4 border border-gray-400 rounded-md"/>
            <input name="lastName" type="text" placeholder="Nom" class=" py-3 px-4 border border-gray-400 rounded-md"/>
            <input name="username" type="text" placeholder="Nom d'utilisateur"
                   class=" py-3 px-4 border border-gray-400 rounded-md"/>
            <input name="email" type="email" placeholder="Email" class=" py-3 px-4 border border-gray-400 rounded-md"/>
            <select class="py-3 px-4 border border-gray-400 rounded-md" name="type" id="type">
                <option value="" disabled selected>Type</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <input name="password" type="password" placeholder="Mot de passe"
                   class=" py-3 px-4 border border-gray-400 rounded-md"/>
            <input name="confirmPassword" type="password" placeholder="Confirmez le mot de passe"
                   class=" py-3 px-4 border border-gray-400 rounded-md"/>
            <button class="w-full bg-red-500 text-white p-3 rounded-lg font-semibold text-lg mt-6" type="submit">Créer
                un compte
            </button>


        </form>
    </div>
</div>


<?php
include("footer.php")
?>

</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="/src/app.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
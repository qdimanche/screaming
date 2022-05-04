<?php

    session_start();
    if (!isset($_SESSION['email']))
        header('location:login.php');

    $id = $_POST['id'];

    $db = new PDO('mysql:host=localhost;dbname=screaming','root','');

    $check = $db->prepare("SELECT * FROM user WHERE user.id IN ($id)");
    $check->execute();
    $data = $check->fetch();

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings- Screaming</title>
    <link rel="stylesheet" href="/src/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
</head>
<body class="bg-[#1D1D1D]">

    <?php
    include("header.php")
    ?>

    <div class="flex justify-center">
        <div class="flex flex-col bg-[#343434] m-16  py-6  px-8 rounded">

                <form action="../controller/updateUserAdmin.php" class="flex flex-col space-y-3" method="post">


                    <input name="firstName" type="text" placeholder="Prénom" value="<?php echo $data['first_name'] ?>" class=" py-3 px-4 border border-gray-400 rounded-md" />
                    <input name="lastName" type="text" placeholder="Nom" value="<?php echo $data['last_name'] ?>" class=" py-3 px-4 border border-gray-400 rounded-md" />
                    <input name="username" type="text" placeholder="Nom d'utilisateur" value="<?php echo $data['username'] ?>" class=" py-3 px-4 border border-gray-400 rounded-md" />
                    <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                    <input name="email" type="email" placeholder="Email" value="<?php echo $data['email'] ?>" class=" py-3 px-4 border border-gray-400 rounded-md" />
                    <select class="py-3 px-4 border border-gray-400 rounded-md" name="type" id="type" value="<?php echo $data['role'] ?>" >
                        <option value="" disabled selected>Type</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                    <input name="password" type="password" placeholder="Mot de passe" value="<?php echo $data['password'] ?>" class=" py-3 px-4 border border-gray-400 rounded-md" />
                    <button class="w-full bg-red-500 text-white p-3 rounded-lg font-semibold text-lg mt-6" type="submit">Mettre à jour</button>




                </form>
        </div>
    </div>





</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="../app.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
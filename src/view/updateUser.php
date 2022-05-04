<?php

    session_start();
    if (!isset($_SESSION['email']))
        header('location:login.php');

    $email = $_SESSION['email'];
    $firstName = $_SESSION['firstname'];
    $lastName = $_SESSION['lastname'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $id = $_SESSION['id'];
  
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
            <form action="../controller/updateUserAdmin.php" method="post">

                <div>
                    <span>Email : </span>
                    <input type="text" name="email" value="<?php echo $email ?>" class="form-control"  placeholder="Entrez votre mail">
                </div>

                <div>
                    <span>Prénom :</span>
                    <input type="text" name="firstName" value="<?php echo $firstName ?>" class="form-control"  placeholder="Entrez votre prénom">
                </div>

                <div>
                    <span>Nom :</span>
                    <input type="text" name="lastName" value="<?php echo $lastName ?>" class="form-control"  placeholder="Entrez votre nom">
                </div>

                <div>
                    <span>Pseudo : </span>
                    <input type="text" name="username" value="<?php echo $username ?>" class="form-control"  placeholder="Entrez votre pseudo">
                </div>

                <div>
                    <span>Mot de passe : </span>
                    <input type="password" name="password" value="<?php echo $password ?>" class="form-control" placeholder="Entrez un mot de passe">
                </div>
                <div class="formButton">
                    <button type="submit"  class="btn btn-primary">Envoyer</button>
                </div>
            </form>
        </div>
    </div>





</body>
<script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script>
<script src="../app.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
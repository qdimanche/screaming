<?php
session_start();

$db = new PDO('mysql:host=127.0.0.1; dbname=screaming; charset=UTF8', 'root', 'rootroot');

$display_members = $db->prepare("SELECT * FROM user");
$display_members->execute();
$members = $display_members->fetchAll();

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
    <div class="flex flex-col items-center bg-[#343434] m-20  py-10  px-8 rounded">

        <h1 class="text-2xl font-bold text-white">Espace administrateur</h1>


        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 mt-12">


            <?php
            foreach ($members as $am) {
                ?>

                <div class="w-full max-w-sm mx-auto rounded-md overflow-hidden">
                    <div class="flex flex-col items-center p-8 ">

                        <h5 class="mb-1 text-xl font-medium text-white">
                            <?php echo $am['email'] ?>
                        </h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">
                        <?php echo $am['first_name'] . ' ' . $am['last_name'] ?>
                    </span>
                        <div class="flex flex-col mt-4 space-y-3 lg:mt-6">
                            <form action="updateUser.php" method="post">
                                <input type="hidden" id="id" name="id" value="<?php echo $am['id'] ?>">
                                <button type="submit"
                                        class="mt-6 text-white px-4 py-2 text-center rounded-md text-1xl font-medium bg-[#1D1D1D] hover:bg-black transition duration-300">
                                    Modifier utilisateur
                                </button>
                            </form>
                            <form action="../controller/deleteUser.php" method="post">
                                <input type="hidden" id="id" name="id" value="<?php echo $am['id'] ?>">
                                <button type="submit"
                                        class="mt-3 text-white px-4 py-2 text-center rounded-md text-1xl font-medium bg-[#F14747] hover:bg-[#d94040] transition duration-300">
                                    Supprimer utilisateur
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>


        </div>


        <a href="addUser.php"
           class="border-2 mt-10 border-[#F14747] text-white px-4 py-2 rounded-md text-1xl font-medium hover:bg-[#F14747] transition duration-300 ">Ajouter
            un utilisateur</a>


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





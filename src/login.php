<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
</head>
<body>
    <div class="p-20 h-screen w-screen flex flex-col md:flex-row items-center justify-center bg-[#1D1D1D]">
        <div class="content text-3xl text-center md:text-left mb-12">
            <h1 class="text-5xl text-red-500 font-bold">Screaming</h1>
            <p class="text-red-100">Connecté à vos peurs</p>
        </div>
        <div class="container mx-auto flex flex-col items-center">
            <form class="shadow-lg w-80 p-4 flex flex-col bg-[#343434] rounded-lg" action="../src/checkLogin.php" method="post">
                <input name="email" type="email" placeholder="Email" class="mb-3 py-3 px-4 border border-gray-400 rounded-md bg-white" />
                <input name="password" type="password" placeholder="Mot de passe" class="mb-3 py-3 px-4 border border-gray-400 rounded-md bg-white" />
                <button class="w-full bg-red-500 text-white p-3 rounded-lg font-semibold text-lg">Connexion</button>
            </form>
            <form action="register.php" method="post">
                <button href="inscription.php" class="w-full bg-[#1D1D1D] mt-8 mb-4 text-white p-3 rounded-lg font-semibold text-lg">Créer un nouveau compte</button>
            </form>
        </div>
    </div>
</body>
</html>
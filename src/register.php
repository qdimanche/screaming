<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="p-20 h-screen w-screen flex flex-col lg:flex-row items-center justify-center bg-[#1D1D1D]">
        <div class="content text-3xl text-center md:text-left mb-12">
            <h1 class="text-5xl text-red-500 font-bold">Screaming</h1>
            <p class="text-red-100">Connecté à vos peurs</p>
        </div>
        <div class="container mx-auto flex flex-col items-center">
            <form method="post" class="shadow-lg w-80 p-8 space-y-6 flex bg-[#343434] flex-col rounded-lg" action="../src/registerAction.php">
                <input name="firstName" type="text" placeholder="Prénom" class=" py-3 px-4 border border-gray-400 rounded-md" />
                <input name="lastName" type="text" placeholder="Nom" class=" py-3 px-4 border border-gray-400 rounded-md" />
                <input name="email" type="email" placeholder="Email" class=" py-3 px-4 border border-gray-400 rounded-md" />
                <input name="password" type="password" placeholder="Mot de passe" class=" py-3 px-4 border border-gray-400 rounded-md" />
                <input name="confirmPassword" type="password" placeholder="Confirmez votre mot de passe" class=" py-3 px-4 border border-gray-400 rounded-md" />
                <button class="w-full bg-red-500 text-white p-3 rounded-lg font-semibold text-lg">S'enregistrer</button>
            </form>
            <form action="login.php">
                <button href="login.php" class="w-full bg-[#1D1D1D] mt-8 mb-4 text-white p-3 rounded-lg font-semibold text-lg">Se connecter</button>
            </form>
        </div>
    </div>
</body>
</html>
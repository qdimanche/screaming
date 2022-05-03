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
    include ("header.php")
    ?>

    <div class="flex border-t border-[#404040]">
        <div class="flex flex-col lg:px-8 py-8 px-2 w-1/6 h-content border-r border-[#404040]">




            <ul class="flex flex-col lg:items-start items-center w-full space-y-6 mb-12">


                <a href="profile.php" class="flex lg:space-x-4">
                    <img src="../images/icon/profile.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">Compte</div></li>
                </a>


                <a href="" class="flex lg:space-x-4">
                    <img src="../images/icon/credit-card.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">Facturation</div></li>
                </a>

                <a href="" class="flex lg:space-x-4">
                    <img src="../images/icon/lock.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">Sécurité</div></li>
                </a>

                <a href="" class="flex lg:space-x-4">
                    <img src="../images/icon/ringing-bell.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">Notifications</div></li>
                </a>

                <a href="" class="flex lg:space-x-4">
                    <img src="../images/icon/information-sign.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">Aide</div></li>
                </a>


            </ul>

            <span class="text-white font-bold lg:block hidden">Documentation</span>

            <ul class="flex flex-col lg:justify-start items-center w-full space-y-6 mt-8">


                <a href="" class="flex lg:space-x-4 lg:self-start">
                    <img src="../images/icon/chat.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">À propos</div></li>
                </a>

                <a href="" class="flex lg:space-x-4">
                    <img src="../images/icon/eye.svg" class="w-6" alt="">
                    <li class="text-white"><div class="lg:block hidden">Politique de confidentialité</div></li>
                </a>

            </ul>
            
        </div>


        <div class="flex flex-col lg:w-full w-5/6">
            <div class="bg-[url('../images/header-cover-settings.jpg')] bg-cover bg-center h-fit px-20 lg:py-40 py-24">
                <span class="text-4xl text-white">Bonjour Joker</span>
                <p class="text-white mt-6 font-extralight">Il s'agit de votre page profil. Vous pouvez modifier vos informations personnelles dans les champs suivants.</p>
                <a href="">
                    <button class="border-2 mt-10 border-[#F14747] text-white px-4 py-2 rounded-md text-1xl font-medium hover:bg-[#F14747] transition duration-300 w-40">Éditer le profil</button>
                </a>
            </div>

            <div class="flex lg:justify-start justify-center">
                <div class="flex flex-col bg-[#343434] lg:w-3/5 w-full  lg:ml-20  lg:mt-[-4em] mt-[-2em] py-6 lg:mx-0 mx-20 px-8 rounded">

                    <h1 class="text-white text-lg mb-12">Mon compte</h1>


                    <label for="bio" class="text-white mb-6"> Biographie</label>
                    <textarea id="bio"  rows="4"  class="rounded text-black p-4 text-[#9CA3AF]">Courte biographie vous présentant ...
                </textarea>




                    <p class="text-white mt-12 mb-6">Informations utilisateurs</p>

                    <div class="flex lg:flex-row flex-col lg:space-x-6 lg:mb-6 mb-3">
                        <div class="flex flex-col lg:w-1/2 w-full lg:mb-0 mb-3">
                            <label for="username" class="text-[#b3b3b3] mb-2"> Nom d'utilisateur</label>
                            <input type="text" placeholder="arthur.fleck" id="username" class="rounded">
                        </div>

                        <div class="flex flex-col lg:w-1/2 w-full">
                            <label for="email" class="text-[#b3b3b3] mb-2">Adresse e-mail</label>
                            <input type="text" placeholder="arthur.fleck@gmail.com" id="email" class="rounded">
                        </div>


                    </div>

                    <div class="flex lg:flex-row flex-col lg:space-x-6 mb-6">
                        <div class="flex flex-col lg:w-1/2 w-full">
                            <label for="firstname" class="text-[#b3b3b3] mb-2"> Prénom</label>
                            <input type="text" placeholder="Arthur" id="firstname" class="rounded">
                        </div>

                        <div class="flex flex-col lg:w-1/2 w-full">
                            <label for="lastname" class="text-[#b3b3b3] mb-2">Nom</label>
                            <input type="text" placeholder="Fleck" id="lastname" class="rounded">
                        </div>


                    </div>


                </div>

                <div class="flex mx-auto">
                    <div class="flex flex-col items-center bg-[#343434] lg:mx-6 mx-12 mt-[-4em] lg:px-4 px-12 rounded lg:flex hidden h-fit">
                        <img src="../images/avatar-5.jpeg" class="w-32 rounded-full mt-[-3em]" alt="">

                        <div class="flex lg:space-x-4 mt-6 justify-center">

                            <div class="flex items-center  flex-col">
                                <span class="text-[#F14747] font-bold">22</span>
                                <p class="text-[#b3b3b3] text-center">Films visionnés</p>
                            </div>

                            <div class="flex items-center flex-col">
                                <span class="text-[#F14747] font-bold">22</span>
                                <p class="text-[#b3b3b3] text-center">Commentaires</p>
                            </div>
                        </div>

                        <div class="my-10 flex flex-col text-center">
                            <span class="text-white font-bold">Joker</span>
                            <p class="text-white font-extralight mb-10">Gotham City, États-Unis</p>
                            <p class="text-sm text-white">Rang 3</p>
                            <p class="text-white font-bold">Terreur</p>

                        </div>
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
<script src="app.js"></script>
<script src="https://kit.fontawesome.com/a7e9f794eb.js" crossorigin="anonymous"></script>
</html>
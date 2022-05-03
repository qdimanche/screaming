<?php
session_start();
if (!isset($_SESSION['email']))
    header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/src/app.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />
    <title>Screaming - Video</title>
</head>
<body class="bg-[#1D1D1D]">

<?php
include("header.php")
?>


<iframe class="w-[100vw] lg:h-[70vh] h-[40vh]" src="https://www.youtube.com/embed/_H5qZUX48J4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<div class="py-8 lg:px-16 px-8 flex md:flex-row flex-col md:justify-between md:items-center  space-y-6 border-b border-[#404040] ">
    <div class="">
        <p class="text-[#F14747]">Science-fiction</p>
        <span class="text-white  text-xl">Spirale - L'héritage de Saw</span>
    </div>


    <div class="flex">
        <div class="mr-16">
            <p class="text-white">Presse</p>
            <ul class="flex justify-start items-center mt-3 mb-3">

                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#F14747" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#F14747" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#F14747" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="white" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="white" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                    </svg>
                </li>
                <p class="text-[#F14747] ml-4">3,1</p>
            </ul>
        </div>

        <div>
            <p class="text-white">Spectateurs</p>
            <ul class="flex justify-start items-center mt-3 mb-3">

                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#F14747" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#F14747" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="#F14747" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500 mr-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="white" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                    </svg>
                </li>
                <li>
                    <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="star" class="w-4 text-yellow-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path fill="white" d="M528.1 171.5L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6zM388.6 312.3l23.7 138.4L288 385.4l-124.3 65.3 23.7-138.4-100.6-98 139-20.2 62.2-126 62.2 126 139 20.2-100.6 98z"></path>
                    </svg>
                </li>
                <p class="text-[#F14747] ml-4">3,2</p>
            </ul>
        </div>


    </div>

    <div>
        <p class="text-white">Partager</p>
        <div class="flex mt-3">

            <div class="">
                <a href="">
                    <img src="../../images/icon/facebook-white.svg" class="w-6">
                </a>
            </div>

            <div>
                <a href="">
                    <img src="../../images/icon/instagram-white.svg" class="w-6 mx-5">
                </a>
            </div>

            <div>
                <a href="">
                    <img src="../../images/icon/twitter-white.svg" class="w-6">
                </a>
            </div>



        </div>
    </div>




</div>

<div class="flex flex-col lg:pl-16 px-8 py-8">
    <div class="flex">
        <span class="text-white mr-20">108 commentaires</span>
        <a href="" class="flex ">
            <img src="../../images/icon/sort.svg" alt="">
            <p class="text-[#808080] ml-3">TRIER PAR</p>
        </a>
    </div>


    <div class="flex flex-col mt-11">
        <div class="flex items-center">
            <img src="../../images/avatar-5.jpeg " class="w-11 rounded-full " alt="">
            <input type="text" class="placeholder:text-[#808080] pb-1 border-0 border-b border-[#404040] bg-transparent ml-6" placeholder="Ajouter un commentaire" >
        </div>

        <div class="flex my-11">
            <div class="w-fit">
                <img src="../../images/avatar-1.jpeg" class="lg:w-14 md:w-14 w-[50px] rounded-full" alt="">
            </div>


            <div class="flex flex-col md:w-2/3 w-5/6 pl-6">
                <p class="text-white text-sm font-bold">Maxime Sav</p>

                <p class="text-white mt-3 mb-6">J'ai vue le film hier et il est génial! C'est angoissant et à certains moments flippant. Les acteurs sont géniaux tout comme le film . Je vous conseil d'aller le voir même que c'est triste à des moments, mais pour comprendre faut aller le voir 😊</p>
                <div class="flex">
                    <div class="flex"></div>
                    <a href="">
                        <img src="../../images/icon/like.svg" class="w-4" alt="">
                    </a>
                    <p class="text-[#808080] ml-1">6</p>
                    <a href="">
                        <img src="../../images/icon/dislike.svg" class="w-4 ml-6" alt="">
                    </a>
                    <a class="text-[#808080] ml-6" href="">RÉPONDRE</a>
                </div>

                <a href="" class="flex mt-3">
                    <img src="../../images/icon/triangle.svg" class="w-4 mr-4" alt="">
                    <span class="text-[#F14747]">Afficher les réponses</span>
                </a>

            </div>

        </div>

        <div class="flex mb-11">
            <div class="w-fit">
                <img src="../../images/avatar-2.webp" class="lg:w-14 md:w-14 w-[50px] rounded-full" alt="">
            </div>


            <div class="flex flex-col md:w-2/3 w-5/6 pl-6">
                <p class="text-white text-sm font-bold">Aurasteak</p>

                <p class="text-white mt-3 mb-6">Non sérieux ses une tuerie 🤩 le petit a vraiment faire honneur aux Saw qu'on n'a connu ..je viens de le regarder il a même le 2 bon si j'ai pas tort 😁</p>
                <div class="flex">
                    <div class="flex"></div>
                    <a href="">
                        <img src="../../images/icon/like.svg" class="w-4" alt="">
                    </a>
                    <p class="text-[#808080] ml-1">6</p>
                    <a href="">
                        <img src="../../images/icon/dislike.svg" class="w-4 ml-6" alt="">
                    </a>
                    <a class="text-[#808080] ml-6" href="">RÉPONDRE</a>
                </div>

                <a href="" class="flex mt-3">
                    <img src="../../images/icon/triangle.svg" class="w-4 mr-4" alt="">
                    <span class="text-[#F14747]">Afficher les réponses</span>
                </a>

            </div>

        </div>

        <div class="flex mb-11">
            <div class="w-fit">
                <img src="../../images/avatar-3.jpeg" class="lg:w-14 md:w-14 w-[50px] rounded-full" alt="">
            </div>


            <div class="flex flex-col md:w-2/3 w-5/6 pl-6">
                <p class="text-white text-sm font-bold">PrincessRed</p>

                <p class="text-white mt-3 mb-6">Bien aimé malgré quelques longueurs. Les pièges sont sympas même si les acteurs initiaux manquent (Jigsaw, Amanda et Costas)</p>
                <div class="flex">
                    <div class="flex"></div>
                    <a href="">
                        <img src="../../images/icon/like.svg" class="w-4" alt="">
                    </a>
                    <p class="text-[#808080] ml-1">6</p>
                    <a href="">
                        <img src="../../images/icon/dislike.svg" class="w-4 ml-6" alt="">
                    </a>
                    <a class="text-[#808080] ml-6" href="">RÉPONDRE</a>
                </div>

                <a href="" class="flex mt-3">
                    <img src="../../images/icon/triangle.svg" class="w-4 mr-4" alt="">
                    <span class="text-[#F14747]">Afficher les réponses</span>
                </a>

            </div>

        </div>

        <div class="flex mb-11">
            <div class="w-fit">
                <img src="../../images/avatar-4.jpg" class="lg:w-14 md:w-14 w-[50px] rounded-full" alt="">
            </div>


            <div class="flex flex-col md:w-2/3 w-5/6 pl-6">
                <p class="text-white text-sm font-bold">KingEpic35</p>

                <p class="text-white mt-3 mb-6">Le jeu est loin d'être terminé !</p>
                <div class="flex">
                    <div class="flex"></div>
                    <a href="">
                        <img src="../../images/icon/like.svg" class="w-4" alt="">
                    </a>
                    <p class="text-[#808080] ml-1">6</p>
                    <a href="">
                        <img src="../../images/icon/dislike.svg" class="w-4 ml-6" alt="">
                    </a>
                    <a class="text-[#808080] ml-6" href="">RÉPONDRE</a>
                </div>

                <a href="" class="flex mt-3">
                    <img src="../../images/icon/triangle.svg" class="w-4 mr-4" alt="">
                    <span class="text-[#F14747]">Afficher les réponses</span>
                </a>

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
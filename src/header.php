<nav class="bg-white px-2 sm:px-4 py-2.5 rounded bg-transparent flex flex-col">
    <div class="px-8 flex flex-col lg:justify-start justify-between">
        <div class="flex justify-between">
            <div class="flex">
                <a href="index.php" class="flex items-center">
                    <img src="../images/screaming-logo-with-text.png" class="mr-3 lg:h-16 h-20" alt="Screaming Logo">
                </a>

                <div class="hidden items-center ml-6 lg:flex lg:w-auto" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium">
                        <li>
                            <a href="/src/" class="block py-2 pr-4 pl-3 text-white hover:text-[#F14747] bg-blue-700 rounded lg:bg-transparent lg:p-0 text-white" aria-current="page">Accueil</a>
                        </li>
                        <li>
                            <a href="/src/#nouveautes" class="block py-2 pr-4 pl-3 text-white hover:text-[#F14747]  lg:p-0">Nouveautés</a>
                        </li>
                        <li>
                            <a href="/src/#films-populaires" class="block py-2 pr-4 pl-3 text-white hover:text-[#F14747]  lg:p-0">Films populaires</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="items-center space-x-6 lg:flex hidden">
                <div class="hidden relative mr-3 md:mr-0 md:block">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" fill="#1D1D1D" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" class="block p-2 pl-10 w-full text-[#1D1D1D] bg-white rounded-lg border border-[#1D1D1D] sm:text-sm focus:ring-[#F14747] focus:border-[#F14747] focus:ring-[#F14747]" placeholder="Rechercher...">
                </div>


                <div class="">
                    <div class="flex items-center md:order-2">
                        <button type="button" class="flex mr-3 text-sm rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full" src="../images/icon/profile.svg" alt="user photo">
                        </button>

                        <div class="hidden z-50 my-4 text-base list-none bg-[#1D1D1D] rounded divide-y divide-gray-100 shadow " id="dropdown" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(1015px, 1022.5px, 0px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top">
                            <div class="py-3 px-4">
                                <span class="block text-sm text-white">Bonnie Green</span>
                                <span class="block text-sm font-medium text-gray-500 truncate">name@flowbite.com</span>
                            </div>
                            <ul class="py-1" aria-labelledby="dropdown">
                                <li>
                                    <a href="profile.php" class="block py-2 px-4 text-sm text-white hover:text-[#F14747]">Profil</a>
                                </li>
                                <li>
                                    <a href="disconnect.php" class="block py-2 px-4 text-sm text-white hover:text-[#F14747]">Déconnexion</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>




            </div>

            <div class="lg:hidden block items-center">
                <div class="menu_overlay flex flex-col">


                    <i class="fas fa-times"></i>

                    <a href="profile.php">
                        <img src="../images/avatar-5.jpeg" class="w-20 rounded-full mb-6" alt="">
                    </a>





                    <span class="block  text-white">Bonnie Green</span>
                    <span class="block  font-medium text-gray-500 truncate">name@flowbite.com</span>

                    <a href="disconnect.php" class="text-[#F14747] mt-6 font-bold">Déconnexion</a>



                    <ul class="list flex flex-col">

                        <li>
                            <div class=" md:mr-0 lg:hidden w-full relative ">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="#1D1D1D" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input type="text" class="block p-2 pl-10 w-full text-[#1D1D1D] bg-white rounded-lg border border-[#1D1D1D] sm:text-sm focus:ring-[#F14747] focus:border-[#F14747] focus:ring-[#F14747]" placeholder="Rechercher...">
                            </div>
                        </li>

                        <div class="flex ">
                            <li><a href="/src/">Accueil</a></li>
                            <li><a href="/src/#nouveautes">Nouveautés</a></li>
                            <li><a href="/src/#films-populaires">Films populaires</a></li>
                        </div>


                    </ul>
                </div>
                <div class="landing_page">
                    <div class="menu">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>






</nav>

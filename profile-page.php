<!DOCTYPE html>
<html lang="en">

<head>
    <title>Khanas - Profile</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    clifford: "#da373d",
                },
            },
        },
    };
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
               content-visibility: auto;
            }
         }
      </style>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style>
    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: "Montserrat";
    }

    .bg-main {
        background-image: url(images/bg-img.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
    }

    .title {
        font-family: "Sofia", cursive;
    }

    .scroll-container {
        scroll-snap-type: y proximity;
        overflow-y: scroll;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    .scroll-child {
        scroll-snap-align: start;
        flex: none;
    }

    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    </style>
</head>

<body class="bg-[#E8C07D] overflow-x-hidden">
    <div class="nav-components">
        <div class="nav-icon fixed top-16 left-16 z-40 w-[45px]">
            <button><img class="hover:scale-110 transition-all" src="images/nav.svg" alt="" /></button>
        </div>
        <div
            class="nav-side -translate-x-[1000px] bg-[#322d29] h-screen w-[25vw] fixed z-[999] text-white border-r-[1px] border-r-neutral-500 transition-all duration-700">
            <div class="close-btn absolute right-10 top-10 w-[30px]">
                <button><img class="hover:scale-110 transition-all" src="images/close.svg" alt="" /></button>
            </div>
            <ul class="flex flex-col gap-7 justify-center items-center h-full">
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="index.php">HOME</a></li>
                <li>
                    <div class="h-[1px] w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="about-page.php">ABOUT</a>
                </li>
                <li>
                    <div class="h-[1px] w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75"
                        href="contact-us.php">CONTACT</a>
                </li>
                <li>
                    <div class="h-[1px] w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75"
                        href="profile-page.php">PROFILE</a>
                </li>
                <li>
                    <div class="h-[1px] w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">ORDER</a></li>
                <li>
                    <div class="h-[1px] w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">FEEDBACK</a></li>
                <li>
                    <div class="h-[1px] w-[280px] bg-white rounded"></div>
                </li>
                <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">RESERVATION</a></li>
            </ul>
        </div>
    </div>

    <div class="scroll-container h-screen w-screen flex flex-col">
        <section class="scroll-child contact-us h-fit bg-[#282421] w-screen relative">
            <div class="profile flex flex-col justify-center items-center mt-[100px] mb-[150px]">
                <div class="pic-name-profile flex justify-center items-center gap-14 mb-32">
                    <div class="profile-pic">
                        <img class="rounded-full w-[250px] h-[250px] object-cover object-top" src="images/propic.jpg"
                            alt="" />
                    </div>
                    <div class="profile-name text-white">
                        <div class="mb-4 flex items-center gap-6">
                            <p class="title text-4xl border-white border-2 w-fit">Rafid Ahmmad</p>
                            <div class="btn">
                                <a href="edit-profile.php"><button
                                        class="text-white border-2 w-[190px] py-2 uppercase transition-all duration-100 hover:bg-gray-200 hover:bg-opacity-70 hover:font-medium hover:text-neutral-900">
                                        Edit Profile
                                    </button></a>


                            </div>
                        </div>

                        <p class="mb-4">
                            +8801551243895 / <span class="text-blue-500"><a href="">rafid.ahmmad.3@gmail.com</a></span>
                        </p>
                        <p class="text-blue-500"></p>
                        <div class="profile-bio text-white">
                            <p class="text-2xl">Biography</p>
                            <p class="w-[500px]">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam nam non quia nihil
                                explicabo
                                numquam.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="prev-card text-white scroll-child pt-10 mb-20">
                    <p class="text-2xl mb-12 text-center font-medium">Previous Delivery Orders</p>
                    <div class="order-cards grid grid-cols-4 gap-8">
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="prev-card text-white scroll-child  pt-10 mb-20">
                    <p class="text-2xl mb-12 text-center font-medium">Previous Pre-Orders</p>
                    <div class="order-cards grid grid-cols-4 gap-8">
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="prev-card text-white scroll-child  pt-10">
                    <p class="text-2xl mb-12 text-center font-medium">Previous Reservations</p>
                    <div class="order-cards grid grid-cols-4 gap-8">
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                        <div
                            class="order-card rounded overflow-hidden bg-[#322d29] w-[300px] h-[305px] hover:scale-[1.02] transition-all duration-200">
                            <a class="" href=""><img class="w-[300px] h-[200px] object-cover" src="images/food1.jpg"
                                    alt="" style="object-position: 20% 75%" />
                                <div class="p-5">
                                    <p class="font-medium">Chicken Cheese Burger</p>
                                    <p class="text-sm text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing
                                        elit.
                                        Labore.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer
            class="footer scroll-child w-screen h-[50vh] text-white z-50 border-t-[1px] border-t-neutral-500 bg-[#282421] relative">
            <div class="footer-containter absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
                <div class="flex justify-between items-start w-[80vw]">
                    <div class="footer-left">
                        <div class="title text-white text-6xl z-50 mb-5 text-center border-2 w-fit">Khanas</div>
                        <div class="nav-links-footer">
                            <p class="w-[250px] mb-7">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta illum voluptas
                                fugit
                                repudiandae dicta
                                architecto temporibus est delectus aperiam.
                            </p>
                            <div class="social-footer flex justify-between items-center w-[220px]">
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-facebook.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-instagram.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-twitter.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-github.svg" alt="" /></a>
                                <a href=""><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                        src="images/icons8-youtube.svg" alt="" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer-center">
                        <div class="nav-links-footer">
                            <div class="text-white text-2xl z-50 w-fit font-medium">Navigations</div>
                            <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                            <ul class="flex flex-col gap-2 justify-center">
                                <li><a href="index.php">HOME</a></li>
                                <li><a href="about-page.php">ABOUT</a></li>
                                <li><a href="contact-us.php">CONTACT</a></li>
                                <li><a href="profile-page.php">PROFILE</a></li>
                                <li><a href="">ORDER</a></li>
                                <li><a href="">FEEDBACK</a></li>
                                <li><a href="">RESERVATION</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-right">
                        <div class="text-white text-2xl z-50 w-fit font-medium">Location</div>
                        <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                        <div class="nav-links-footer">
                            <p class="w-[250px] mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Quisquam, rem?
                            </p>
                            <p class="my-2"><span class="underline">Phone:</span> +8801423542132</p>
                            <p class="my-2"><span class="underline">Email:</span> <a
                                    href="">rafid.ahmmad.3@gmail.com</a></p>
                            <p class="my-2"><span class="underline">Website:</span> <a href="">www.randomwebsite.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>
    document.getElementsByClassName("nav-icon")[0].addEventListener("click", () => {
        document.getElementsByClassName("nav-side")[0].classList.add("translate-x-0");
    });
    document.getElementsByClassName("close-btn")[0].addEventListener("click", () => {
        document.getElementsByClassName("nav-side")[0].classList.remove("translate-x-0");
    });
    </script>
</body>

</html>
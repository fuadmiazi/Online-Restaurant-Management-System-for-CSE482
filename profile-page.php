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
    <?php require "nav-component.php" ?>

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

        <?php require "footer.php" ?>
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
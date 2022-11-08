<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Khanas - About</title>
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
         rel="stylesheet"
      />
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
            scroll-snap-type: y mandatory;
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
            class="nav-side -translate-x-[1000px] bg-[#322d29] h-screen w-[25vw] fixed z-[999] text-white border-r-[1px] border-r-neutral-500 transition-all duration-700"
         >
            <div class="close-btn absolute right-10 top-10 w-[30px]">
               <button><img class="hover:scale-110 transition-all" src="images/close.svg" alt="" /></button>
            </div>
            <ul class="flex flex-col gap-7 justify-center items-center h-full">
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">HOME</a></li>
               <li><div class="h-[1px] w-[280px] bg-white rounded"></div></li>
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">ABOUT</a></li>
               <li><div class="h-[1px] w-[280px] bg-white rounded"></div></li>
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">CONTACT</a></li>
               <li><div class="h-[1px] w-[280px] bg-white rounded"></div></li>
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">PROFILE</a></li>
               <li><div class="h-[1px] w-[280px] bg-white rounded"></div></li>
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">ORDER</a></li>
               <li><div class="h-[1px] w-[280px] bg-white rounded"></div></li>
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">FEEDBACK</a></li>
               <li><div class="h-[1px] w-[280px] bg-white rounded"></div></li>
               <li class=""><a class="hover:text-yellow-500 transition-all duration-75" href="">RESERVATION</a></li>
            </ul>
         </div>
      </div>

      <div class="scroll-container h-screen w-screen flex flex-col">
         <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="aboutUs">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
               <div class="flex justify-center items-center flex-col h-[83%]">
                  <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">About Us</div>
                  <div class="text-gray-200 text-xl mb-2 font-medium uppercase">What Defines Us The Best</div>
                  <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                  <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                  <div class="w-[450px] text-justify text-white mb-5">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, voluptates omnis ad nostrum ipsam pariatur
                     numquam quibusdam commodi cum quasi soluta quas magni tenetur, assumenda similique, ea quae a! Rerum dolorum sed
                     pariatur totam itaque est iste velit laboriosam eveniet sint voluptas vel odit ullam, omnis alias magni. Incidunt
                     temporibus provident in, quia iste harum repellendus quam, aliquid quasi odio quod velit magni non officia recusandae.
                     Eius qui.
                  </div>
               </div>
               <div class="about-us-home-pic h-screen relative overflow-hidden">
                  <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-10"></div>
                  <img class="w-[50vw] h-screen object-cover object-top" src="images/restaurant-image.jpg" alt="" />
               </div>
            </div>
         </section>
         <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="ourMission">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
               <div class="about-us-home-pic h-screen relative overflow-hidden">
                  <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 left-0 z-10"></div>
                  <img class="w-[50vw] h-screen object-cover object-top" src="images/chef.jpg" alt="" />
               </div>
               <div class="flex justify-center items-center flex-col h-[90%]">
                  <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Our Mission</div>
                  <div class="text-gray-200 text-xl mb-2 font-medium uppercase">What's Our Main Goal</div>
                  <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                  <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                  <div class="w-[450px] text-justify text-white mb-5">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, voluptates omnis ad nostrum ipsam pariatur
                     numquam quibusdam commodi cum quasi soluta quas magni tenetur, assumenda similique, ea quae a! Rerum dolorum sed
                     pariatur totam itaque est iste velit laboriosam eveniet sint voluptas vel odit ullam, omnis alias magni. Incidunt
                     temporibus provident in, quia iste harum repellendus quam, aliquid quasi odio quod velit magni non officia recusandae.
                     Eius qui, neque veritatis suscipit veniam, ipsum accusamus nulla doloremque, voluptas quibusdam sequi natus excepturi
                     laborum fuga magni quam odio asperiores consequuntur.
                  </div>
               </div>
            </div>
         </section>
         <section class="scroll-child h-screen bg-[#282421] w-screen relative" id="story">
            <div class="grid grid-cols-2 overflow-hidden h-screen">
               <div class="flex justify-center items-center flex-col h-[94%]">
                  <div class="title text-white text-7xl z-50 text-center border-2 w-fit mt-20 mb-6">Story Behind</div>
                  <div class="text-gray-200 text-xl mb-2 font-medium uppercase">The Story Behind Our Success</div>
                  <div class="h-[2px] w-[180px] bg-white my-1 rounded"></div>
                  <div class="h-[2px] w-[180px] bg-white my-1 rounded mb-10"></div>

                  <div class="w-[450px] text-justify text-white mb-5">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam saepe, voluptates omnis ad nostrum ipsam pariatur
                     numquam quibusdam commodi cum quasi soluta quas magni tenetur, assumenda similique, ea quae a! Rerum dolorum sed
                     pariatur totam itaque est iste velit laboriosam eveniet sint voluptas vel odit ullam, omnis alias magni. Incidunt
                     temporibus provident in, quia iste harum repellendus quam, aliquid quasi odio quod velit magni non officia recusandae.
                     Eius qui, neque veritatis suscipit veniam, ipsum accusamus nulla doloremque, voluptas quibusdam sequi natus excepturi
                     laborum fuga magni quam odio asperiores consequuntur. Illo quaerat, ut ullam doloribus sunt eius quidem reiciendis
                     ipsum quod consequuntur assumenda inventore nihil culpa explicabo commodi quasi voluptatibus eum cum fugit voluptas rem
                     similique repellat asperiores?<br />
                  </div>
                  <div class="text-left w-[450px] text-white mb-10">
                     Learn More :
                     <a class="text-blue-500" href="https://businessinspection.com.bd/khanas-success-story/"
                        >Article by Business Inspection Bangladesh</a
                     >
                  </div>
               </div>
               <div class="about-us-home-pic h-screen relative overflow-hidden">
                  <div class="main-filter h-screen bg-black opacity-20 w-[50vw] absolute top-0 right-0 z-10"></div>

                  <img class="w-[50vw] h-screen object-cover object-top" src="images/storytelling.jpg" alt="" />
               </div>
            </div>
         </section>
         <footer class="footer scroll-child w-screen h-[50vh] text-white z-50 border-t-[1px] border-t-neutral-500 bg-[#282421] relative">
            <div class="footer-containter absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
               <div class="flex justify-between items-start w-[80vw]">
                  <div class="footer-left">
                     <div class="title text-white text-6xl z-50 mb-5 text-center border-2 w-fit">Khanas</div>
                     <div class="nav-links-footer">
                        <p class="w-[250px] mb-7">
                           Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero soluta illum voluptas fugit repudiandae dicta
                           architecto temporibus est delectus aperiam.
                        </p>
                        <div class="social-footer flex justify-between items-center w-[220px]">
                           <a href=""
                              ><img
                                 class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                 src="images/icons8-facebook.svg"
                                 alt=""
                           /></a>
                           <a href=""
                              ><img
                                 class="w-[30px] my-2 hover:scale-110 transition-all duration-75"
                                 src="images/icons8-instagram.svg"
                                 alt=""
                           /></a>
                           <a href=""
                              ><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75" src="images/icons8-twitter.svg" alt=""
                           /></a>
                           <a href=""
                              ><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75" src="images/icons8-github.svg" alt=""
                           /></a>
                           <a href=""
                              ><img class="w-[30px] my-2 hover:scale-110 transition-all duration-75" src="images/icons8-youtube.svg" alt=""
                           /></a>
                        </div>
                     </div>
                  </div>
                  <div class="footer-center">
                     <div class="nav-links-footer">
                        <div class="text-white text-2xl z-50 w-fit font-medium">Navigations</div>
                        <div class="h-[2px] w-[100px] bg-white my-4 rounded"></div>

                        <ul class="flex flex-col gap-2 justify-center">
                           <li><a href="">HOME</a></li>
                           <li><a href="">ABOUT</a></li>
                           <li><a href="">CONTACT</a></li>
                           <li><a href="">PROFILE</a></li>
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
                        <p class="w-[250px] mb-10">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam, rem?</p>
                        <p class="my-2"><span class="underline">Phone:</span> +8801423542132</p>
                        <p class="my-2"><span class="underline">Email:</span> <a href="">rafid.ahmmad.3@gmail.com</a></p>
                        <p class="my-2"><span class="underline">Website:</span> <a href="">www.randomwebsite.com</a></p>
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

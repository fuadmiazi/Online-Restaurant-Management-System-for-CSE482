<!DOCTYPE html>
<html lang="en">

<head>
   <title>Khanas - Cart</title>
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

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

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

      @keyframes slide-in {
         0% {
            height: 0%;
         }

         100% {
            height: 100%;
         }
      }

      @keyframes slide-out {
         0% {
            height: 100%;

         }

         100% {
            height: 0%;
         }
      }
   </style>
</head>

<body class="bg-[#282421] overflow-x-hidden text-white">
   <?php require "nav-component.php" ?>
   <div class="h-screen w-screen flex flex-col">
      <div class="flex justify-between items-center py-14 px-64">
         <div class="flex flex-col justify-center items-center">
            <p class="text-2xl font-bold">CART</p>
            <p class="text-xs">Added Cart Items</p>
         </div>
      </div>


      <div class="del-info-form h-full" style="display: none;">
         <?php
         include "delivery-info.php";
         ?>
      </div>


      <div class="flex justify-between items-start px-64 flex-wrap mb-56 bg-[#282421] relative z-10  pt-20">
         <section class="w-[850px] mb-5">
            <hr class="mb-5" />

            <div class="flex justify-between py-5 pl-5 pr-10 bg-stone-700 rounded-sm mb-5">
               <div class="flex gap-5">
                  <img class="w-[150px] h-[120px] object-cover object-bottom" src="images/food1.jpg" alt="" />
                  <div class="flex flex-col justify-between">
                     <div class="">
                        <p class="font-medium mb-2">SomeRandom Burger</p>
                        <p class="text-sm text-zinc-400">In Stock</p>
                     </div>
                     <div class="">
                        <button class="px-5 py-2 bg-red-500 hover:bg-red-600 rounded">DELETE</button>
                     </div>
                  </div>
               </div>

               <div class="flex flex-col items-start gap-2">
                  <p class="font-medium">Each Price</p>
                  <p class="text-base">$50</p>
               </div>
               <div class="flex flex-col items-start gap-2">
                  <p class="font-medium">Quantity</p>
                  <input class="text-black w-16 rounded h-8" type="number" name="points" step="1" value="1" min="0"/>
               </div>
               <div class="flex flex-col items-end gap-2">
                  <p class="font-medium">Total Price</p>
                  <p class="text-base">$100</p>
               </div>
            </div>

            <div class="update-btn flex justify-end gap-5 mb-16">
               <button class="bg-red-500 hover:bg-red-600 h-11 w-44 rounded-sm font-medium">CLEAR ALL</button>
               <button class="bg-green-600 hover:bg-green-700 h-11 w-44 rounded-sm font-medium">UPDATE</button>
            </div>
         </section>

         <section class="w-[450px]">
            <hr class="mb-5" />
            <form class="bg-stone-700 rounded-sm px-7 py-5" action="">
               <p class="text-sm mb-3">Enter Promo Code</p>
               <div class="flex items-stretch">
                  <input class="rounded-l-sm text-black" type="text" name="" id="" placeholder="E.g. RAF2012" />
                  <button class="bg-stone-800 w-full">Submit</button>
               </div>
               <div class="mt-10">
                  <div class="flex justify-between mb-3">
                     <div class="">Shipping Cost</div>
                     <div class="">$2</div>
                  </div>
                  <div class="flex justify-between mb-3">
                     <div class="">Discount</div>
                     <div class="">-$0</div>
                  </div>
                  <div class="flex justify-between mb-3">
                     <div class="">Tax</div>
                     <div class="">$2</div>
                  </div>
                  <div class="flex justify-between mb-2 font-semibold text-lg mt-4">
                     <div class="">Estimated Total</div>
                     <div class="">$10</div>
                  </div>
                  <div class="grid w-full grid-cols-2 space-x-2 rounded-sm bg-gray-200 p-2 text-black mt-5"
                     x-data="app">
                     <div class="option-btn">
                        <input type="radio" name="option" id="delivery" class="peer hidden" required />
                        <label for="delivery"
                           class="block cursor-pointer select-none rounded-sm p-2 text-center peer-checked:bg-stone-800  peer-checked:font-bold peer-checked:text-white">Delivery</label>
                     </div>

                     <div class="option-btn">
                        <input type="radio" name="option" id="pre-order" class="peer hidden" required checked />
                        <label for="pre-order"
                           class="block cursor-pointer select-none rounded-sm p-2 text-center peer-checked:bg-stone-800  peer-checked:font-bold peer-checked:text-white">Pre-Order</label>
                     </div>


                  </div>
                  <div class="w-full">
                     <button
                        class="mt-10 mb-2 bg-yellow-400 hover:bg-yellow-500 text-black font-bold rounded-sm w-full h-11 flex justify-center items-center gap-1">
                        <img class="w-4 -translate-y-[1.5px]" src="images/lock.svg" alt="" />
                        <p>CHECKOUT</p>
                     </button>
                  </div>
               </div>
            </form>
         </section>
      </div>
      <?php require "footer.php" ?>
   </div>

   <script>

      $(".option-btn").click(function (e) {
         if (e.target.id == "delivery") {
            $("#delivery").attr("checked", "checked");
            $("#pre-order").removeAttr("checked");
            $(".del-info-form").css("display", "block").css("animation",
               "slide-in 1s ease-in-out");


         }
         else if (e.target.id == "pre-order") {
            $("#pre-order").attr("checked", "checked");
            $("#delivery").removeAttr("checked");
            $(".del-info-form").css("animation",
               "slide-out 1s ease-in-out").one('animationend', () => {
                  $(".del-info-form").css("display", "none");
               });
         }
      });


   </script>
</body>

</html>
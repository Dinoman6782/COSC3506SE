<?php include './Includes/pageHeader.php' ?>
<style>
      .layer1 {
        aspect-ratio: 1920/400;
        background-image: url("./SVG/Curve\ 1.svg");
        z-index: -1;
      }

      .bubble {
        aspect-ratio: 475/476;
        background-image: url("./SVG/Design\ Bubble.svg");
        z-index: 2;
        transform-origin: bottom right;
        transform: scale(0.85);
      }
      .animate-width {
        transition: width 1s ease-in-out;
      }

      @keyframes fadeIn {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }

      .fade-in-left {
        animation: fadeIn 2.5s cubic-bezier(0.99, 0, 1, 1);
      }

      .fade-in {
        animation: fadeIn 2s ease-in-out;
      }
</style>
  <body class="bg-gradient-to-r from-main-purple to-main-blue">
    <div class="relative">
      <?php include './Includes/signupSVGBG.php' ?>
      <?php include './Includes/navBar.php'; ?>
      <div class="flex justify-center items-center h-screen">
      <!-- Login form beggins here -->    
        <div
         id="animatedDiv"
         class="bg-white grid grid-cols-2 grid-rows-[70%_30%] rounded-xl shadow-lg relative animate-width"
         style="width: 10vw; height: 700px"
       >
          <div
           class="col-start-1 row-span-2 bg-gradient-to-tl from-main-purple to-main-blue rounded-xl h-full w-full"
         >
            <div class="row-start-1 flex justify-center items-center px-14 pt-24"
            style="height: 70%;">
                 <div
                 class="font-bold text-white fade-in-left"
                 style="font-size: 6.5rem; line-height: 1"
               >
                 Don't have an <u>Account</u>?
               </div>
            </div>

            <div
               class="row-start-2 flex justify-center items-center pb-10"
               style="z-index: 3; height: 30%;"
             >
             <div
             class="col-start-2 spacer bubble pointer-events-none fade-in-left"
           ></div>
               <button
                 class="font-roboto text-3xl bg-white text-main-blue rounded-xl hover:bg-gray-100 hover:shadow-md fade-in-left transition duration-300 ease-in-out"
                 style="width: 13.5rem; height: 3.5rem"
               >
               <a href="./index.php" class="w-full h-full flex items-center justify-center">Sign Up</a>   
               </button>
             </div>
        </div>
      <form action="./loginAction.php" method="POST">
        <div class="h-full w-full col-start-2 row-start-1 flex flex-col justify-center items-center gap-24">
        <div class="w-full px-7 fade-in">
               <label
                 class="text-lg font-roboto text-black tracking-widest pl-1"
                 >Email</label
               ><br />
               <div class="relative">
                 <span
                   class="material-symbols-outlined absolute mt-3 ml-3 pointer-events-none"
                 >
                   mail
                 </span>
                 <input
                   class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="email"
                   type="email"
                   name="email"
                   placeholder="Something@user.com"
                   required
                 />
               </div>
             </div>
             <div class="w-full px-7 fade-in">
               <label
                 class="text-lg font-roboto text-black tracking-widest pl-1"
                 >Password</label
               ><br />
               <div class="relative">
                 <span
                   class="material-symbols-outlined absolute mt-3 ml-3 pointer-events-none"
                 >
                   key
                 </span>
                 <input
                   class="shadow appearance-none border rounded-xl w-full h-12 py-2 px-10 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   id="password"
                   type="password"
                   name="password"
                   placeholder="Password"
                   required
                 />
               </div>
             </div>
        </div>
        <div
             class="row-start-2 w-full flex justify-center items-center pb-10"
             style="height: 43%;"
           >
             <button
               class="font-roboto text-3xl bg-main-purple text-white rounded-xl hover:bg-main-purple-shade hover:shadow-md fade-in transition duration-300 ease-in-out"
               style="width: 13.5rem; height: 3.5rem"
               name="login"
               type="submit"
             >
              Log In
             </button>
           </div>
         </div>
      </from>   
     </div>  
    </div>
  </body>
  <script src="./JS/navbar.js"></script>
 <script src="./JS/signup_login_animatedBG.js"></script>
</html>

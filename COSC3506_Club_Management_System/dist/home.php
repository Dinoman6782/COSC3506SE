<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="stylesheet" href="./CSS/mainStyles.css" />
  </head>
  <body>
    <div class="font-roboto font-black text-main-purple text-8xl">
      Home Page
    </div>
    <div class="font-roboto font-black text-main-purple text-4xl mt-4">
      View All Clubs:
    </div>
    <div class="w-full flex px-5 mt-10 gap-5 relative">
      <div
        class="bg-main-blue rounded-lg w-1/3 h-60 shadow-2xl p-1"
        style="z-index: 1"
      >
        <a class="w-full h-full" href="./club.php">
          <div
            class="h-full w-full p-3"
            style="
              background-image: url('./Images/Essential-Books.jpg');
              z-index: 2;
            "
          >
            <div class="flex h-full w-full items-center">
              <div class="font-roboto font-black text-white text-6xl">
                Book Club
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </body>
</html>

<?php
session_start();
if(!isset($_SESSION["user_id"])) 
{
    header("Location: ./login.php");
    exit();
}
?>
<?php include './Includes/pageHeader.php' ?>
  <style>
    .shadowMain {
      box-shadow: -4px 4px 8px 2px rgba(0, 0, 0, 0.25),
        0px 0px 10px 1px rgba(0, 0, 0, 0.25);
    }
  </style>
  <body>
    <?php include './Includes/navBar.php' ?>
    <div class="w-full h-full relative">
      <svg
        class="spacer"
        style="z-index: -1"
        width="1920"
        height="744"
        viewBox="0 0 1920 744"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          fill-rule="evenodd"
          clip-rule="evenodd"
          d="M1920 102.217V744H0V322.027C75.4477 272.847 188.751 225.357 313.5 241.989C415.881 255.639 490.294 322.674 558.661 384.262C638.54 456.22 710.165 520.743 808.5 483.999C876.324 458.656 975.984 382.854 1086.82 298.552C1274.22 156.016 1493.57 -10.8194 1645 0.850204C1760.27 9.7329 1854.12 55.0853 1920 102.217Z"
          fill="url(#paint0_linear_2719_573)"
        />
        <defs>
          <linearGradient
            id="paint0_linear_2719_573"
            x1="1920"
            y1="19.8641"
            x2="104.082"
            y2="931.688"
            gradientUnits="userSpaceOnUse"
          >
            <stop stop-color="#9253FE" />
            <stop offset="1" stop-color="#858FFF" />
          </linearGradient>
        </defs>
      </svg>

      <div class="h-full w-full px-28 py-10">
        <div class="text-main-blue font-roboto font-black text-7xl">
          CLUB BANNER
        </div>
        <div class="bg-white w-full h-96 rounded-lg shadowMain mt-5 p-2">
          <div class="bg-black w-full h-full rounded-lg">
            <div class="flex justify-center items-center w-full h-full">
              <svg
                width="129"
                height="129"
                viewBox="0 0 129 129"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M59.125 91.375H69.875V69.875H91.375V59.125H69.875V37.625H59.125V59.125H37.625V69.875H59.125V91.375ZM64.5 118.25C57.0646 118.25 50.0771 116.861 43.5375 114.084C36.9979 111.218 31.3094 107.366 26.4719 102.528C21.6344 97.6906 17.7823 92.0021 14.9156 85.4625C12.1385 78.9229 10.75 71.9354 10.75 64.5C10.75 57.0646 12.1385 50.0771 14.9156 43.5375C17.7823 36.9979 21.6344 31.3094 26.4719 26.4719C31.3094 21.6344 36.9979 17.8271 43.5375 15.05C50.0771 12.1833 57.0646 10.75 64.5 10.75C71.9354 10.75 78.9229 12.1833 85.4625 15.05C92.0021 17.8271 97.6906 21.6344 102.528 26.4719C107.366 31.3094 111.173 36.9979 113.95 43.5375C116.817 50.0771 118.25 57.0646 118.25 64.5C118.25 71.9354 116.817 78.9229 113.95 85.4625C111.173 92.0021 107.366 97.6906 102.528 102.528C97.6906 107.366 92.0021 111.218 85.4625 114.084C78.9229 116.861 71.9354 118.25 64.5 118.25ZM64.5 107.5C76.5042 107.5 86.6719 103.334 95.0031 95.0031C103.334 86.6719 107.5 76.5042 107.5 64.5C107.5 52.4958 103.334 42.3281 95.0031 33.9969C86.6719 25.6656 76.5042 21.5 64.5 21.5C52.4958 21.5 42.3281 25.6656 33.9969 33.9969C25.6656 42.3281 21.5 52.4958 21.5 64.5C21.5 76.5042 25.6656 86.6719 33.9969 95.0031C42.3281 103.334 52.4958 107.5 64.5 107.5Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
        </div>
        <div
          class="bg-white w-full rounded-lg shadowMain mt-5 p-2"
          style="height: 26rem"
        >
          <form action="" method="">
            <div class="flex flex-col gap-6 w-full h-full p-5">
              <div>
                <label
                  class="text-lg font-roboto text-main-blue tracking-widest pl-1"
                  >CLUB NAME</label
                ><br />
                <input
                  class="shadow appearance-none border text-base rounded-xl w-full h-12 py-2 px-2 text-main-blue leading-tight focus:outline-none focus:shadow-outline placeholder:text-main-blue"
                  id="studentnumber"
                  type="text"
                  placeholder="Enter Club Name Here"
                  required
                />
              </div>
              <div>
                <label
                  for="message"
                  class="text-lg font-roboto text-main-blue tracking-widest pl-1"
                  >CLUB DESCRIPTION</label
                >
                <textarea
                  id="message"
                  rows="4"
                  class="block resize-none text-base p-2.5 w-full shadow appearance-none border rounded-xl h-40 py-2 px-2 text-main-blue leading-tight focus:outline-none focus:shadow-outline placeholder:text-main-blue"
                  placeholder="Write your thoughts here..."
                  required
                ></textarea>
              </div>
              <div class="flex items-center justify-center w-full h-full">
                <button
                  type="submit"
                  name="creatClub"
                  class="bg-transparent hover:bg-main-purple text-main-purple font-semibold hover:text-white py-2 px-4 border border-main-purple hover:border-transparent rounded font-roboto"
                >
                  CREATE CLUB
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
  <script src="./JS/navbar.js"></script>
</html>

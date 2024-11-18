<?php
if(!isset($_SESSION["user_id"])) 
{
    header("Location: ./index.php");
    exit();
}
?>
<?php include './Includes/pageHeader.php' ?>
  <body>
    <div class="relative"> 
    <?php include './Includes/navBar.php' ?>
    <!-- This whole page needs to be reworked! -->
      <div
        class="w-full h-screen pl-24 pr-4 py-5 bg-gradient-to-r from-main-purple to-main-blue"
      >
        <div class="bg-white w-full h-full rounded-lg hover:shadow-xl flex flex-col gap-28 px-5 justify-center">
            <div class="flex justify-center items-center gap-32">
                <div class="size-96 bg-gray-500 rounded-full"></div>
                <div class="text-main-blue font-roboto font-extrabold text-9xl">Welcome, Tom Cat</div>
            </div>
            <div class="flex flex-col gap-10">
                <div class="flex gap-80 items-center justify-center">
                    <div>
                        <label class="text-main-blue font-roboto font-thin text-2xl">First Name:</label> <br>
                        <input type="text" placeholder="Tom" class="focus:outline-none text-lg text-main-blue placeholder-main-blue border-b-2 border-main-blue" onfocus="showButtons()" onblur="hideButtons()">
                    </div>
                    <div>
                        <label class="text-main-blue font-roboto font-thin text-2xl">Last Name:</label> <br>
                        <input type="text" placeholder="Cat" class="focus:outline-none text-lg text-main-blue placeholder-main-blue border-b-2 border-main-blue" onfocus="showButtons()" onblur="hideButtons()">
                    </div>
                </div>
                <div class="flex gap-80 items-center justify-center">
                    <div>
                        <label class="text-main-blue font-roboto font-thin text-2xl">Email:</label> <br>
                        <input type="email" placeholder="jerrysucks123@something.com" class="focus:outline-none text-lg text-main-blue placeholder-main-blue border-b-2 border-main-blue" onfocus="showButtons()" onblur="hideButtons()">
                    </div>
                    <div>
                        <label class="text-main-blue font-roboto font-thin text-2xl">Phonenumber:</label> <br>
                        <input type="text" placeholder="123-456-7890" class="focus:outline-none text-lg text-main-blue placeholder-main-blue border-b-2 border-main-blue" onfocus="showButtons()" onblur="hideButtons()">
                    </div>
                </div>
                <div class="flex gap-80 items-center justify-center">
                    <div>
                        <label class="text-main-blue font-roboto font-thin text-2xl">Password:</label> <br>
                        <input type="password" placeholder="************" class="focus:outline-none text-lg text-main-blue placeholder-main-blue border-b-2 border-main-blue" style="width:720px;" onfocus="showButtons()" onblur="hideButtons()">
                    </div>
                </div>
                <div class="flex justify-center items-center gap-80" id="buttons" style="display: none;">
                    <button class="bg-white shadow-2xl round w-40 h-10 rounded-lg text-main-blue border-2 border-gray-100 font-roboto font-medium">Discard Changes</button>
                    <button class="bg-main-purple round w-40 h-10 rounded-lg text-white font-roboto font-medium">Save Changes</button>
                </div>
            </div>     
      </div>
    </div>
  </body>
  <script src="./JS/navbar.js"></script>
     <script>
        function showButtons() {
            document.getElementById('buttons').style.display = 'flex';
        }
    
        function hideButtons() {
            setTimeout(function() {
                document.getElementById('buttons').style.display = 'none';
            }, 200); // Delay to allow clicking the buttons
        }
    </script>
</html>

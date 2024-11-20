<?php
  session_start();
?>
<?php
if(!isset($_SESSION["user_id"])) 
{
    header("Location: ./index.php");
    exit();
}
?>
<?php include './Includes/pageHeader.php' ?>
  <body>
    <?php include './Includes/navBar.php' ?>
    <div class="flex justify-center items-center w-full" style="height: 100vh">  
    <?php
                            if(isset($_SESSION["user_id"]))
                            {
                                echo "<div>Welcome, " . $_SESSION['firstname'] . "</div>";
                            }
                            else
                            {
                                echo "<div>Welcome, user!</div>";
                            }
      ?>
    </div>
  </body>
  <script src="./JS/navbar.js"></script>
</html>

<?php
session_start();
if(!isset($_SESSION["user_id"])) 
{
    header("Location: ./login.php");
    exit();
}
?>
<?php include './Includes/pageHeader.php' ?>
  <body>
  <?php include './Includes/navBar.php' ?>
    <h1>This is the Settings Page!</h1>
  </body>
  <script src="./JS/navbar.js"></script>
</html>

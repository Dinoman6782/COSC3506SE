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
    <h1>This is the Settings Page!</h1>
  </body>
</html>

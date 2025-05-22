
<?php
session_start();

if (!isset($_SESSION['authenticated'])) {
  header("Location: /login.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Abdullah</title>
  </head>

  <body>
    <h1>Assignment 1</h1>
    <p>Welcome, <?=$_SESSION['username']?></p>
  </body>
</html>

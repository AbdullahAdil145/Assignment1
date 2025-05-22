<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Abdullah</title>
  </head>

  <body>
    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username'];
    <p><a href="/login.php">Click to Login</p>
  </body>
</html>
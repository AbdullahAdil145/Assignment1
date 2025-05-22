<?php

  session_start();

  $valid_username = "Abdullah";
  $valid_password = "Abdullah145";

  $username = $_REQUEST['username'];
  $_SESSION['username'] = $username;
  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    header("location: /");
  } else {
    if (!isset($_SESSION['failed_attempts'])){
      $_SESSION['failed_attempts'] = 1;
    } else {
      $_SESSION['failed_attempts'] = $_SESSION['failed_attempts'] + 1;
    }
    echo "Unsuccessful Attempt Number: " . $_SESSION['failed_attempts'];
  }
?>
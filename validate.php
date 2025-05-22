<?php

  $valid_username = "Abdullah";
  $valid_password = "Abdullah145";

  $username = $_REQUEST['username'];
  $password = $_REQUEST['password'];

  if ($username == $valid_username && $password == $valid_password) {
    echo "Successful";
  } else {
    echo "Fail";
  }
?>
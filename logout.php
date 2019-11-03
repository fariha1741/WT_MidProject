<?php

session_start();
session_destroy();

//session_unset($_SESSION['username']);
setcookie("uname", $uname, time() - 3, "/");
header('location: login.php');

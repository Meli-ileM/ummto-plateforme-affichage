<?php

session_start();
unset($_SESSION['emailetd']);
unset($_SESSION['emailens']);
unset($_SESSION['email']);
session_destroy();
header("location:../index.php");


?>

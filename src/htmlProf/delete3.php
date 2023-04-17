<?php
include("../database/database.php");
global $db; 
if (isset($_GET['supp'])) {
   
    $email=$_GET['supp'];
    echo"$email";

    $q=$db->prepare("DELETE FROM enseignant WHERE emailens=:email");
    $q->execute(['email'=> $email]);
    //echo"bien supp";
    header('location:../index.php');
}else{
    echo"email vide";
}


?>
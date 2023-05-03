<?php

include("../database/database.php");
global $db; 

    $supmail=$_GET['suppemail'];
    echo"$supmail";

    $q=$db->prepare("DELETE FROM etudiant WHERE emailetd=:email");
    $q->execute(['email'=> $supmail]);
    
    header('location:../index.php');
    


?>
<?php


include("../database/database.php");
global $db; 


    $id=$_GET['deleteid'];


    $q = $db->prepare("DELETE FROM recourt WHERE idr=$id");
    $q->execute();
   
    header('location:affiDemRecours1.php');
    


?>
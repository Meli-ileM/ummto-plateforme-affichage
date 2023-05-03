<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
  <link rel="icon" type="image/png" href="../IMG/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS6NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>...</title>
   
</head>


<?php
include("../database/database.php");
    global $db; 
    
   
    extract($_POST);

    if(!empty($lemail) && !empty($moduleenseignant) && !empty($sectiongroupe) && !empty($promo) && !empty($semestre) && !empty($deliberation) && !empty($recours)) 
     {

      $q = $db->prepare("SELECT emailetd FROM etudiant WHERE emailetd = :email");
        $q->execute(['email' => $lemail]);
        $result1 = $q->fetch();
        //result == True
        //var_dump($result1);

        if($result1==true){
          $q = $db->prepare("INSERT INTO recourt (email,moduleenseignant,sectiongroupe, promo, semestre, deliberation, recours) VALUES (:email,:moduleenseignant,:sectiongroupe, :promo, :semestre,:deliberation,:recours)");
          $q->execute([
          'email' => $lemail,
          'moduleenseignant' => $moduleenseignant,  
          'sectiongroupe' =>$sectiongroupe, 
          'promo' => $promo,
          'semestre' => $semestre,
          'deliberation' => $deliberation ,
          'recours' => $recours,
          ]);
         
          ?> <p class="bg-success display-7 font-weight-blod text-center text-white"> Le recours a bien été envoyé! </p> <?php
      }
      else{
        ?> <p class="bg-danger display-7 font-weight-blod text-center text-white"> L'email saisi n'existe pas </p> <?php
      }
     }
   
?>
</body>
</html>







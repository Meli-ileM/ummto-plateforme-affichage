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
  

    if(!empty($nomprenom) && !empty($lemail) && !empty($sectiongroupe)  && !empty($specialite1) && !empty($specialite2)) 
   {
      $q = $db->prepare("SELECT emailetd FROM etudiant WHERE emailetd = :email");
      $q->execute(['email' => $lemail]);
      $result1 = $q->fetch();
      //var_dump($result1);
     

      $result2=true;
      if( $specialite1 == $specialite2)
            {
             $result2 = false;
             ?> <p class="bg-danger display-7 text-center text-white"> Erreur, Veuillez saisir differents choix ! </p> <?php
            } 
      // var_dump($result2);
   
      $l = $db->prepare("SELECT email FROM recourorientation WHERE email = :email");
      $l->execute(['email' => $lemail]);
      $result3 = $l->fetch();
      //var_dump($result3);

      if($result1==true && $result2==true && $result3==false) 
            {
             $q = $db->prepare("INSERT INTO recourorientation (nomprenom,email,sectiongroupe ,specialite1, specialite2) VALUES (:nomprenom,:email,:sectiongroupe,:specialite1, :specialite2)");
             $q->execute([
               'nomprenom' => $nomprenom,  
               'email' => $lemail,  
               'sectiongroupe' =>$sectiongroupe,
               'specialite1' => $specialite1,
               'specialite2' => $specialite2,
             ]);
              ?> <p class="bg-success display-7 text-center text-white"> Le recours a bien été envoyé! </p> <?php
            } 
            elseif($result1==false && $result2==true && $result3==false)
              {
               ?><p class="bg-danger display-7 text-center text-white"> L'email saisi n'existe pas  </p> <?php
              }
            elseif($result3==true && $result1==true && $result2==true)
             {
               ?> <p class="bg-danger display-7 text-center text-white"> Vous avez déja effectué un recours sur l'orientation.  </p> <?php
             }
   }
   
  
      
   
?>
</html>
 
     
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
   
    if(!empty($nomprenom) && !empty($lemail) && !empty($sectiongroupe)  && !empty($choix1) && !empty($choix2) && !empty($choix3) && !empty($choix4) && !empty($choix5)) 
    {

      $q = $db->prepare("SELECT emailetd FROM etudiant WHERE emailetd = :email");
      $q->execute(['email' => $lemail]);
      $result1 = $q->fetch();

      $choix = array($choix1,$choix2,$choix3,$choix4,$choix5);
      $result2=true;
        for( $i = 0 ; $i <=4 ; $i++ )
       {
      
         for( $j = $i+1 ; $j <=4 ; $j++ )
         {
            //echo"<br>les choix j<br>".$choix[$j];
            if( $choix[$i] == $choix [$j])
             {
             
               $result2 = false;
             } 
          }
        }
       // var_dump($result2);

      $l = $db->prepare("SELECT email FROM orientation WHERE email = :email");
      $l->execute(['email' => $lemail]);
      $result3 = $l->fetch();
      //var_dump($result3);
 
       
  
      if($result1 ==true && $result2==true && $result3==false) {
                $q = $db->prepare("INSERT INTO orientation (nomprenom,email,sectiongroupe ,choix1, choix2, choix3, choix4, choix5) VALUES (:nomprenom,:email,:sectiongroupe,:choix1, :choix2, :choix3,:choix4,:choix5)");
                $q->execute([
                'nomprenom' => $nomprenom,  
                'email' => $lemail,  
                'sectiongroupe' =>$sectiongroupe,
                'choix1' => $choix1,
                'choix2' => $choix2,
                'choix3' => $choix3,
                'choix4' => $choix4 ,
                'choix5' => $choix5,
                ]);
                ?> <p class="bg-success display-7 text-center text-white"> Le recours a bien été envoyé! </p> <?php
               
              }
        elseif($result1==false && $result2==true && $result3==false)
            {
              ?><p class="bg-danger display-7 text-center text-white"> L'email saisi n'existe pas  </p> <?php
            }
        elseif($result1==true && $result2==true && $result3==true)
            {
            ?> <p class="bg-danger display-7 font-weight-blod text-center text-white">Vous avez déja effectué votre choix d'orientation.  </p>  <?php
            }
        elseif($result1==true && $result2==false ||  $result3==false )
            {
              ?> <p class="bg-danger display-7 text-center text-white"> Erreur, Veuillez saisir differents choix ! </p> <?php
            }    
    } 
  ?>
</html>
 
     
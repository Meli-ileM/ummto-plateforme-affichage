<?php
 include("../database/database.php");
 global $db; 
 $id= $_GET['confi'];


 $q = $db->prepare(" SELECT * FROM recourt WHERE idr=$id ");
 $q->execute();
 $result = $q->fetch();

 $lemailc = $result['email'];
 $moduleenseignantc = $result['moduleenseignant'];
 $sectiongroupec = $result['sectiongroupe'];
 $promoc = $result['promo'];
 $semestrec = $result['semestre'];
 $deliberationc = $result['deliberation'];
 $recoursc = $result['recours'];
  
 $l = $db->prepare("INSERT INTO recourconfirmer (emailc,moduleenseignantc,sectiongroupec, promoc, semestrec, deliberationc, recoursc) VALUES (:email,:moduleenseignant,:sectiongroupe, :promo, :semestre,:deliberation,:recours)");
 $l->execute([
 'email' => $lemailc,
 'moduleenseignant' => $moduleenseignantc,  
 'sectiongroupe' =>$sectiongroupec, 
 'promo' => $promoc,
 'semestre' => $semestrec,
 'deliberation' => $deliberationc ,
 'recours' => $recoursc,
 ]);

 header('location:./affiDemRecours1.php');






 

 ?>
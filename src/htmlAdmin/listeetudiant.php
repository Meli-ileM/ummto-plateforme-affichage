<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="../css/style2.css">
   <title>Listes des etudiant</title>
</head>
<?php
   include("../Nav/navadmin.php");

include("../database/database.php");
global $db; 


$q = $db->prepare("SELECT * FROM etudiant ORDER BY date DESC "); 
$q->execute();

?>


<body class="bg-light" >
  <div class="container-fluid">
    <div class="row" style="margin-top:80px">
       <div class=" col">
          <div class="card mt-5">
             <div class="card-header">
                 <h2 class="display-5 text-center">Listes des comptes etudiants</h2> 
                 <div class="my-3 d-flex justify-content-center align-items-center"><a href="Signup.php" class=" btn btn-success" data-toggle="modal" data-target="#ajouterEnseignantModal">Ajouter un etudiant</a></div>
                </div>
                     <div class="card-body">
                         <table class="table table-bordered text-center ">
                            <thead>
                               <tr class="bg-dark text-white">
                                 <td> Nom</td>
                                 <td> Prenom </td>
                                 <td> Email </td>
                                 <td> Date Naissance </td>
                                   
                              </tr>
                              </thead>
                           
                             
                             <?php
                               while($result = $q->fetch())
                               {
                                $nom = $result['nom'];
                                $prenom = $result['prenom'];
                                $email = $result['emailetd'];
                                $datenaiss = $result['datenaiss'];
                                    
                                    echo '
                                    <tbody>
                                    <tr>  
                                    <td >  '.$nom.'</td>
                                    <td >'.$prenom.'</td>
                                    <td >'.$email.'</td> 
                                    <td >'.$datenaiss.'</td> 
                                    
                                           </tr>  
                                           </tbody>';
                                          } 
                                          ?>
                                        
                                         
                               </table>
                           </div>
                    
                 </div>
              </div>
          </div>
      </div> 
      <?php

?> 
      <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
</body>
</html> 




                
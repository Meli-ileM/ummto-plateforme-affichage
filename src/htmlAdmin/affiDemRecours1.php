<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
   <title>Listes des Recours</title>
</head>
<?php


include("../database/database.php");
global $db; 


$q = $db->prepare("SELECT * FROM recourt ORDER BY date DESC "); 
$q->execute();

?>


<body class="bg-light" >
  <?php include("../Nav/navadmin.php");?>
 
  <div class="container-fluid">
    <div class="row" style="margin-top:80px">
       <div class=" col">
          <div class="card mt-5">
             <div class="card-header">
                 <h2 class="display-5 text-center">Listes des Recours Reçus </h2> 
                </div>
                     <div class="card-body">
                         <table class="table table-bordered text-center ">
                            <thead>
                               <tr class="bg-dark text-white">
                                 <td> Email</td>
                                 <td> Section groupe </td>
                                 <td> Promo </td>
                                 <td> Semestre </td>
                                 <td> Session </td>
                                 <td> Module Enseignant </td>
                                 <td > Recours </td>
                                 <td> Operation </td>
                              </tr>
                              </thead>
                           
                             
                             <?php
                               while($result = $q->fetch())
                               {                       
                               
                                    $id = $result['idr'];
                                    $email = $result['email'];
                                    $sectiogroupe = $result['sectiongroupe'];
                                    $promo = $result['promo'];
                                    $semestre = $result['semestre'];
                                    $deliberation = $result['deliberation'];
                                    $moduleenseignant = $result['moduleenseignant'];
                                    $recours = $result['recours'];
                                    echo '
                                    <tbody>
                                    <tr>  
                                    <td >  '.$email.'</td>
                                    <td >'.$sectiogroupe.'</td>
                                    <td >'.$promo.'</td> 
                                    <td >'.$semestre.'</td> 
                                    <td >'.$deliberation.'</td>
                                    <td >'.$moduleenseignant.'</td>
                                    <td >'.$recours.'</td> 
                                    <td >
                                    <a href="enrgrecoconfi1.php?confi='.$id.'"><button class="btn btn-dark" onclick="showconfi()">Confirmer</button></a>
                             <br>
                             <br>

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   supprimer
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Attention</h1>
                                           
                                          </div>
                                          <div class="modal-body">
                                          Êtes-vous sur de vouloir supprimer ce recours ? ?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                                            <a href="delete1.php?deleteid='.$id.'"> <button type="button" class="btn btn-primary">oui</button></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                    </td>
                                    </tr>  
                                    </tbody> ';
                                
                                   } 
                                    ?>
                                  
                                   
                         </table>
                     </div>
              
           </div>
        </div>
    </div>
</div>
<script>
    function showconfi(){
        alert("le recours a bien été approuvé !");
    }
</script>
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
 
</body>
</html> 




                
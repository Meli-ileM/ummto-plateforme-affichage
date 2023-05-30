<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="../js/javas.js">
   <title>Listes des Recours confirmés</title>
   <link rel="stylesheet" href="../css/style2.css">
   <link rel="icon" type="image/png" href="../IMG/logo.png">
</head>
<?php

ini_set('display_errors', '0');

 include("../database/database.php");
 global $db; 
//  include("../Nav/navadmin.php");

if ($_SESSION['numbre']==1)
{
    include("../Nav/navbar.php");
}
elseif ($_SESSION['numbre']==2)
{
    include("../Nav/navprf.php");
}
else
{
    include("../Nav/navadmin.php");
}
  

 $q = $db->prepare( "SELECT * FROM recourconfirmer ORDER BY date DESC ");
 $q->execute();

 ?>
<body class="bg-light">
  <div class="container-fluid">
    <div class="row" style="margin-top:90px">
       <div class="col">
          <div class="card mt-3">
             <div class="card-header bg-success text-white">
                 <h2 class="display-5 text-center"><strong>Listes des Recours Approuvés </strong></h2> 
                </div>
                     <div class="card-body">
                         <table class="table table-bordered text-center">
                            <thead>
                             <tr class="bg-dark text-white">

                                 <td> Email</td>
                                 <td> Section groupe </td>
                                 <td> Promo </td>
                                 <td> Semestre </td>
                                 <td> Session </td>
                                 <td> Module Enseignant </td>
                                 <td> Recours </td>
                                
                             </tr>
                             </thead>
                             <tbody>
                             <tr>
                             <?php              
                                while($result = $q->fetch()) 
                                {
                                    ?>
                                    <td> <?php echo $result['emailc']; ?> </td>
                                    <td><?php echo $result['sectiongroupec']; ?></td>
                                    <td><?php echo $result['promoc']; ?></td> 
                                    <td><?php echo $result['semestrec']; ?></td> 
                                    <td><?php echo $result['deliberationc']; ?></td>
                                    <td><?php echo $result['moduleenseignantc']; ?></td>
                                    <td><?php echo $result['recoursc']; ?></td> 
                               </tr>
                               </tbody>
                              <?php
                                 }
                               ?>
                         </table>
                     </div>
              
           </div>
        </div>
    </div>
</div>
<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
</body>
</html> 
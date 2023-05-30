<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
   <link rel="stylesheet" href="../css/style2.css">
   <link rel="icon" type="image/png" href="../IMG/logo.png">
   <title>Listes des Recours d'orientation</title>
</head>
<?php
include("../Nav/navadmin.php");
include("../database/database.php");
global $ds;


 $q = $db->prepare("SELECT * FROM recourorientation ORDER BY date DESC  ");
 $q->execute();

 ?>
 
<body class="bg-light">
  <div class="container">
    <div class="row" style="margin-top:80px">
       <div class="col">
          <div class="card mt-5">
             <div class="card-header">
                 <h2 class="display-5 text-center">Listes des Recours sur l'orientation </h2>
                </div>
                     <div class="card-body">
                         <table class="table table-bordered text-center">
                            <thead>
                             <tr class="bg-dark text-white">
                                 <td> Nom Prenom</td>
                                 <td> Section groupe </td>
                                 <td> specialité actuelle </td>
                                 <td> specialité demandée</td>
                             </tr>
                             </thead>
                             <tbody>
                             <tr>
                             <?php
                                while($result = $q->fetch())
                                {
                                    ?>
                                    <td data-label="Nom Prenom"> <?php echo $result['nomprenom']; ?> </td>
                                    <td data-label="Section groupe"><?php echo $result['sectiongroupe']; ?></td>
                                    <td data-label="specialite actuelle"><?php echo $result['specialite1']; ?></td>
                                    <td data-label="specialite demander" ><?php echo $result['specialite2']; ?></td>
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
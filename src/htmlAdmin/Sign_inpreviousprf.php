<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS6NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    

</head>
<body>
    
<?php
include("../database/database.php");
global $db; 



  
    extract($_POST);


    if(!empty($spass) && !empty($cpass) && !empty($semail) && !empty($nom) && !empty($prenom))
    {          
        if($spass == $cpass)
        {  
            $options = ['cost' => 12,];
            $hash_pass = password_hash($spass, PASSWORD_BCRYPT, $options);
            //echo "Le hash_pass == ".$hash_pass;

            $c = $db->prepare("SELECT emailens from enseignant  WHERE emailens = :email");
            $c->execute(['email' => $semail]);
            //here we are gonna replace le rowCount de pdo avec  $rowcount=mysqli_num_rows($result);
            $result1 = $c->rowCount();
            //echo "<br>Result1 == $result1";


                if($result1 == 0)
                {
                    if (($semail == $prenom.".".$nom."@ummto.dz")) 
                    {
                        $q = $db->prepare("INSERT INTO enseignant (nom, prenom, emailens, pass) VALUES (:nom, :prenom, :email, :pass)");
                        $q->execute([
                        'nom' => $nom,   
                        'prenom' => $prenom,
                        'email' => $semail,
                        'pass' => $hash_pass,
                        ]);
                         
                        header('Location:listeenseignant1.php');
                    } 
                }
                else
                { ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Un compte existe deja </p> <?php
                }           
        }
        else
        {
            ?> <p class="bg-danger display-7 font-weight-bold text-center text-white"> Veuillez ressaisir le mot de passe ! </p> <?php  
        }   
    }
  


?>


</body>
</html>
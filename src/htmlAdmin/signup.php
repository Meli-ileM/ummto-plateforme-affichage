<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleee.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
 
    <title>SIGN-UP</title>
</head>
<?php include("./Sign_inprevious.php"); 
include("../Nav/navadmin.php");
?>
<body>
    <?php    ?>

    <div class="container-fluid py-5 mt-5" id="div-form">
        <form class="formulaire" method="post" action="">
            <h1 id="titreForm">Inscription Etudiant !</h1>
            <div class="div-formulaire">
                <input type="text" class="inputs" name="nom" required="" placeholder="Nom" title="Nom">
            </div>  
            <div class="div-formulaire">
                <input type="text" class="inputs" name="prenom" required="" placeholder="Prenom" title="Prenom">
            </div>  
            <div class="div-formulaire">
                <input type="date" class="inputs" name="datenaiss" required="" title="Date de naissance">
            </div>  
            <div class="div-formulaire">
                <input type="email" class="inputs" name="semail" required="" placeholder="Email" pattern=".+@fgei\.ummto\.dz$" title="Veuillez utiliser votre adresse email professionnelle"  required="">
            </div>
            <div class="div-formulaire">
                <input type="password" class="inputs" name="spass" placeholder="Mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Doit contenir au moins un chiffre une lettre majuscule et une lettre minuscule, et au moins 8 caractères au total" required="">
            </div>  
            <div class="div-formulaire">
                <input type="password" class="inputs" name="cpass" placeholder="Comfirmez votre mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Confirmez le mot de passe" required="">
            </div>  
            <div class="d-flex justify-content-center align-items-center" >
                <a href="Sign_inprevious.php"><button type="submit">S'inscrire</button></a>
            </div>
            
        </form>

    </div>        
     
   
    <?php include("../Footer/footeradmin.php") ?>


</body>
</html>
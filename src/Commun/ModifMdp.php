
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleee.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Modifier le mot de passe</title>
</head>
<body>
    <?php include("./ModiMdpPhp.php");  
    ini_set('display_errors', '0');
    session_start(); 
    
        if ($_SESSION['numbre'] == 1)
        { 
            include("../Nav/navbar.php");
            $email=$_SESSION['emailetd'];
            $nom = $_SESSION['nom'];
            $prenom = $_SESSION['prenom'];
            
        }
        elseif ($_SESSION['numbre'] == 2)
        {
            include("../Nav/navprf.php");
            $email=$_SESSION['emailens'];
            $nom = $_SESSION['nom'];
            $prenom = $_SESSION['prenom'];
            
        }
        else
        {  
            include("../Nav/navadmin.php");
            $email=$_SESSION['email'];
            $nom = "dep";
            $prenom = "info";
            
        }?>

    <div class="container-fluid py-5 mb-5 mt-2" id="div-form">
        <form class="formulaire" method="post" action="">

            <h1 id="titreForm">Modifier le mot de passe</h1>

            <div class="div-formulaire">
                <input type="text" class="inputs" name="nom" required="" placeholder="Nom" title="Nom" value="<?php echo $nom; ?>">
            </div>  

            <div class="div-formulaire">
                <input type="text" class="inputs" name="prenom" required="" placeholder="Prenom" title="Prenom" value="<?php echo $prenom; ?>">
            </div>  

            <div class="div-formulaire">
                <input type="email" class="inputs" name="email" required="" placeholder="Email" pattern=".+@(fgei\.)?ummto\.dz$" title="Veuillez utiliser votre adresse email professionnelle"  required="" value="<?php echo $email; ?>">
            </div>

            <div class="div-formulaire">
                <input type="password" class="inputs" name="passCourant" placeholder="Mot de passe courant" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Le mdp doit contenir au moins un chiffre une lettre majuscule et une lettre minuscule, et au moins 8 caractères au total" required="">
            </div>  

            <div class="div-formulaire">
                <input type="password" class="inputs" name="nvpass" placeholder="Nouveau mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Nouveau mot de passe" required="">
            </div>  

            <div class="div-formulaire">
                <input type="password" class="inputs" name="passConfirm" placeholder="Comfirmez votre nouveau mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Confirmez votre nouveau mot de passe" required="">
            </div>  

            <div class="d-flex justify-content-center align-items-center" >
                <a href="/editprofilPHP_1.php"><button type="submit">Valider</button></a>
            </div>
            
        </form>

    </div>        
     
    <?php 
    if ($_SESSION['numbre'] == 1)
        { 
            include("../Footer/monfooter.php");
            
        }
        elseif ($_SESSION['numbre'] == 2)
        {
           
            include("../Footer/footerprf.php");
        }
        else
        {   
            include("../Footer/footeradmin.php");   
        }
      ?>
</body>
</html>
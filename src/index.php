<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styleee.css">
    <link rel="icon" type="image/png" href="./IMG/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>LOGIN</title>
</head>
<body style="background: rgb(143, 171, 255);">
    <?php include("./Log_inphp.php");   ?>

    <div class="container-fluid py-5" id="div-form">
        
        <form class="formulaire" method="post" action="">
            <h1 id="titreForm">Connexion</h1>

            <div class="div-formulaire">
                <input type="email" class="inputs" name="lemail" required="" placeholder="Email"  title="Veuillez utiliser votre adresse email professionnelle"  required="">
            </div>

            <div class="div-formulaire">
                <input type="password" class="inputs" name="lpass" id="passwordField" placeholder="Mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Doit contenir au moins un chiffre une lettre majuscule et une lettre minuscule, et au moins 8 caractères au total" required="">
            </div>
            
            <div class="d-flex justify-content-center align-items-center" >
                <a href="./Log_inphp.php"><button type="submit">Se connecter</button></a>   
            </div>

        
        </form>

    </div>        
    
   


</body>
</html>
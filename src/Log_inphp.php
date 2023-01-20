<?php
ini_set('display_errors', '0');
session_start();
include("./database/database.php");
global $db; 

    extract($_POST);
     if(!empty($lemail)&& !empty($lpass))
    {
        $q = $db->prepare("SELECT * FROM etudiant WHERE emailetd = :email");
        $q->execute(['email' => $lemail]);
        $result1 = $q->fetch();

        $q = $db->prepare("SELECT * FROM enseignant WHERE emailens = :email");
        $q->execute(['email' => $lemail]);
        $result2 = $q->fetch();
        
        $q = $db->prepare("SELECT * FROM adminn WHERE email = :email");
        $q->execute(['email' => $lemail]);
        $result3 = $q->fetch();
     
        if ($result1 == true || $result2 == true || $result3 == true)
        {
            
            if(password_verify($lpass, $result1['pass']))
            {
                $_SESSION['numbre'] = 1;
                $_SESSION['emailetd'] = $result1['emailetd'];
                $_SESSION['nom'] = $result1['nom'];
                $_SESSION['prenom'] = $result1['prenom'];
                header('Location:htmlEtudiant/accueil.php');
                
            }
            elseif(password_verify($lpass, $result2['pass']))
            {
                $_SESSION['numbre'] = 2;
                $_SESSION['emailens'] = $result2['emailens'];
                $_SESSION['nom'] = $result2['nom'];
                $_SESSION['prenom'] = $result2['prenom'];
                header('Location:htmlProf\accueilprf.php');

            }
            elseif(password_verify($lpass, $result3['pass']))
            {
                $_SESSION['numbre'] = 0;
                $_SESSION['email'] = $result3['email'];
                header("Location:htmlAdmin\accueiladmin.php");
            }
            else {
                ?><p class="bg-danger display-7 text-center text-white"> Mot de passe incorrect ! </p> <?php
            }
        }
        else
        {
            ?><p class="bg-danger display-7 text-center text-white"> le compte portant l'email <?php echo $lemail ?> n'existe pas!</p> <?php
        }
    }
?> 
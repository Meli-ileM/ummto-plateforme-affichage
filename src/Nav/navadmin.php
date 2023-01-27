<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMMTO</title>
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../css/styl.css">
</head>
<body>
 
            <nav >
                    <a href="../htmlAdmin/accueiladmin.php" class="logo"><img src="../IMG/Logo-avec-ummto-2.png"></a>
                    <div class="nav-links">
                       
                        <ul>
                            <li><a href="../htmlAdmin/accueiladmin.php">Accueil</a></li>
                            <li><a href="../Commun/TabAffichage.php">Tableau D'affichage</a></li>
                            <li><a href="../htmlAdmin/pubADMIN2.php">Publier</a></li>
                            <li class="dropdown">
                                <a href="#">Demandes Reçues <i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                    <a href="../htmlAdmin/affiDemRecours1.php">Listes des Recours Reçus</a>
                                    <a href="../htmlAdmin/affiDemOrientation1.php">Listes des Orientations</a>
                                    <a href="../htmlAdmin/affiDemRecoursOrientation1.php">Listes des Recours sur l'Orientation</a>
                                    <a href="../Commun/affiRecoursCONFIRMER.php">Listes des Recours Approuvés</a>

                              </li>
                              <li class="dropdown">
                                <a href="#">Comptes<i class="fa fa-caret-down"></i></a>
                                <div class="dropdown-content">
                                    <a href="../htmlAdmin/listeetudiant.php">Liste des Comptes Etudiants</a>
                                    <a href="../htmlAdmin/listeenseignant1.php">Liste des Comptes Enseignants</a>
                                    
                              </li>
                           
                        </ul>
                        
                    </div>
                    <div class="profile-dropdown">
                        <div class="profile-dropdown-btn" onclick="toggle1()">
                            <div class="profile-img">
                            </div>
                            <span>
                                PROFILE
                                <i class="fa-solid fa-angle-down"></i>
                            </span>
                        </div>
                        <ul class="profile-dropdown-list">
                            <li class="profile-dropdown-list-item parametres">
                                <a href="#">
                                    <i class="fa-solid fa-sliders"></i>
                                   Compte
                                </a>
                            </li>
                            <li class="profile-dropdown-list-item">
                                <a href="../Commun/logout.php">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    Deconnexion
                                </a>
                            </li>
                        </ul>
                        <ul class="setting_dropdown_menu">
                            <li class="setting_dropdown_menu_item">
                                <a href="../Commun/ModifMdp.php">
                                    <i class="fa-solid fa-lock"></i>
                                     Modifier le mot de passe</a></li> 
                        </ul>
                    </div>
                    <img src="../IMG/user.png" class="user-pic" onclick="toggleMenu()">
                
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="sub-menu-items">
                                <a href="#" class="sub-menu-link parametres">
                                    <i class="fa-solid fa-sliders"></i>
                                    Mon compte
                                </a>
                                <a href="../Commun/logout.php" class="sub-menu-link">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    Deconnexion 
                                </a>
                            </div>
                        </div>
                        
                        
                    </div>
                    <ul class="setting_dropdown_menu_mobile">
                        <li class="setting_dropdown_menu_mobile_item">
                            <a href="../Commun/ModifMdp.php">
                                <i class="fa-solid fa-lock"></i>
                                 Modifier le mot de passe</a></li> 
                        <li class="setting_dropdown_menu_mobile_item">
                             <a href="">
                                <i class="fa-solid fa-user-slash"></i>
                                 Supprimer le compte</a></li>
                    </ul> 
                    
                    <img src="../IMG/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
                
                </nav>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script src="../js/javas.js"></script>
</html>
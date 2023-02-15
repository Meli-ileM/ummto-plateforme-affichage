<?php session_start();
$email = $_SESSION['emailetd'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMMTO</title>
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../css/styl.css">
</head>
<body>
<nav >
        <a href="../htmlEtudiant/accueil.php" class="logo"><img src="../IMG/Logo-avec-ummto-2.png"></a>
        <div class="nav-links">
            
            <ul>
                <li><a href="../htmlEtudiant/accueil.php">Accueil</a></li>
                <li><a href="../Commun/TabAffichage.php">Tableau D'affichage</a></li>
                <li class="dropdown">
                    <a href="#">Recours <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="../htmlEtudiant/FormRecours.php">Faire Un Recours</a>
                        <a href="../Commun/affiRecoursCONFIRMER.php">Recours Approuvés</a>
                    </div>
                    </li>
                <li class="dropdown">
                    <a href="#">Orientations <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="../htmlEtudiant/FormOrientation.php">Soumettre l'Orientations</a>
                        <a href="../htmlEtudiant/FormRecoursOrientation.php">Faire Un Recours sur l'Orientation</a>
                    </li>
            </ul>
            
        </div>
        <br>
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
                            <li class="profile-dropdown-list-item">
                              <?php echo'
                                  <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   supprimer le compte 
                                    </button>
                                    <!-- Modal -->       
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Attention</h1>  
                                          </div>
                                          <div class="modal-body">
                                             <p class="text-lg-left">Etes vous sur de vouloir supprimer ce compte ?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                                            <a href="../htmlEtudiant/delete2.php?suppemail='.$email.'"><button type="button" class="btn btn-primary">oui</button></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>'; ?> </li>
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

                                 <?php echo'
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                   supprimer le compte
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Attention</h1>  
                                          </div>
                                          <div class="modal-body">
                                           <p class="text-lg-left"> etes vous sur de vouloir supprimer ce compte  ?</p>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">non</button>
                                            <a href="../htmlEtudiant/delete2.php?suppemail='.$email.'"> <button type="button" class="btn btn-primary">oui</button></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>';?>


                       
                    </ul> 
                    <img src="../IMG/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
                
    </nav>

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script src="../js/javas.js"></script>
</html>
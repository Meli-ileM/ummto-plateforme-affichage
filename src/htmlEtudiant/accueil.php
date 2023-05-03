<?php session_start();
$email = $_SESSION['emailetd'] ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEP-INFO UMMTO</title>
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" ></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="../css/style (2).css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
</head>
<body style="background: linear-gradient(90deg, rgb(143, 171, 255) 100%, rgb(23, 23, 211) 35%, rgb(143, 171, 255) 100%);">

    <section class="header">
    <nav >
        <a href="" class="logo"><img src="../IMG/Logo-avec-ummto-2.png"></a>
        <div class="nav-links">
            
            <ul>
                <li><a href="./accueil.php">Accueil</a></li>
                <li><a href="../Commun/TabAffichage.php">Tableau D'affichage</a></li>
                <li class="dropdown">
                    <a href="#">Recours <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="./FormRecours.php">Faire Un Recours</a>
                        <a href="../Commun/affiRecoursCONFIRMER.php">Recours Approuvés</a>
                    </div>
                    </li>
                <li class="dropdown">
                    <a href="#">Orientations <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="./FormOrientation.php">Soumettre l'Orientations</a>
                        <a href="./FormRecoursOrientation.php">Faire Un Recours sur l'Orientation</a>
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
                                            <a href="./delete2.php?suppemail='.$email.'"><button type="button" class="btn btn-primary">oui</button></a>
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
                                            <a href="./delete2.php?suppemail='.$email.'"> <button type="button" class="btn btn-primary">oui</button></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>';?>
                    </ul> 
                    <img src="../IMG/menu-btn.png" alt="menu hamburger" class="menu-hamburger">
                
    </nav>
    
    <div class="text-box">
        <h2>BIENVENU SUR LA PLATEFORME D'AFFICHAGE DU DEPARTEMENT INFORMATIQUE </h2>
        <a href="../Commun/TabAffichage.php" class="hero-btn">Parcourir</a>
    </div>
</section>
<div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">

        <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__img">
            <img src="../IMG/JURA SCHOOL.jpg">
        </div>
        <div class="blog-slider__content">
            <div class="blog-slider__title">𝐉𝐔𝐑𝐀 𝐒𝐂𝐇𝐎𝐎𝐋 𝐄𝐗𝐂𝐄𝐋𝐋𝐄𝐍𝐂𝐈𝐀</div>
            <div class="blog-slider__text">JURA SCHOOL EXCELLENCIA a le plaisir de vous informer le lancement de plusieurs formations diplômantes et qualifiantes  en ce mois  d'Avril dans plusieurs domaines :INFORMATIQUE.GÉNIE ELECTRIQUE .GÉNIE CIVIL .Architecture.Chimie .</div>
            <a href="https://juraschoolexcellencia.com/inscriptionenligne/" class="blog-slider__button">REJOIGNEZ-NOUS</a>
            <a href="https://juraschoolexcellencia.com/" class="blog-slider__button">EN SAVOIR PLUS</a>
        </div>
        </div>

        <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__img">
            <img src="../IMG/CSI.jpg">
        </div>
        <div class="blog-slider__content">
            <div class="blog-slider__title">CSI CLUB SCIENCE & INFORMATIQUE-UMMTO</div>
            <div class="blog-slider__text">Le club est créé en 2020 par des étudiants info il a pour but de donner l'occasion aux étudiants la réalisation de projet grâce à l'aide du club selon son projet il pourra former son équipe et la gérer lui même par exemple</div>
            <a href="https://www.facebook.com/profile.php?id=100069036347546" class="blog-slider__button">EN SAVOIR PLUS</a>
        </div>
        </div>

        <div class="blog-slider__item swiper-slide">
        <div class="blog-slider__img">
            <img src="../IMG/GDSC.jpg">
        </div>
        <div class="blog-slider__content">
            <div class="blog-slider__title">GDSC Ummto -Tizi Ouzou</div>
            <div class="blog-slider__text">Google Developer Student Clubs (GDSC) are community groups for college and university students interested in Google developer technologies. Students with an interest in growing as a developer are welcome. 
            You can share information about the latest technologies and stay updated about our latest events. on our Linkedin group :
            </div>
            <a href="https://www.linkedin.com/groups/12696030/" class="blog-slider__button">REJOIGNEZ-NOUS</a>
        </div>
</div>

</div>
<div class="blog-slider__pagination"></div>
</div>

<?php  include("../Footer/monfooter.php");

?>
</body>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script src="../js/javas.js"></script>
</html>
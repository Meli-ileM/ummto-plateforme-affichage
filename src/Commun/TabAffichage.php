<?php 
 session_start(); 
 ini_set('display_errors','0');

include("../database/database.php");
global $db;


######       PARTIE SUPPRESSION DES ANNONCES        #######
//Pour eviter la surcharge de la base de donnees en terme de nombre d'annonces : 
//supprimer les annonces dont la date de publication (date_pub) est antérieure ou égale à la date qui se situe 1 an avant la date maximale (de la derniere annonces)
//en d'autres termes on ne garde que les annonces publiees pendant une seule annees, exemple : celle comprises entre le 2022-05-26 et 2023-05-26. 
$q = $db->prepare("SELECT * FROM annonces WHERE date <= DATE_SUB((SELECT MAX(date) FROM annonces), INTERVAL 1 YEAR)");
$q->execute();
while($result1 = $q->fetch())
{
    $date = $result1['date'];
    //echo"la date : " . $date."<br>";
    $sql = $db->prepare("DELETE FROM annonces WHERE date <= :date");
    $sql->execute(['date' => $date]);
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="../js/javas.js">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Tableau d'affichage</title>
</head>
<body style="background:#fff;">
<?php  
    
    if ($_SESSION['numbre'] == 1)
    { 
        include("../Nav/navbar.php");     
    }
    elseif ($_SESSION['numbre'] == 2)
    {
        include("../Nav/navprf.php");     
    }
    else
    {  
        include("../Nav/navadmin.php");   
    } ?>
<h2 class="display-4 text-center mb-5 mt-3" style="color:rgb(5, 13, 115);"><strong> Tableau d'affichage</strong></h2>

<section class="d-flex w-100 h-30 flex-column justify-content-center align-items-center" >   

<form method="post" action="">
            <div class="dropdown" >
              <select name="promo" class="btn btn-dark dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="background:rgb(5, 13, 115)"  >
                    <option class="dropdown-item text-white"  selected >Choisir une promo</option>
                    <optgroup label="_________">
                    <option value="all" class="dropdown-item text-white">All</option>
                    <option value="L1_ingénieur" class="dropdown-item text-white">L1 Ingenieur</option>
                    <option value="l2" class="dropdown-item text-white">L2</option>
                    <option value="l3" class="dropdown-item text-white">L3</option>
                    <optgroup label="_________">
                    <option value="Master1_ISI" class="dropdown-item text-white">Master 1 ISI</option>
					<option value="Master2_ISI" class="dropdown-item text-white">Master 2 ISI</option>
                    <option value="Master1_SI" class="dropdown-item text-white"> Master 1 SI</option>
                    <option value="Master2_SI" class="dropdown-item text-white"> Master 2 SI</option>
                    <option value="Master1_RMSE" class="dropdown-item text-white"> Master 1 RMSE</option>
                    <option value="Master2_RMSE" class="dropdown-item text-white"> Master 2 RMSE</option>
                    <option value="Master1_S2I" class="dropdown-item text-white"> Master 1 S2I</option>
                    <option value="Master2_S2I" class="dropdown-item text-white"> Master 2 S2I</option>
                    <option value="Master1_CPI" class="dropdown-item text-white"> Master 1 CPI</option>
                    <option value="Master2_CPI" class="dropdown-item text-white"> Master 2 CPI</option>
                </select>
                <button name='submit' class="btn text-white" style="background:rgb(5, 13, 115)">Filtrer</button>
            </div>
</form>

</section>

<?php 
extract($_POST);

if(isset($_POST['submit']) AND $promo != "Choisir une promo"){
//echo "LA VALEUR DE LA PROMO SELECTED IS : ".$promo;

        $q = $db->prepare("SELECT * FROM annonces WHERE niv = :niv ORDER BY date DESC");
        $q->execute(['niv' => $promo]);

     while($result1 = $q->fetch())
                     {
                         $niv = $result1['niv'];
                         $titre = $result1['titre'];
                         $annonce = $result1['annonce'];
                         $fichier = $result1['fichier'];
                         $date = $result1['date'];
                         $auteur = $result1['auteur'];                          
                     ?>
                     
                 <div class="container py-3">
                     <div class="row justify-content-md-center">
                         <div class="card col-sm-4 col-lg-9 text-center">
                             <div class="card mb-4 shadow">
                                 <div class="en-tete">
                                 <table class="table table-bordered text-center">
                                     <tr class="text-white" style="background:rgb(5, 13, 115)" ><td><?php echo 'Affichage : ' .$niv ?></td></tr> </table>
                                    <p class="text-decoration-underline text-capitalize"><strong><?php echo $titre ?></strong></p>
                                 </table>
                                 </div>
                                 <div class="card-body">
                                    <p class="card-text">
                                        <?php if (preg_match('/\bhttps?:\/\/\S+/', $annonce)) {
                                        // Si oui, afficher un lien cliquable
                                            echo preg_replace('/\b(https?:\/\/\S+)/', '<a href="$1">$1</a>', nl2br($annonce));
                                            } else {
                                                // Sinon, afficher le texte normal
                                                ?><p class="card-text"><?php echo nl2br($annonce) ?></p><?php
                                            }?></p>
                                        <?php
                                        if (!empty($fichier)) {
                                            // Récupérer le contenu du fichier BLOB
                                            $contenu_fichier = base64_encode($fichier);
                                        
                                            // Récupérer le nom du fichier depuis la base de données
                                            $nom_fichier = $result1['nom_fichier'];
                                        
                                            // Afficher un lien pour télécharger le fichier avec le nom approprié
                                            echo '<a href="data:application/pdf;base64,' . $contenu_fichier . '" download="' . $nom_fichier . '">Piece jointe</a>';
                                        }?>
                                        <br>
                
                                </div>
                                <div>
                                  <p class="text-end"><?php echo "Par : " .$auteur."&nbsp;&nbsp;" ?><br><?php echo "affiché le : " .$date."&nbsp;" ?></p>
                                  

                                 </div>
                             </div>
                         </div>
                     </div> 
                 </div>
                        
                 <?php }}


else{
    $q = $db->prepare("SELECT * FROM annonces ORDER BY date DESC");
    $q->execute();

    while($result1 = $q->fetch())
                         {
                            $niv = $result1['niv'];
                            $titre = $result1['titre'];
                            $annonce = $result1['annonce'];
                            $fichier = $result1['fichier'];
                            $date = $result1['date'];
                            $auteur = $result1['auteur'];
                         ?>
                         
                     <div class="container py-3 bg-light">
                         <div class="row justify-content-md-center">
                             <div class="card col-sm-6 col-md-6 col-lg-8 text-center">
                                 <div class="card mb-4 shadow">
                                     <div class="en-tete">
                                     <table class="table table-bordered text-center">
                                         <tr class="text-white" style="background:rgb(5, 13, 115)" ><td><?php echo 'Affichage : ' .$niv ?></td></tr> </table>
                                         <p class="text-capitalize text-decoration-underline"><strong><?php echo $titre ?></strong></p>
                                     </table>
                                     </div>
                                     <div class="card-body">
                                     <?php if (preg_match('/\bhttps?:\/\/\S+/', $annonce)) {
                                            // Si oui, afficher un lien cliquable
                                                echo preg_replace('/\b(https?:\/\/\S+)/', '<a href="$1">$1</a>', nl2br($annonce));
                                                } else {
                                                    // Sinon, afficher le texte normal
                                                    ?><p class="card-text"><?php echo nl2br($annonce) ?></p><?php
                                                }?></p>
                                            <?php
                                            if (!empty($fichier)) {
                                                // Récupérer le contenu du fichier BLOB
                                                $contenu_fichier = base64_encode($fichier);
                                            
                                                // Récupérer le nom du fichier depuis la base de données
                                                $nom_fichier = $result1['nom_fichier'];
                                            
                                                // Afficher un lien pour télécharger le fichier avec le nom approprié
                                                echo '<a href="data:application/pdf;base64,' . $contenu_fichier . '" download="' . $nom_fichier . '">Piece jointe</a>';
                                            }?>
                                            </div>
                                    <div>
                                      <p class="text-end"><?php echo "Par : " .$auteur."&nbsp;&nbsp;" ?><br><?php echo "affiché le : " .$date."&nbsp;" ?></p>
                                     </div>
                                 </div>
                             </div>
                         </div> 
                     </div>


                     
                     <?php }}?>

<a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>


   
    </body>
    </html>        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <link rel="stylesheet" href="../css/styleee.css">
   

    <title>orientation</title>
</head>
<?php include("./orientation1.php"); 
 include("../Nav/navbar.php"); ?>

<body>

    <div class="container-fluid py-5 " style="margin-bottom: 300px; margin-top: 20px;" id="div-form">
        <form class="formulaire1" method="post" action="">
            <h1 id="titreForm">Orientation Master 1</h1>
            <h4 class="text-center">Veuillez choisir votre spécialité de Master1</h4>
            <div class="div-formulaire">
              <input type="text" class="inputs"  placeholder="nom+prenom" id="nom+prenom" name="nomprenom" required="" title="Nom et Prenom">
               
            </div>  

            <div class="div-formulaire">
                <input type="text" class="inputs" placeholder="email" id="email" name="lemail" pattern=".+@(fgei\.)?ummto\.dz$" title="Veuillez utiliser votre adresse email professionnelle" required="">

            </div>  
            
            <div class="div-formulaire">
            <select  name="sectiongroupe" class="inputs" id="section/groupe" required="">
          <option value="">section/groupe </option>
          <optgroup label="_________">  
            <option value="s1/g1"> section 1/groupe 1 </option>	
            <option value="s1/g2"> section 1/groupe 2  </option>
            <option value="s1/g3"> section 1/groupe 3  </option>
            <option value="s1/g4"> section 1/groupe 4  </option>
            <option value="s1/g5"> section 1/groupe 5  </option>	
          </optgroup>
          <optgroup label="_________">  
            <option value="s2/g6"> section 2/groupe 6 </option>	
            <option value="s2/g7"> section 2/groupe 7  </option>
            <option value="s2/g8"> section 2/groupe 8  </option>
            <option value="s2/g9"> section 2/groupe 9  </option>
            <option value="s2/g10"> section 2/groupe 10  </option>	
          </optgroup>
       </select>
            </div>
         <hr>

         <h5 class="text-center"> spécialité demandée pour Master 1</h5>
        <div class="div-formulaire">
            <select class="inputs" id="choix1" name="choix1" required="">
             <option value="">choix 1</option>
             <option value="master_SI">Master SI</option>
             <option value="master_RMSE">Master RMSE</option>
             <option value="master_ISI">Master ISI</option>
             <option value="master_S2I">Master S2I</option>
             <option value="master_CPI">Master CPI</option>
            </select>
      </div>
       
         <!-- choix 2-->
         <div class="div-formulaire">
           <select class="inputs" id="choix2" name="choix2" required="">
             <option value="">choix 2</option>
             <option value="master_SI">Master SI</option>
             <option value="master_RMSE">Master RMSE</option>
             <option value="master_ISI">Master ISI</option>
             <option value="master_S2I">Master S2I</option>
             <option value="master_CPI">Master CPI</option>
          </select>
        </div>
        
         <!-- choix 3-->
         <div class="div-formulaire">
            <select class="inputs" id="choix3" name="choix3" required="">
             <option value="">choix 3</option>
             <option value="master_SI">Master SI</option>
             <option value="master_RMSE">Master RMSE</option>
             <option value="master_ISI">Master ISI</option>
             <option value="master_S2I">Master S2I</option>
             <option value="master_CPI">Master CPI</option>
          </select>
        </div>
       
         <!-- choix 4-->
        <div class="div-formulaire">
           <select class="inputs"id="choix4" name="choix4" required="">
             <option value="">choix 4</option>
             <option value="master_SI">Master SI</option>
             <option value="master_RMSE">Master RMSE</option>
             <option value="master_ISI">Master ISI</option>
             <option value="master_S2I">Master S2I</option>
             <option value="master_CPI">Master CPI</option>
           </select>
       </div>
       
         <!-- choix 5 -->

         <div class="div-formulaire">
             <select class="inputs" id="choix5" name="choix5" required="" >
             <option value="">choix 5</option>
             <option value="master_SI">Master SI</option>
             <option value="master_RMSE">Master RMSE</option>
             <option value="master_ISI">Master ISI</option>
             <option value="master_S2I">Master S2I</option>
             <option value="master_CPI">Master CPI</option>
             </select> 
         </div>  
        
            <div class="d-flex justify-content-center align-items-center" >
                <a href="orientation1.php"><button type="submit">Valider l'orientation</button></a>
            </div>
            
        </form>

    </div>        
    <?php  include("../Footer/monfooter.php")?>

</body>


</html>
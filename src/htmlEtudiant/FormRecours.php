<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../IMG/logo.png">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleee.css">
  

    <title>recours</title>
</head>
<body>
    <?php include("./Recourt1.php");  
     include("../Nav/navbar.php"); ?>

    <div class="container-fluid py-5 " id="div-form">
        <form class="formulaire1" method="post" action="">
            <h1 id="titreForm">Recours délibérations </h1>
    
      

            <div class="div-formulaire">
                <input type="text" class="inputs" placeholder="email" id="email" name="lemail" pattern=".+@(fgei\.)?ummto\.dz$" title="Veuillez utiliser votre adresse email professionnelle" required="">
            </div>  
            <div class="div-formulaire">
                <input type="text" class="inputs" placeholder="module + enseignant"  name="moduleenseignant"title="Module et Ensegnant"  required="">

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
         
        <div class="div-formulaire">
            <select class="inputs" name="promo"  required="">

          <option value="">spécialité </option>
          <optgroup label="_________">    
            <option   value="L1_ingénieur"> L1 ingénieur</option>  
            <option value="L2"> L2 </option> 
            <option value="L3"> L3  </option>
           </optgroup>

        <optgroup label="_________">
            <option value="Master1_ISI"> Master1 ISI </option>
            <option value="Master1_SI"> Master1 SI </option>
              <option value="Master1_RMSE"> Master1 RMSE</option>
              <option value="Master1_S2I"> Master1 S2I </option>
              <option value="Master2_CPI"> Master1 CPI </option>
        
        </optgroup>

       <optgroup label="_________">

              <option value="Master2_ISI "> Master2 ISI </option>
            <option value="Master2_SI"> Master2 SI </option>
              <option value="Master2_S2I"> Master2 S2I </option>  
              <option value=" Master2_RMSE"> Master2 RMSE</option>
              <option value="Master2_CPI"> Master2 CPI</option>
          </optgroup> 
             
            </select>
      </div>
       
         <!-- choix 2-->
         <div class="div-formulaire">
           <select class="inputs" name="semestre"  required="">
             <option value="">semestre </option>
            <option value="semestre1"> semestre 1  </option>	
            <option value="semestre2"> semestre 2  </option>
          </select>
        </div>
        
         <!-- choix 3-->
         <div class="div-formulaire">
            <select class="inputs" name="deliberation" required="">
            <option value="">délibération</option>
           <option value=" avant rattrapage">  deliberation avant rattrapage </option>	
           <option value=" apres rattrapage"> deliberation apres rattrapage  </option>	
          </select>
        </div>
        
        <div class="div-formulaire">
                    <textarea style="background-color: rgba(210, 225, 255, 0.842)" class="form-control"  class="inputs" title="Contenu du recours" placeholder="décrire ici l'erreur en détail, par exemple: note de l'examen est  15.5 au lieu de 11" name="recours" id="recours"  rows="3" cols="3" required="" maxlength="200"></textarea>
            </div>
                    
    
            <div class="d-flex justify-content-center align-items-center" >
                <a href="Recourt1.php"><button type="submit">Envoyer le Recours</button></a>
            </div>
            
        </form>

    </div>        
   <?php 
   include("../Footer/monfooter.php")?>


</body>
</html>
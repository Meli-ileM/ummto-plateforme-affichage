<?php 


include("../database/database.php");
global $db;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleee.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Publier Admin</title>
</head>
<?php 
    include("../Nav/navadmin.php");



if (isset($_POST['submit'])) {
    $niv = $_POST['niv'];
    $titre = $_POST['titre'];
    $annonce = $_POST['annonce'];
    $auteur = "Administration";

    if(isset($_FILES['file']) && $_FILES['file']['size'] > 0) {
        $file = $_FILES['file'];
        $filename = $file['name'];
        $filetype = $file['type'];
        $filesize = $file['size'];
        $filetmpname = $file['tmp_name'];

        $allowed = array('pdf', 'doc', 'docx');
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(in_array($ext, $allowed)) {
            $fichier = file_get_contents($filetmpname);

            $query = "INSERT INTO annonces (niv, titre, annonce, fichier,auteur, nom_fichier) VALUES (?, ?, ?, ?,?,?)";
            $stmt = $db->prepare($query);
            $stmt->execute([$niv, $titre, $annonce, $fichier,$auteur, $filename]);
            

            //echo "Les données ont été insérées avec succès.";
        } else {
            echo "Le type de fichier n'est pas autorisé.";
        }
    } else {
        $query = "INSERT INTO annonces (niv, titre, annonce, fichier,auteur,nom_fichier) VALUES (?, ?, ?, '',?,'')";
        $stmt = $db->prepare($query);
        $stmt->execute([$niv, $titre, $annonce, '',$auteur,'']);

       // echo "Les données ont été insérées avec succès.";
    }
    if($stmt) {
        ?><p class="bg-success display-7 font-weight-bold text-center text-white">Votre annonce a bien été enregistrée</p> <?php
    } else {
        ?><p class="bg-danger display-7 font-weight-bold text-center text-white">Erreur lors de l'enregistrement de l'annonce</p> <?php
    }
}
?>


<body>

    <div class="container-fluid py-2" id="div-form">

        <form class="formulaire" method="post" action="" enctype="multipart/form-data">

            <h1 id="titreForm" class="mb-4">Publier une annonce </h1>

            <div class="div-formulaire" >
            <select class="inputs" name="niv" class="form-control form-control-xs " required="">

          <option value="" selected> Choisissez la promo Ciblée</option>
          <optgroup label="_________">    
          <option  value="All"> All</option>    
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

            <div class="div-formulaire">
                <input type="text" class="inputs" name="titre" required="" placeholder="Titre de l'annonce" title="Titre de l'annonce">
            </div> 

            <div class="div-formulaire">
                    <textarea style="background-color:  rgba(210, 225, 255, 0.842)" class="form-control"  class="inputs" title="Contenu de l'annonce" placeholder="Contenu de l'annonce " name="annonce" rows="5" cols="3" required="" maxlength="1200"></textarea>
            </div>

            <div class="custom-file">
                <input type="file" style="background-color:  rgba(210, 225, 255, 0.842)" name="file" class="form-control">
            </div>

            <br>
       <br>
            <div class="d-flex justify-content-center align-items-center" >
                <button type="submit" name="submit" value="Publier">Publier</button>
            </div>

        </form>
    </div>
    <?php  include("../Footer/footeradmin.php")?>
</body>
</html>














































































































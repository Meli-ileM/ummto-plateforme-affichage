<?php
 include("../database/database.php");
    global $db; 
   
    extract($_POST);

    if(!empty($passCourant) && !empty($nvpass) && !empty($passConfirm) && !empty($email) && !empty($nom) && !empty($prenom)) 
    {

        $q = $db->prepare("SELECT * FROM etudiant WHERE emailetd = :email");
        $q->execute(['email' => $email]);
        $resul1 = $q->fetch();

        $q = $db->prepare("SELECT * FROM enseignant WHERE emailens = :email");
        $q->execute(['email' => $email]);
        $resul2 = $q->fetch();
        
        $q = $db->prepare("SELECT * FROM adminn WHERE email = :email");
        $q->execute(['email' => $email]);
        $resul3 = $q->fetch();





     if($resul1==true)
       {

            $c = $db->prepare("SELECT pass from etudiant  WHERE emailetd = :email");
            $c->execute(['email' => $email]);
            $result1 = $c->fetch();

            $options = ['cost' => 12,];
            $hash_pass = password_hash($passCourant, PASSWORD_BCRYPT, $options);

         //on les compare
          if( password_verify($passCourant, $result1[0]))
           {
             if ($nvpass == $passConfirm)
               {                
                  $options = ['cost' => 12,];
                  $hash_pass = password_hash($nvpass, PASSWORD_BCRYPT, $options);

                  $q = $db->prepare("UPDATE etudiant SET pass = :pass WHERE emailetd = :email");
                        $q->execute([
                        'email' => $email,
                        'pass' => $hash_pass,
                    ]);

                 ?><p class="bg-success display-7 font-weight-bold text-center text-white"> Votre mot de passe a été changé ! </p> <?php
                
                 $c = $db->prepare("SELECT pass from etudiant  WHERE emailetd = :email");
                 $c->execute(['email' => $email]);
                 $result1 = $c->fetch();

                }else 
                  {
                  ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Veuillez ressaisir votre nouveau mot de passe ! </p> <?php
                  }
            }
            else
             {
            ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Le mot de passe courant saisie est incorrect ! </p> <?php
              }
        }elseif($resul2==true)
        { //enseignant
    
             $c = $db->prepare("SELECT pass from enseignant  WHERE emailens = :email");
              $c->execute(['email' => $email]);
              $result2 = $c->fetch();

              $options = ['cost' => 12,];
              $hash_pass = password_hash($passCourant, PASSWORD_BCRYPT, $options);

             //on les compare
              if( password_verify($passCourant, $result2[0]))
                {

                  if ($nvpass == $passConfirm)
                    {                
                      $options = ['cost' => 12,];
                      $hash_pass = password_hash($nvpass, PASSWORD_BCRYPT, $options);
                      $q = $db->prepare("UPDATE enseignant SET pass = :pass WHERE emailens = :email");
                      $q->execute([
                          'email' => $email,
                          'pass' => $hash_pass,
                        ]);

                      ?><p class="bg-success display-7 font-weight-bold text-center text-white"> Votre mot de passe a été changé ! </p> <?php
            
                      $c = $db->prepare("SELECT pass from enseignant  WHERE emailens = :email");
                      $c->execute(['email' => $email]);
                      $result1 = $c->fetch();
 
                    }
                    else 
                     {
                       ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Veuillez ressaisir votre nouveau mot de passe ! </p> <?php
                     }
                }
                 else
                {
                 ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Le mot de passe courant saisie est incorrect ! </p> <?php
                }
        }else{
              $c = $db->prepare("SELECT pass from adminn  WHERE email = :email");
              $c->execute(['email' => $email]);
              $result3 = $c->fetch();
              $options = ['cost' => 12,];
              $hash_pass = password_hash($passCourant, PASSWORD_BCRYPT, $options);

              //on les compare
               if( password_verify($passCourant, $result3[0]))
                 {
                  if ($nvpass == $passConfirm)
                     {                
                     $options = ['cost' => 12,];
                     $hash_pass = password_hash($nvpass, PASSWORD_BCRYPT, $options);
                     $q = $db->prepare("UPDATE adminn SET pass = :pass WHERE email = :email");
                     $q->execute([
                          'email' => $email,
                          'pass' => $hash_pass,
                        ]);

                     ?><p class="bg-success display-7 font-weight-bold text-center text-white"> Votre mot de passe a été changé ! </p> <?php
            
                     $c = $db->prepare("SELECT pass from adminn  WHERE email = :email");
                     $c->execute(['email' => $email]);
                      $result1 = $c->fetch();

                    }
                     else 
                     {
                       ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Veuillez ressaisir votre nouveau mot de passe ! </p> <?php
                    }
                }
                else
                {
                   ?><p class="bg-danger display-7 font-weight-bold text-center text-white"> Le mot de passe courant saisie est incorrect ! </p> <?php
                }
            }
    } 


?>
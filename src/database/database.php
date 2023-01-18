<?php

define('Host', 'localhost:3306');
define('DB_name', 'depinfo');
define('User', 'root');
define('pwd', '');



try {
    $db = new PDO('mysql:host='.Host.';dbname='.DB_name, User, pwd);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo '<br>La connexion avec la bdd est etablie !';

}catch (PDOException $e) {
    echo 'Erreur: ' . $e->getMessage();
}

?>




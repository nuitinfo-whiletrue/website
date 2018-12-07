<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo 'Bonjour '.$_POST['username'];
        echo '<br>';
        
    }
    $fichierJSON = fopen('data.json', 'a+');
        $ligne = fgets($fichierJSON);
        $arr = json_decode($ligne, true);
        $arr[] = array("nom" => $_POST['name'], "prenom" => $_POST['surname'], "id" => $_POST['username'], "mdp" => $_POST['password']); 
        var_dump($arr); 
        $ligne = json_encode($arr);
         ftruncate($fichierJSON, 0);
        fputs($fichierJSON, $ligne); 
         
 
        echo 'Connexion échouée'; 

    fclose($fichierJSON); 
    
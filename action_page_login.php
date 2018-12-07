<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        echo 'Bonjour '.$_POST['username'];
        echo '<br>';
        
    }
    $fichierJSON = fopen('data.json', 'a+');
        $ligne = fgets($fichierJSON);
        $arr = json_decode($ligne, true);
        foreach($arr as $key => $value){
            if($_POST['username'] == $value['id'] && $_POST['password'] == $value['mdp']){
                header('Location: index.html');
            }
        }
        echo 'Connexion échouée'; 

    fclose($fichierJSON); 
    

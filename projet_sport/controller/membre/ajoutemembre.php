<?php
global $bdd;
include ("BDD/bdd.php");
    var_dump($_POST);
    if (isset($_POST['valider'])){
        $genre = $_POST ["genre"];
        $nom = $_POST ["nom"];
        $prenom = $_POST ["prenom"];
        $mdp = $_POST ["mdp"];
        $email = $_POST ["email"];
        $telephone = $_POST ["telephone"];
        $adresse = $_POST ["adresse"];

        $req = $bdd ->prepare('INSERT INTO membres(genre,nom,prenom,mdp,email,telephone,adresse) value  (:genre, :nom, :prenom, :mdp, :email, :telephone, :adresse)');

            $req -> bindparam(":genre", $genre);
            $req -> bindparam(":nom", $nom);
            $req-> bindparam(":prenom", $prenom);
            $req-> bindparam(":mdp", $mdp);
            $req-> bindparam(":email", $email);
            $req-> bindparam(":telephone", $telephone);
            $req-> bindparam(":adresse", $adresse);

            $req-> execute();
    }

    ?>


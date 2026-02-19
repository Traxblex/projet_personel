<?php
    include ("controller/membre/ajoutemembre.php");
    ?>

    <form method="POST" action ="controller/membre/ajoutemembre.php">
    <div>
    Genre :
            Homme : <input type="radio" value="0" name="genre">
            Femme : <input type="radio" value="1" name="genre">
    </div>

        Nom : <input type="text" name="nom">
        Prénom: <input type="text" name="prenom">
        Mots de Passe: <input type="text" name="mdp">
        Email: <input type="email" name="Email">
        Téléphone: <input type="text" name="telephone">
        Adresse: <input type="text" name="adresse">

        <input type="submit" value="ajouter" name="valider">

</form>
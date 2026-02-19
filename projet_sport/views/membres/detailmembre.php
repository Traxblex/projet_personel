<div>
    <h1>
        detail Membre
    </h1>
</div>
<?php
    include ('controller/membre/detailmembre.php'); ?>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>GENRE</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>MOTS DE PASSE</th>
                <th>EMAIL</th>
                <th>TELEPHONE</th>
                <th>ADRESSE</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th><?php echo $detailmembre['id']?></th>
                <th><?php echo $detailmembre['genre']?></th>
                <th><?php echo $detailmembre['nom']?></th>
                <th><?php echo $detailmembre['prenom']?></th>
                <th><?php echo $detailmembre['mdp']?></th>
                <th><?php echo $detailmembre['email']?></th>
                <th><?php echo $detailmembre['telephone']?></th>
                <th><?php echo $detailmembre['adresse']?></th>

            </tr>
        </tbody>
    </table>




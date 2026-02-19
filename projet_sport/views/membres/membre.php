<h1>
    page membre
</h1>
<?php
include ('controller/membre/listemembre.php');
?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Genre</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mots de Passe</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>action</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($allmembre as $membre){
    ?>
        <tr>
            <td><?php echo $membre["id"];?></td>
            <td><?php echo $membre["genre"];?></td>
            <td><?php echo $membre["nom"];?></td>
            <td><?php echo $membre ["prenom"];?></td>
            <td><?php echo $membre ["mdp"];?></td>
            <td><?php echo $membre ["email"];?></td>
            <td><?php echo $membre ["telephone"];?></td>
            <td><?php echo $membre ["adresse"];?></td>
            <td><a href="index.php?page=detailmembre&id=<?php echo $membre['id'];?>">detail</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

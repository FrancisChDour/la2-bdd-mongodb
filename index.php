<?php

require('modeleMongoDB.php');

$modele = new modeleMongoDB();

$collection = $modele->listReceptions();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <h2>Ajouter une réception</h2>
    <form class="form-inline" action="controllerMongoDB.php" method="post" name="addReception">
        <div class="form-group mb-2">
            <label for="produit" class="form-label">Produit</label>
            <input type="text" class="form-control" name="id_produit" id="produit">
            <div id="produitHelp" class="form-text">Id du produit reçu</div>
        </div>
        <div class="form-group mb-2">
            <label for="quantite" class="form-label">Quantité</label>
            <input type="text" class="form-control" name="quantite_recue" id="quantite">
            <div id="quantiteHelp" class="form-text">Nombre de produits reçus</div>
        </div>
        <div class="form-group mb-2">
            <label for="entrepot" class="form-label">Entrepôt</label>
            <input type="text" class="form-control" name="id_entrepot" id="entrepot">
            <div id="quantiteHelp" class="form-text">Entrepôt de réception</div>
        </div>
        <input type="hidden" name="action" value="addReception">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
</div>

<div class="container">
    <h1>LA2 BDD MONGODB</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quantité</th>
            <th scope="col">id_produit</th>
            <th scope="col">id_entrepot</th>
            <th scope="col">Date</th>
		<th scope="col"></th>
		<th scope="col"></th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($collection as $document) {
            $document = (array)$document;
            ?>
            <tr>
                <th scope="row"><?php echo $document['idReception'] ?></th>
                <td><?php echo $document['quantite'] ?></td>
                <td><?php echo $document['idProduit'] ?></td>
                <td><?php echo $document['idEntrepot'] ?></td>
                <td><?php echo $document['date'] ?></td>
		<td><a class="btn btn-primary" href="modifier-reception.php" role="button">Modifier</a></td>
		<td><button type="button" class="btn btn-danger">Supprimer</button></td>
            </tr>
            <?php
        } ?>
        </tbody>
    </table>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>

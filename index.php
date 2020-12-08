<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <h1>LA2 BDD MONGODB</h1>
</div>

<div class="container">
    <h2>Ajouter une réception</h2>
    <form>
        <div class="mb-3">
            <label for="produit" class="form-label">Produit</label>
            <input type="text" class="form-control" id="produit">
            <div id="produitHelp" class="form-text">Id du produit reçu</div>
        </div>
        <div class="mb-3">
            <label for="quantite" class="form-label">Quantité</label>
            <input type="text" class="form-control" id="quantite">
            <div id="quantiteHelp" class="form-text">Nombre de produits reçus</div>
        </div>
        <div class="mb-3">
            <label for="entrepot" class="form-label">Entrepôt</label>
            <input type="text" class="form-control" id="quantite">
            <div id="quantiteHelp" class="form-text">Entrepôt de réception</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div class="container">
    <h2>Réceptions</h2>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Quantité</th>
            <th scope="col">id_produit</th>
            <th scope="col">id_entrepot</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>40</td>
            <td>45</td>
            <td>3</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>
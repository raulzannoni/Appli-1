<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
    <title>Ajout produit</title>
    
</head>
<body >
    <div class="d-flex p-2" >
        <h1 class="p-2 mb-2 bg-primary text-white ">Ajouter un produit</h1>
        
</div>
    
    <form action="traitement.php?action=add" method="post">
    <?php 
    require('calcule.php');
   
    
        if(empty($_SESSION["products"]))
        {echo "Il n'y a aucun produit dans le panier";}
        else{ echo "Produit Ajouté ". " Il y a ". $nombreProduits." produits dans le panier";}            
                           
    ?>
    
        <p>
            <label class="p-3 mb-2 form-label">
                Nom du produit : <br>
                <input type="text" name="name">
            </label>
        </p>
        <p>
            <label class="p-3 mb-2 form-label">
                Prix du produit : <br>
                <input type="number" step="any" name="price">
            </label>
        </p>
        <p>
            <label class="p-3 mb-2 form-label">
                 Quantité désirée : <br>
                <input type="number" name="qtt" value="1">
            </label>
        </p>
        <p>
            <label class="p-3 mb-2 form-label">
            <input type="submit" name="submit" value="Ajouter le produit" class="p-3 mb-2 bg-primary text-white">
            </label>
        </p>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

<footer>
    <label class="p-3 mb-2 form-label">
        <a href="recap.php" class="p-3 mb-2 bg-success text-white">Voir le panier</a> 
    </label>
</footer>
</html>
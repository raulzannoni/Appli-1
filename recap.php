

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <title>Récapitulatif des produits</title>
</head>

<?php
    session_start();
?>

<body>

    <?php
    /* verifier si la session existe et non vide*/
    if(!isset($_SESSION['products']) || empty ($_SESSION['products']))
    {
        echo "<p>Aucun produit en session...</p>";
    }
    else {
        echo "<table  class='table table-bordered'>",
            "<thead class='table-light' >",
                "<tr>",
                    "<th >#</th>",
                    "<th scope='col '>Nom</th>",
                    "<th scope='col '>Prix</th>",
                    "<th scope='col '>Quantité</th>",
                    "<th >Total</th>",
                "</tr>",
            "</thead>",
            "<tbody>";
    $totalGeneral = 0;
    /*parcourire la session */
    foreach ($_SESSION['products'] as $index => $product)
    {
        echo "<tr >",
            "<td>".$index."</td>",

            "<td>".$product['name']."</td>",

            "<td>".number_format($product['price'], 2, ",","&nbsp;")."&nbsp;€</td>",

            "<td><a style='text-decoration: none;' href='traitement.php?action=moin&index=" . $index . "'>-</a>" . $product["qtt"] .
            
                "<a style='text-decoration: none;' href='traitement.php?action=plus&index=" . $index . "'>+</a>
            </td>",
            
            "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
            "</tr>";
    $totalGeneral += $product['total'];
    }
    echo "<tr>",
            "<td colspan= 4>Total général : </td>",
            "<td><strong>". number_format($totalGeneral, 2,",", "&nbsp;")."&nbsp;€</strong></td>",
            
            "</tr>";

    }
    ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

<footer>
    <label class="d-flex p-2" >
        <a href="index.php" class="p-3 mb-2 bg-primary text-white">Ajouter encore un produit</a> 
    </label>
    <!--bouton supprime tout le panier-->
    <label class="d-flex p-2">
        <a href='traitement.php?action=supp'class="p-3 mb-2 bg-primary text-white">Vider le panier</a>
    </label>
</footer>

</html>

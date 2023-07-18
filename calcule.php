<?php
session_start();



$nombreProduits = 0;


foreach ($_SESSION["products"] as $produit  ) 
{  
$nombreProduits += $produit['qtt'];

}
return $nombreProduits;

?>

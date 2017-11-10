<?php

	require_once('../src/ProduitKilo.php');

$legume1 = new ProduitKilo('COURGETTES');


// echo gettype ($legume1);
// echo "<br/>";
// echo get_class ($legume1);
//echo "<br/>";



 echo var_dump ($legume1);

$legume1->PrixTotalKilo($legume1). '<br>';
$legume1->PrixTotalKilo($legume1). '<br>';

 echo ' <br> Nombre de calcul effectués : ' .$legume1->totalObjCrees();

//$legume1-> modifierVariete("courge");
//
////echo gettype ("T");
//echo $legume1->lireVariete();
//echo $legume1;
//
//echo var_dump ($legume1, $legume2, $legume3);
?>



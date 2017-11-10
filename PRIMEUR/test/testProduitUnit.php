<?php

	require_once('../src/ProduitUnit.php');

$legume22 = new ProduitUnit('MELONS');

// echo gettype ($legume1);
// echo "<br/>";
// echo get_class ($legume1);
//echo "<br/>";



 echo var_dump ($legume22);

$legume22->PrixTotalUnit($legume22);
echo ' <br> Nombre de calcul effectués : ' .$legume22->totalObjCrees();


//$legume1-> modifierVariete("courge");
//
////echo gettype ("T");
//echo $legume1->lireVariete();
//echo $legume1;
//
//echo var_dump ($legume1, $legume2, $legume3);
?>



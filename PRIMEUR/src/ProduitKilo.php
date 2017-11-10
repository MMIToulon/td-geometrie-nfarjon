<?php
require_once("Produit.php");

class ProduitKilo extends Produit

{


    protected $poids = 15;
    protected $prixKilo = 10;
    protected $prixTotalKilo = "";
    protected static $objCrees;


    public function prixTotalKilo($Produit)
    {

        $this->prixTotalKilo = $this->prixKilo * $this->poids;
        echo "<br/> Les $this->poids kilos de $this->variete coûtent $this->prixTotalKilo euros";

        self::$objCrees++;

    }



public static function totalObjCrees(){
    return self::$objCrees;
}




public function __toString() {

    $txt=$this->variete.
        "<br>".$this->poids.
        "<br>".$this->prixKilo;

    return $txt;
    // TODO: Implement __toString() method.
} }


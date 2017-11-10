<?php

require_once("Produit.php");

class ProduitUnit extends Produit
{

    protected $nombreUnit = 50;
    protected $prixUnit = 2;
    protected $prixTotalUnit = "";
    protected static $objCrees;


    public function prixTotalUnit($Produit)
    {

        $this->prixTotalUnit = $this->nombreUnit * $this->prixUnit;
        echo "<br/> Le prix total des $this->variete coûte $this->prixTotalUnit euros";

        self::$objCrees++;


    }


    public static function totalObjCrees(){
        return self::$objCrees;
    }


}



<?php

class Produit {

    protected $variete = "";








    public function __construct($n){
        $this->variete = $n;
        echo $this->variete;

    }




    public function lireVariete () {
        return $this->variete;
    }

    public function modifierVariete ($n) {
        if (gettype ($n)=="string")
            $this->variete=$n;

//        echo $this->variete;
    }

}










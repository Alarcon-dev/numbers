<?php 

class factorial{


    public function calcular($a){

        $factor = 1;
        $leng = $a; 
        $b = "";

       while($leng != 1){

        $factor = $factor * $leng; 

        $factor = $factor;

        $b = "$a"." = ".$factor;

        $leng --; 

       }


       return $b;


    }

}

$factorial = new factorial();
echo $factorial->calcular(4); 
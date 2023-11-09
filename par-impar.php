<?php 

class PairsCalculate{

    public function calcular(...$numbers){

        $store = $numbers; 
        $lenght = count($store);
        $par = 0; 
        $impar = 0; 
        
        for($i = 0; $i <= $lenght; $i++){

            if($i >= $lenght){
                break;
            }

            if($store[$i] % 2 == 0){
                $par += $store[$i];
            }else{
                $impar += $store[$i];
            }

        }

        return  "Suma de pares = ".$par." || "."Suma de impares = ".$impar; 

    }
}

$par = new PairsCalculate();
echo $par->calcular(1,2,3,4,5,6,7);
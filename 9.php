<html>



<?php


class Cuadrado{
    private $lado;
    private $resultado;
    private $cuadrados=[];


    function  __construct($lado){

        $this->lado = $lado;
    

    }

    function crearCuadro($lado){

        if($lado>0){
            $resultado = $lado*$lado;
            echo $resultado;
        }else{
            throw new Exception("negativo");
        }   

    }

    function crearArray(){
     
        
    }

    function crearCuadro2(){
        for($i=0; $i < 4 ; $i++){
            $cuadrados[$i] = mt_rand(1,100);
        }
        $cuadrados[4] = mt_rand(-100,-1);

        for($j=0; $j < sizeof($cuadrados); $j++){
            if($cuadrados[$j]>0){
                $resultado = $cuadrados[$j]* $cuadrados[$j];
                echo $resultado;
                echo "<br>";
            }if($cuadrados[$j]<0){
                throw new Exception("negativo");
            }
        }
    }

}

$c1 = new Cuadrado(6);
//$c1 -> crearCuadro(6);
$c1 -> crearArray();
$c1 -> crearCuadro2();



?>  
</html>
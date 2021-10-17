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

     

            try {
                if($lado>0){
                    $resultado = $lado*$lado;
                    echo $resultado;
                }else
                    throw new Exception("Numero negativo");
                } catch (Exception $ex) {
                    echo "Excepción capturada: ". $ex->getMessage()."<br>";
                    
                }
                echo "<br>";
            } 
          

                
        

    

    function crearArray(){
     
        
    }

    function crearCuadro2(){
        for($i=0; $i < 5     ; $i++){
            $cuadrados[$i] = mt_rand(-10,10);
        }
      //  $cuadrados[4] = mt_rand(-100,-1);

        for($j=0; $j < sizeof($cuadrados); $j++){
            try {
                if($cuadrados[$j]>0){
                    $resultado = $cuadrados[$j]* $cuadrados[$j];
                    echo $resultado;
                    echo "<br>";
                }if($cuadrados[$j]<0){
                    throw new Exception("Numero negativo");
                }
            } catch (Exception $ex) {
                echo "Excepción capturada: ". $ex->getMessage()."<br>";

            }
       
        }
    }

}

$c1 = new Cuadrado(6);
$c1 -> crearCuadro(6);
$c1 -> crearArray();
$c1 -> crearCuadro2();



?>  
</html>
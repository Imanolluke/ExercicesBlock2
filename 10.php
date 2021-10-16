<html>



<?php


class Persona{
    
    private $name;
    private $surname;
    private $dni;


    function __construct($name, $surname, $dni){
        $this->name = $name;
        $this->surname = $surname;
        $this->dni = $dni;
    }

    function devolverDatos(){

        echo "Persona: ". $this->name . " ". $this->surname;


    }


    } 

    class User extends Persona{
        private $puntos;
       private $totalPuntos=0;
    
       function __construct($name, $surname, $dni, $puntos){
        $this->name = $name;
        $this->surname = $surname;
        $this->dni = $dni;
        $this->puntos = $puntos;
       }

       function datos(){
           echo $this->name. $this->surname. $this->dni. $this->puntos;
       }
  
   

    function setPuntos($puntos){
        $totalPuntos =+ $puntos;
        if($totalPuntos>100){
            echo "se ha superado el limite de 100 puntos";
        }else
        echo "se han insertado estos puntos: ". $puntos;

       
    }
    
}

$p1 = new Persona("Imanol", "Luque", "72494192-D");
//$p1->devolverDatos();
$u1 = new User("Imanol", "Luque", "72494192-D", 12000);
$u1->datos();
$u1->setPuntos(80);
$u1->setPuntos(30);
//$u1



?>  
</html>
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
        private $totalPuntos;
    
       function __construct($name, $surname, $dni, $puntos){
        $this->name = $name;
        $this->surname = $surname;
        $this->dni = $dni;
        $this->puntos = $puntos;
       }

  
   

    function setPuntos($puntos){
        
      
        $this->totalPuntos += $puntos;
        echo "se han insertado: " . $puntos ." puntos "; 
        echo "que hacen un total de: ".$this->totalPuntos." puntos";
        echo "";
        if($this->totalPuntos<100){
            echo "<br>";
            echo "el usuario tiene menos de 100 puntos ";
           
        }
        echo "<br>";
        return $puntos;
    } 

    function getPuntos(){
        return $this->totalPuntos;
    }
        
       function datos(){
        echo "Nombre: ".$this->name." ". $this->surname." DNI:". $this->dni." Total Puntos: ". $this->totalPuntos;
    } 
       
    
    
}

$p1 = new Persona("Imanol", "Luque", "72494192-D");
//$p1->devolverDatos();
$u1 = new User("Imanol", "Luque", "72494192-D", 0);

$u1->setPuntos(80);
$u1->setPuntos(30);
$u1->getPuntos();
$u1->datos();




?>  
</html>
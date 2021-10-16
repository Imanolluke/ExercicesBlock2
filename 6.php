<html>
<?php

class Birthday{
   
    private $meses =["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    private $lista;
 
function __construct(){
    foreach ($this->meses as $key) {
        $this->lista[$key] = array();
    }
}


function add($name, $month){
    
    foreach($this->meses as $key=>$value){

        if($this->meses[$key] == $month){
            $this->lista[$value][] = $name;
        }
    }
}

function print(){ 
    echo "<table>";
   
    foreach ($this->meses as $key => $value) {
        echo "<tr>";
        print_r ("<td style=color:blue>".$this->meses[$key]."</td>");
        echo "<tr>";
        
            $nombres = implode("<br>", $this->lista[$value]);
            echo "<tr>";    
            echo "<td>".$nombres."</td>";
            echo "</tr>";
           
 
   
    }
    echo "</table>";
}

}

$p1 = new Birthday;

$p1->add("Unai", "Enero");
$p1->add("Imanol", "Abril");
$p1->add("Mikel", "Septiembre");
$p1->add("Jon", "Abril");
$p1->add("Julen", "Abril");
$p1->add("Miren", "Febrero");
$p1->add("Leire", "Enero");


$p1->print();


?>  
</html>
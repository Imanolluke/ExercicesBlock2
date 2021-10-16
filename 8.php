<html>



<?php



class File{

private $archivo;
    
function existe($archivo){

    if(file_exists($archivo)){
        //return $archivo;
        echo "existe";
    }else{
      // throw new Exception("Divided by Zero");
        echo "no existe";
    }

}

    
}

$arc = new File();
$arc -> existe("3.php");


?>  
</html>
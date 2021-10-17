<html>



<?php



class File{

private $archivo;
    
function existe($archivo){
  
      
        try {
            echo ($archivo);
            if(!file_exists($archivo)){
                throw new Exception("El archivo no existe");
               }
        } catch (Exception $ex) {
            echo "Excepción capturada: ". $ex->getMessage();
        }
  

}
}

$arc = new File();
$arc -> existe("3.php");


?>  
</html>
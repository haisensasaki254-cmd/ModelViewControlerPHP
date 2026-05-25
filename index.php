<?php 

require_once "controllers/user.php";
$usuario  = new UserController();



if(isset($_GET["action"]) && method_exists($usuario,$_GET["action"])){
    try{
        $action = $_GET["action"];
        $usuario -> $action();

    }catch(Exception $e){
        echo "<h1>Error al mostrar no existe ese metodo</h1>";
    }
}else{
    echo "Error al mostar metodo no se ha encontrado";
}
?>


<h1>Hola mundo mvc</h1>
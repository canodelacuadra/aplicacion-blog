<?php 

//recogemos la variable
if(isset($_GET['id_usuario'])){
$id =$_GET['id_usuario'];
//Preparamos la consulta
    $consulta = "DELETE FROM usuarios WHERE id_usuario = $id";
    // realizamos la conexion
    include '../../conexion.php';
    // ejecutmos la consulta
    if( mysqli_query($conexion,$consulta)){
        header('location:index.php');
    }else{
        echo 'No consigo el Move to trash';
    }
}else{
    echo 'No sé lo que estás haciendo';
}






?>
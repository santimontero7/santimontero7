<?php

$idproducto=$_GET['idproducto'];    

require_once "conexion.php";
require_once "metodosCrud.php";

$objeto=new metodos();
if($objeto->eliminarDatos($idproducto)==1){
    header("location:admin.php");
}else{
    echo "fallo al eliminar";
}

?>
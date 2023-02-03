<?php
require_once("modelo/index.php");
class modeloController{
    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("productos","1");
        require_once("vista/index.php");
    }
    //nuevo
    static function nuevo(){        
        require_once("vista/nuevo.php");
    }
    //guardar
    static function guardar(){
        $producto= $_REQUEST['producto'];
        $precio= $_REQUEST['precio'];
        $fecha_ingreso= $_REQUEST['fecha_ingreso'];
        $fecha_mysql = DateTime::createFromFormat('Y-m-d', $fecha_ingreso);
        $fecha_formateada = $fecha_mysql->format('Y-m-d');
        $stock=$_REQUEST['stock'];
        $data = "null,'".$producto."','".$fecha_formateada."',".$stock.",".$precio;
        $producto = new Modelo();
        $dato = $producto->insertar("productos",$data);
        header("location:".urlsite);
    }



    //editar
    static function editar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->mostrar("productos","id=".$id);        
        require_once("vista/editar.php");
    }
    //actualizar
    static function actualizar(){
        $id = $_REQUEST['id'];
        $producto= $_REQUEST['producto'];
        $precio= $_REQUEST['precio'];
        $fecha_ingreso= $_REQUEST['fecha_ingreso'];
        $fecha_mysql = DateTime::createFromFormat('Y-m-d', $fecha_ingreso);
        $fecha_formateada = $fecha_mysql->format('Y-m-d');
        $stock=$_REQUEST['stock'];
        $data = "producto='".$producto."',precio=".$precio.",fecha_ingreso='".$fecha_formateada."',stock=".$stock;
        $producto = new Modelo();
        $dato = $producto->actualizar("productos",$data,"id=".$id);
        header("location:".urlsite);
    }


    //eliminar
    static function eliminar(){    
        $id = $_REQUEST['id'];
        $producto = new Modelo();
        $dato = $producto->eliminar("productos","id=".$id);
        header("location:".urlsite);
    }


}
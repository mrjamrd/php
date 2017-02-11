<?php
require_once("conectar.php");

  class Usuarios extends Conectar{
    private $db;

   public function __construct()
   {
        $this->db = parent::conectar();
        parent::setnames();
   }
   public function getDatos(){
     $sql = "SELECT id, nombre, correo, telefono, fecha FROM usuarios";
     $datos = $this->db->query($sql);
     $arreglo = array();
     while($reg=$datos->fetch_object()){
       $arreglo[]=$reg;
     }
     return $arreglo;
   }




  }
 ?>

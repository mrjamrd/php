<?php
  abstract class Conectar{
    private $mysqli;

    public function conectar()
    {
        $this->mysqli = new mysqli("localhost","mrjam","cuqui17","sistema");
        return $this->mysqli;
    }
    public function setnames()
    {
       return $this->mysqli->query(SET NAMES 'utf8');
    }

  }


 ?>

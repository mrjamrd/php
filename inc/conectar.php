<?php
  abstract class Conectar{
    private $mysqli;

    public function conectar()
    {
        $this->mysqli = new mysqli("localhost","usuario","password","sistema");
        return $this->mysqli;
    }
    public function setnames()
    {
       return $this->mysqli->query("SET NAMES 'utf8'");
    }

  }


 ?>

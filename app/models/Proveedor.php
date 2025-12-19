<?php

//1. Acceder a la clase conexión
require_once 'Conexion.php';

//2. El proveedor heredará las funcionalidad de la clase Conexion
class Proveedor extends Conexion{

  //3. Creamos un atributo donde guardamos la conexión
  private $pdo;

  //4. En el constructor, guardamos la conexión activa
  public function __construct(){
    $this->pdo = parent::getConexion();
  }

  public function listar(){
    $this->pdo;
  }

  public function registrar(){
    $this->pdo;
  }

  public function actualizar(){
    $this->pdo;
  }

  public function eliminar(){
    $this->pdo;
  }

}
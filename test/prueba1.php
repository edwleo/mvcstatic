<?php

//Para salir de una carpeta ../
require_once '../app/models/Producto.php';
$producto = new Producto();

//Verificamos el método listar
print_r($producto->listar());
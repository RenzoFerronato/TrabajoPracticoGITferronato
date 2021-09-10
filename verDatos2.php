<?php
require_once 'JugadorIndependiente.php';

$jugador = new JugadorIndependiente($_POST['nombre'], $_POST['dorsal'], $_POST['categoria'],  $_POST['posicion']);



//Este archivo responde con un objeto JSON. No hace falta comprenderlo todo
//(aunque estaría bueno). Simplemente entender que el archivo "arma" un array, y
//lo muestra convertido en otro formato (JSON).

$datos['nombre'] = $jugador->getNombre();
$datos['dorsal'] = $jugador->getDorsal();
$datos['categoria'] = $jugador->getCategoria();
$['posicion'] = $jugador->getPosicion()

//Para probar el método __toString():
//$datos['cadena'] = "Datos del alumno: " . $alumno;

header('Content-Type: application/json');
echo json_encode($datos);
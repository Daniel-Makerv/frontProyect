<?php
$url = 'http://127.0.0.1:8000/api/proyects';
//creando nuevo recurso url
$ch = curl_init($url);

//funcion para encriptar la informacion del formulario
$data = array(
    'nombre_cliente' => $_POST['nombre'],
    'fecha_inicio' => $_POST['nombre'],
    'lenguaje_programacion' => $_POST['nombre'],
    'duracion_estimada' => $_POST['nombre'],
    'proyect_manager' => $_POST['nombre'],
    'observaciones' => $_POST['nombre'],
);
$payload = json_encode($data);
//mostrar info encriptada
// echo $payload;
//establecer el tipo de contenido en aplicación/json
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
// devuelve la respuesta en lugar de la salida
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
////ejecutar la solicitud POST
$result = curl_exec($ch);
//cerrando la url
curl_close($ch);
echo $payload;

<?php
$url = 'http://127.0.0.1:8000/api/proyects';
//creando nuevo recurso url
$ch = curl_init($url);

//funcion para encriptar la informacion del formulario
$data = array(
    'nombre_cliente' => $_POST['nombre_cliente'],
    'fecha_inicio' => $_POST['fecha_inicio'],
    'lenguaje_programacion' => $_POST['lenguaje_programacion'],
    'duracion_estimada' => $_POST['duracion_estimada'],
    'proyect_manager' => $_POST['proyect_manager'],
    'observaciones' => $_POST['observaciones'],
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
?>
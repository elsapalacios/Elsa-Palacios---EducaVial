<?php

  include 'conexion.php';

  /*$id_cliente = $_POST['id_cliente'];
  $id_usuario = $_POST['id_usuario'];*/
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $contrasena = $_POST['contrasena'];
  $direccion = $_POST['direccion'];

  $query = "INSERT INTO usuarios (nombre, correo, telefono, contrasena, direccion)
            VALUES('$nombre', '$correo', '$telefono', '$contrasena', '$direccion')";

  $ejecutar = mysqli_query($conexion, $query);

  /*if($ejecutar){
        echo '
            <script>
                alert("Estudiante almacenado exitosamente");
                window.location = "../Login.php";
            </script>
        ';
        id_animal`, `nombre_cientifico`, `nombre_comun`, `especie`, `edad`, `ubicacion`, `estado`, `descripcion`, `fecha_registro`
        id_usuario`, `nombre`, `correo`, `telefono`, `usuario`, `contraseña`

        $id_animal = $_POST['id_animal'];
  $nombre_cientifico = $_POST['nombre_cientifico'];
  $nombre_comun = $_POST['nombre_comun'];
  $especie = $_POST['especie'];
  $edad = $_POST['edad'];
  $ubicacion = $_POST['ubicacion'];
  $estado = $_POST['estado'];
  $descripcion = $_POST['descripcion'];
  $fecha_registro = $_POST['fecha_registro'];

  }*/
?>
<?php

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];
  $sugerencia = $_POST['sugerencia'];


 $link = mysqli_connect("localhost", "pagina", " ");


if (mysqli_connect_errno()) {
    printf("Error de conexión: %s\n", mysqli_connect_error());
    exit();
}


  $query = "INSERT INTO registrar VALUES ('$nombre', '$correo', $telefono, '$sugerencias')";
  mysqli_query($link, $query);


  printf ("Nosotros nos comunicamos \n", mysqli_insert_id($link));

header('Location: index.html');

?>
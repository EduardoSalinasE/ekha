<?php
    $cn = new mysqli("https://databases-auth.000webhost.com/index.php","id17782893_ekha","qdkU>?u\hi64m~O");
    $idpersonaje = $_GET['idPersonaje'];
    $nombre = $_GET['nombrePersonaje'];
    $constelacion = $_GET['constelacion'];
    $descripcion = $_GET['descripcion'];
    $rs = $cn->query("INSERT INTO crearcaballero(idPersonaje,nombrePersonaje,constelacion,descripcion) values('".$idpersonaje."','".$nombre."','".$constelacion."','".$descripcion."')");
   
    while($row = $rs->fetch_assoc()){
        $res[] = $row;
    }

    echo json_encode($res,JSON_UNESCAPED_UNICODE);
    $cn->close();
?>
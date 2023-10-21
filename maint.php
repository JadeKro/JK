<?php
    $name= $_POST ['name'];
    $lastname= $_POST ['lastname'];
    $email= $_POST ['email'];
    $cell= $_POST ['cell'];
    $equip= $_POST['equip'];
    $damage= $_POST['damage'];

    $conexion= @mysqli_conection ($name, $lastname, $email, $cell, $equip, $damage);

    if (!$conexion) { 
        die('<strong>No pudo conectarse:</strong> ' . mysql_error());} 

?>
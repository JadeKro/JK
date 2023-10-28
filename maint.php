<?php

include("conexion.php");

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$equip = $_POST['equip'];
$damage = $_POST['damage'];

$sql = "INSERT INTO maint (name,lastname,email,cell,equip,damage)
VALUES ('$name', '$lastname', '$email', '$cell', '$equip', '$damage')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
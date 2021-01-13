<?php include("db.php"); ?>

<?php
if (isset($_POST["save"])){

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$lineas = file("C:\Users\Carlos\Downloads\\".$_POST['archivo']);


    foreach($lineas as $linea_num => $linea){


        $datos = explode("|",$linea);


        $titulo = trim($datos[0]);
        $isbn   = trim($datos[1]);
        $autor  = trim($datos[2]);


        $query  = "INSERT INTO datosprueba(nombre,telefono,email,autor,titulo,isbn) VALUES ('$nombre','$telefono','$email','$autor','$titulo','$isbn')";
        $result = mysqli_query($conexion,$query);

        if(!$result){
            die("Query failed");
        }

        header("Location: index.php");

    }







}

?>
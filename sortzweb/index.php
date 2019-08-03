

<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "formulario";


$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if(!$enlace){
    echo "Error en la conexión con el servidor";
}


if(isset($_POST['registrarse'])){
    $nombre = $_POST["nombre"];
	$correo = $_POST["correo"];
	$sexo = $_POST["sexo"];
	$id = rand(1,99);

	$insertarDatos = "INSERT INTO datos1 VALUES('$nombre', '$correo', '$sexo', '$id')";


	$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

	if(!$ejecutarInsertar){
		echo "Hay un error en la linea sql";
	}else{
        echo "Datos guardados correctamente"."<a href= 'contact.html'>volver</a>";
    }

}


?>














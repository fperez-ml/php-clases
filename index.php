<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Agenda</title>
</head>
<body>
<h2>Agenda</h2>
<body>
<?php
include "clases.php";
session_start();

/* Si NO tenemos la agenda en la sesión y además hemos recibido 
 * un nuevo contacto entonces procederemos a crear una clase Agenda que almacena
 * un array de Contacto
 */

if(!isset($_SESSION["agenda"])) {
    $_SESSION["agenda"]=new Agenda();
}
if($_SESSION["agenda"]->getTotalContactos()==0) {
    echo "<h3>Todavía no hay contactos en la agenda</h3>";
}
else {
    $agenda=$_SESSION["agenda"];
    echo "<table style='width:50%;border:2px solid blue;'>";
    echo "<tr><th>Nombre</th><th>Teléfono</th><th>Correo</th>";
    foreach($agenda->getContactos() as $contacto) {
        echo "<tr>";
        echo "<td>".$contacto->getNombre()."</td>";
        echo "<td>".$contacto->getTelefono()."</td>";
        echo "<td>".$contacto->getCorreo()."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>
<h4>Nuevo contacto</h4>
<form action="validacion.php" method="POST">
Nombre: <input type="text" name="nombre" required/><br/>
Teléfono: <input type="text" name="telefono" required/><br/>
Correo electrónico: <input type="email" name="correo" required/></br>
<br/>
<input type="submit" value="Enviar">
</form>
</body>
</html>
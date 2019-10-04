<?php
session_start();
    if (!isset($_SESSION["contador"])){ 
        $_SESSION["contador"] = 1; 
    }else{ 
        $_SESSION["contador"]++; 
    }
$_POST['colorprincipal'];
$_POST['tipofuente'];
$_POST['tamanio'];
$_POST['cajatexto'];
$_POST['save'];
include "UF1-NF3-PAC01_SotoOscar.php";
?>
<html>
 <head>
  <title>Ejercicio 4</title>
 </head>
 <body>
    <?php
        echo "<a href='UF1-NF3-PAC01_SotoOscar_2.php'>Haz clic para recargar esta página: ".$_SESSION['contador']." visitas</a>";
    ?>
    <form method="post" action="UF1-NF3-PAC01_SotoOscar_1.php">
        <p>Elige color: 
        <input type="color" name="colorprincipal"/>
        </p>
        <p>Elige fuente: 
        <select name="tipofuente">
            <option value="Arial">Arial</option>
            <option value="Algerian">Algerian</option>
            <option value="Impact">Impact</option>
        </select>
        </p>
        <p>Elige el tamaño: 
        <input type="text" name="tamanio"/>
        </p>
        <p>
        <textarea name="cajatexto" rows="10" cols="40"></textarea>
        </p>
        <input type="submit" name="submit" value="Enviar"/>
        <p>
        Quieres guardar la info?
        <input type="checkbox" name="save" value="Yes" />
        </p>
    </form>
 </body>
</html>


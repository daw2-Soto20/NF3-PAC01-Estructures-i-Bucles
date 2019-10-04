<?php
session_start();


?>

<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
<?php
date_default_timezone_set('Europe/Madrid');
$day = date('d')-1;
$days = date('d');
$fday = date('l',$day);
$month = date('F', strtotime("-1 months"));
$num_days_month = date('t');
$resto_dias = $num_days_month - $days;
$month_now = date('m');
$resto_meses = 12-$month_now;
// Guardamos en una variable el número del mes actual
$mesActual  = date('n');

echo "Ayer fue: ";
echo $fday;
echo "</br>";
echo "</br>";
echo "El mes pasado fue: ";
echo $month;
echo "</br>";
echo "</br>";
echo "Quedan ",$resto_dias," dias para acabar el mes";
echo "</br>";
echo "</br>";
echo "Quedan ",$resto_meses," meses para acabar el año";
echo "</br>";
echo "</br>";

//---------------SI EL MES ESTA ENTRE UN RANGO DETERMINADO CORRESPONDE A UNA ESTACION DEL AÑO CONCRETA-------------
    if ($mesActual>=3 && $mesActual<=5) {
        echo "<h1>Feliz Primavera!</h1>";
        echo "</br>";
        echo "</br>";
    } elseif ($mesActual>=6 && $mesActual<=8) {
        echo "<h1>Feliz Verano!</h1>";
        echo "</br>";
        echo "</br>";
    } elseif ($mesActual>=9 && $mesActual<=11) {
        echo "<h1>Feliz Otoño!</h1>";
        echo "</br>";
        echo "</br>";
    } else {
        echo "<h1>Feliz Invierno!</h1>";
        echo "</br>";
        echo "</br>";
    }
    
include "UF1-NF3-PAC01_SotoOscar.php";
$texto=$_POST['cajatexto'];
$color=$_POST['colorprincipal'];
$size=$_POST['tamanio'];
$font=$_POST['tipofuente'];
$checkbox=$_POST['save'];

$datos_cookie = "Color: $color<br>Fuente: $font<br>Tamaño: $size<br>Caja texto: $texto";
setcookie("usercookie",$datos_cookie,time()+15);

echo "<p style=color:$color;font-family:$font;font-size:$size>$texto</p></br>";
//echo "<p>$checkbox</p>";
if(isset($checkbox) && $checkbox == 'Yes')
{
    echo $_COOKIE['usercookie']; 
}
else
{
    echo "Has escogido no guardar los datos.";

}

?>
    </body>
</html>



<?php
// Los delimitadores pueden ser barra, punto o guión
$fecha = "1545:carlos:34:piezas/
5645:eduardo:30:piezas/
7924:avilinia:28:cajas/
7982:carlos:34:piezas/
1123:eduardo:30:piezas/
1547:avilinia:28:cajas/
1689:carlos:34:piezas/
6542:eduardo:30:piezas/
64684:avilinia:28:cajas/
1:carlos:34:piezas/
2:eduardo:30:piezas/
3:avilinia:28:cajas/";


// list($var1, $var2, $var3) = split('[/.-]', $fecha);

$miRegistro =  explode("/", $fecha);

for ($i = 1; $i <= 100; $i++) {
	
	echo $miRegistro[$i] . "<br>";
	
	
}

?>

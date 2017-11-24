<html>
<body>
<?php echo $_POST["valor1"]; ?><br>
<?php echo $_POST["valor2"]; ?><br>
<?php echo $_POST["valor3"]; ?><br>
</body>
</html>
<?php
function testfun(){
	$valor1 = '10000000';
	$valor2 = '5000001';
	$porcentaje2 = $valor1*50/100;
	if($valor2 > $porcentaje2){
		echo "aqui entro otra vez";
		return TRUE;
	}
}




function porcentaje($total, $parte, $redondear = 2) {
    return round($parte / $total * 100, $redondear);
}
 
$n1 = 10000000;
$n2 = 5000000;
 
$total = $n1+$n2;
 
echo "$n1 es el " . porcentaje($total, $n1, 2) . "% de $total <br>";
echo "$n2 es el " . porcentaje($total, $n2, 2) . "% de $total <br>";






if(array_key_exists('test',$_POST)){
   testfun();
}
echo $_POST["text"];
?>
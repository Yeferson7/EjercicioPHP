<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<Location "/">
  AllowMethods GET POST OPTIONS
</Location>
<?php
	if(isset($_POST['cantidadkg']) && isset($_POST['producto'])){
		$cantidadkg = $_GET['cantidadkg'];
		$producto = $_GET['producto'];
		if($producto=="Naranja" || $producto=="naranja"){
			$iva = 0.1;
			$valorproducto = 2*$cantidadkg;
			$valorproductoiva = $valorproducto + $valorproducto*$iva;
			echo "<br><b><big>Usted debe pagar $$valorproducto más iva 10 %, total: $$valorproductoiva.</big></b>";
		}
		elseif($producto=="Arroz" || $producto=="arroz"){
			$iva = 0.15;
			$valorproducto = 2.1*$cantidadkg;
			$valorproductoiva = $valorproducto + $valorproducto*$iva;
			echo "<br><b><big>Usted debe pagar $$valorproducto más iva 15 %, total: $$valorproductoiva.</big></b>";
		}
		elseif($producto=="Pescado" || $producto=="pescado"){
			$iva = 0.2;
			$valorproducto = 6*$cantidadkg;
			$valorproductoiva = $valorproducto + $valorproducto*$iva;
			echo "<br><b><big>Usted debe pagar $$valorproducto más iva 20 %, total: $$valorproductoiva.</big></b>";
		}
		elseif($producto=="Carne de res" || $producto=="carne de res"){
			$iva = 0.25;
			$valorproducto = 14*$cantidadkg;
			$valorproductoiva = $valorproducto + $valorproducto*$iva;
			echo "<br><b><big>Usted debe pagar $$valorproducto más iva 25 %, total: $$valorproductoiva.</big></b>";
		}else{
			echo "<br><big><b>El producto no se encuentra disponible</b></big>";
		}
	}
?>

</body>
</html>

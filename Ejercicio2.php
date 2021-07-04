<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ejercicio 2 - Yeferson</title>
</head>
<body bgcolor="black" style="color:white">
    <h1>Ejercicio 2:</h1>
    <i><p>Solicitar al cliente cantidad en kilos y el tipo de producto entre los que puede elegir naranja, arroz, pescado o carne de 		res.<br />
    Debe imprimir: Usted debe pagar "valor del producto" más iva "valor del IVA" total "valor del producto + iva".<br />
    Tenga en cuenta que:<br />
    Naranjas kilo 2000 + 10 % iva<br />
    Arroz kilo 2100 + 15 % iva<br />
    Pescado kilo 6000 + 20 % iva<br />
    Carne de Res kilo 14000 + 25 % iva<br />
    Si no se coloca un producto a solicitar que lo agregue, si adiciona un producto diferente, imprimir que el producto no se encuentra disponible.</p></i>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <b>Ingrese la cantidad de kilogramos y el tipo de producto, entre ellos naranja, arroz, pescado o carne de res.</b><br />
    <p>Ingrese la cantidad de kilogramos:
    <input type="text" name="cantidadkg" autofocus required placeholder="Ej. 2000"/></p><br />
    <p>Ingrese el producto:
    <input type="text" name="producto" required placeholder="Ej. Naranja"/></p><br />
    <input type="submit" value="Enviar" />
    </form>
<?php
	if(isset($_POST['cantidadkg']) && isset($_POST['producto'])){
		$cantidadkg = $_POST['cantidadkg'];
		$producto = $_POST['producto'];
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
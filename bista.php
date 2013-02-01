<?php
class vista{
 public function sacarcoche($x, $p, $c)
	{
		echo "$p $x equipacion: $c<br /><br />";
	}  
public function ponercoches()
	{
		echo '<p id="cochestitulo">Coches disponibles para venta:<br /><br /></p>';
	}
public function lineablanco()
	{
		echo "</br>";
	}
public function sacarcliente($x)
	{
		echo "Cliente: $x
                    <br />";
	}
public function vercleinte($nomclien, $apellido, $telefono)
	{
		echo "Nombre: $nomclien Apellido: $apellido telefono:$telefono";
	}	
}
?>

<?php
class vista{
 public function sacarcoche($x, $p, $c)
	{
		echo "$p $x equipacion: $c<br /><br />";
	}  
public function ponercoches()
	{
		echo '<h1>Coches disponibles para venta:<br /><br /></h1>';
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
public function vercleinte($n, $a, $t)
	{
		echo "Cliente: $n $a telefono: $t";
	}	
}
?>

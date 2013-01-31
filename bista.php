<?php
class vista{
 public function sacarcoche()
	{
		echo "Coche: ";
	}  
public function vercoche($marca, $modelo, $caracteristicas)
	{
		echo "$marca $modelo caracteristicas: $caracteristicas";
	}
public function lineablanco()
	{
		echo "</br>";
	}
public function sacarcliente()
	{
		echo "Cliente: ";
	}
public function vercleinte($nomclien, $apellido, $telefono)
	{
		echo "Nombre: $nomclien Apellido: $apellido telefono:$telefono";
	}	
}
?>

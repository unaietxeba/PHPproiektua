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
public function sacarcliente()
	{
		echo "Pieza: ";
	}
public function verpedidopieza($ref_pieza, $cantidad, $precio)
	{
		echo "referencia de pieza: $ref_pieza cantidad: $cantidad precio:$precio";
	}

	
}
?>

<?php
class coche{
    private $cod_coche;
    private $marca;
    private $modelo;
    private $caracteristicas;
}
class cliente{
    private $cif_cliente;
    private $nombre;
    private $apellido;
    private $telefono;
}
class pieza{
    private $num_pedido;
    private $ref_pieza;
    private $cantidad;
    private $precio; 
}
class venta{
    private $num_venta;
    private $cod_coche;
    private $cif_cliente; 
}
/*
 class Persona
{
	private $DNI;
	private $Nombre;
	private $Apellido;
	
	public function __construct($V1,$V2,$V3)
	{
		$this->DNI=$V1;
		$this->Nombre=$V2;
		$this->Apellido=$V3;
	}
	public function getDNI()
	{
		return($this->DNI);
	}
        public function getnombre()//nombre bariablie bidali vistara
	{
		return($this->Nombre);
	}
	
}

class Ikasle extends Persona
{
	private $Curso;
	public function __construct($V1,$V2,$V3,$V4)
	{
		parent::__construct($V1,$V2,$V3);
		$this->Curso=$V4;
	}
}
class Irakasle extends Persona
{
	private $NSS;
	public function __construct($V1,$V2,$V3,$V4)
	{
		parent::__construct($V1,$V2,$V3);
		$this->NSS=$V4;
	}
	public function getNSS()
	{
		return ($this->NSS);
	}
}
 */
?>

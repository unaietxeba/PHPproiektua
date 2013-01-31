<?php
namespace entities;
/** @MappedSuperclass */
class cliente{
    /** @Column(type="string")
    * @id
    */
    private $num_venta;
    /** @Column(type="string",length=15) */
    private $cod_coche;
    /** @Column(type="string",length=15) */
    private $cif_cliente;
    
    public function __construct($ven,$cod,$cif){
    $this->num_venta=$ven;
    $this->cod_coche=$cod;
    $this->cif_cliente=$cif;
    }
    
    public function getnum_venta(){
    return $this->num_venta;
    }
    
    public function setnum_venta(){
        $this->num_venta=$ven;
        }
        
    public function getcod_coche(){
        return $this->cod_coche;
    }
    
    public function setcod_coche(){
        $this->cod_coche=$cod;
        }
        
    public function getcif_cliente(){
        return $this->cif_cliente;
    }  
    
    public function setcif_cliente(){
        $this->cif_cliente=$cif;
        }
    }
?>

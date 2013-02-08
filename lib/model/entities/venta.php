<?php
namespace entities;

/** @Entity @table(name="venta") */
class venta{
    /** @id 
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="num_venta",type="integer")
    */
    private $num_venta;
    /** @Column(type="string",length=15) */
    private $cod_coche;
    /** @Column(type="string",length=15) */
    private $cif_cliente;
    
    public function __construct($cod,$cif){
    
    $this->cod_coche=$cod;
    $this->cif_cliente=$cif;
    }
    
    public function getnum_venta(){
    return $this->num_venta;
    }
    
    public function setnum_venta($ven){
        $this->num_venta=$ven;
        }
        
    public function getcod_coche(){
        return $this->cod_coche;
    }
    
    public function setcod_coche($cod){
        $this->cod_coche=$cod;
        }
        
    public function getcif_cliente(){
        return $this->cif_cliente;
    }  
    
    public function setcif_cliente($cif){
        $this->cif_cliente=$cif;
        }
    }
?>

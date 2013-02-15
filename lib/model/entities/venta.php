<?php
namespace entities;

/** @Entity @table(name="venta") */
class venta{
    /** @id 
     * @GeneratedValue(strategy="AUTO")
     * @Column(name="num_venta",type="integer")
    */
    private $num_venta;
    /** @ManyToOne(targetEntity="coche", inversedBy="ventas")
     * @JoinColumn(name="cod_coche", referencedColumnName="cod_coche")
     */
    private $coche;
    
    /** @ManyToOne(targetEntity="cliente", inversedBy="ventas")
     * @JoinColumn(name="cif_cliente", referencedColumnName="cif_cliente")
     */    
    private $cliente;
    
    public function __construct($coc,$cli){
    
    $this->coche=$coc;
    $this->cliente=$cli;
    }
    
    public function getnum_venta(){
    return $this->num_venta;
    }
    
    public function setnum_venta($ven){
        $this->num_venta=$ven;
        }
        
    public function getcoche(){
        return $this->coche;
    }
    
    public function setcoche($coc){
        $this->coche=$coc;
        }
        
    public function getcliente(){
        return $this->cliente;
    }  
    
    public function setcliente($cli){
        $this->cliente=$cli;
        }
    }
?>

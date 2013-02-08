<?php
namespace entities;
/** @Entity @table(name="coche") */
class coche{
    /** @Column(type="integer")
    * @id
    */
    private $cod_coche;
    /** @Column(type="string",length=15) */
    private $marca;
    /** @Column(type="string",length=15) */
    private $modelo;
    /** @Column(type="string",length=15) */
    private $caracteristicas;
    
    public function __construct($cod,$mar,$mod,$carac){
    $this->cod_coche=$cod;
    $this->marca=$mar;
    $this->modelo=$mod;
    $this->caracteristicas=$carac;
    }
    
    public function getcod(){
        return $this->cod_coche;
    }
    
    public function setcod(){
        $this->cod_coche=$cod;
        }
        
    public function getmarca(){
        return $this->marca;
    }
    
    public function getcoche(){
        return $this->marca;
    }
    
    
    public function setmarca(){
        $this->marca=$mar;
        }
        
        
    public function getmodelo(){
        return $this->modelo;
    }
    
    public function setmodelo(){
        $this->modelo=mod;
        }
        
    public function getcarac(){
        return $this->caracteristicas;
    } 
    
    public function setcarac(){
        $this->caracteristicas=$carac;
        }
    
//    public function anadircoche($cod, $mar, $mode,$carac){
//        $this->cod_coche=$cod;
//        $this->marca=$mar;
//        $this->modelo=$mode;
//        $this->caracteristicas=$carac;        
//        }
    
    }
?>
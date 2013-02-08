<?php
namespace entities;
/** @Entity @table(name="cliente") */
class cliente{
    /** @Column(type="integer")
    * @id 
    */
    private $cif_cliente;
    /** @Column(type="string",length=15) */
    private $nombre;
    /** @Column(type="string",length=15) */
    private $apellido;
    /** @Column(type="string",length=15) */
    private $telefono;
    
    public function __construct($cif,$nom,$apel,$tel){
    $this->cif_cliente=$cif;
    $this->nombre=$nom;
    $this->apellido=$apel;
    $this->telefono=$tel;
    }
    
    public function getcif(){
        return $this->cif_cliente;
        }
        
    public function setcif(){
        $this->cif_cliente=$cif;
        }            
    
    public function getnombre(){
        return $this->nombre;
    }
    public function setnombre(){
        $this->nombre=$nom;
        }
        
    public function getapellido(){
        return $this->apellido;
    }
    
    public function setapellido(){
        $this->apellido=$apel;
        }
        
    public function gettelefono(){
        return $this->telefono;
    }  
    
    public function settelefono(){
        $this->telefono=$tel;
        }
    }
?>

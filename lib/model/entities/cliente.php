<?php
namespace entities;
/** @MappedSuperclass */
class cliente{
    /** @Column(type="string")
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
    public function getnombre(){
        return $this->nombre;
    }
    public function getapellido(){
        return $this->apellido;
    }
    public function gettelefono(){
        return $this->telefono;
    }    
    }
?>

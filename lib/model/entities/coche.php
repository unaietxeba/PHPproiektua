<?php
namespace entities;
/** @MappedSuperclass */
class coche{
    /** @Column(type="string")
    * @id
    */
    private $cod_coche;
    /** @Column(type="string",length=15) */
    private $marca;
    /** @Column(type="string",length=15) */
    private $modelo;
    /** @Column(type="string",length=15) */
    private $caracteristicas;
    
    public function __construct($cod,$mar,$modelo,$carac){
    $this->cod_coche=$cod;
    $this->marca=$mar;
    $this->modelo=$moelo;
    $this->caracteristicas=$carac;
    }
    
    public function getcod(){
    return $this->cod_coche;
    }
    public function getmarca(){
        return $this->marca;
    }
    public function getmodelo(){
        return $this->modelo;
    }
    public function getcarac(){
        return $this->caracteristicas;
    }    
    }
?>
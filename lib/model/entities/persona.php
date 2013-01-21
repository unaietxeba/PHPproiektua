<?php
namespace entities;
/** @MappedSuperclass */
class persona
{
/** @Column(type="string",length=15) */
private $nombre;
/** @Column(type="string",length=15) */
private $apellido;
/** @Column(type="string")
 * @id
 */
private $dni;

public function __construct($n,$a,$d){
    $this->nombre=$n;
    $this->apellido=$a;
    $this->dni=$d;
}
public function getnombre(){
    return $this->nombre;
}
public function getapellido(){
    return $this->apellido;
}
public function getdni(){
    return $this->dni;
}
}
?>

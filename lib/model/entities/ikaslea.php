<?php
namespace entities;
/** @Entity
 * @Table(name="IKASLEAK")
 */
   class ikaslea extends persona{
    /** @Column(type="string",length=15) */
    private $ano_nacimiento;
    /** @Column(type="string",length=15)*/
    private $direccion;

    public function __construct($n,$a,$d,$ano,$dir){
        $this->ano_nacimiento=$ano;
        $this->direccion=$dir;
        parent::__construct($n,$a,$d);
        }
    public function getano_nacimiento(){
        return($this->ano_nacimiento);
    }
    public function getdireccion(){
        return $this->direccion;
    }


}

?>

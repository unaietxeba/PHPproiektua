<?php
class vista{
 public function sacarcoche($x, $p, $c)
	{
		echo "$p $x equipacion: $c<br /><br />";
	}  
public function ponercoches()
	{
		echo '<h1>Coches disponibles para venta:<br /><br /></h1>';
	}
public function selecthasi($name)
	{
		echo "<select name='$name'>";
        }
public function selectamaitu()
	{
		echo "</select>";
        }
public function formhasi($n, $met, $ac)
	{
		echo "<form name='$n' method='$met' action='$ac'>";
        }
public function formamaitu()
	{
		echo "</form>";
        }

public function ventajarri() {
        echo "<h1>Venta Nueva</h1>";    
    }

public function input($mar, $na, $ty, $id, $siz, $val) {
        echo "$mar <input name='$na' type='$ty' id='$id' size='$siz' value='$val'><br/>";    
}

public function ponercohenuevo() {
        echo "<h1>Coche nuevo</h1>";
}
	
public function option($b, $name){
            echo "<option value='$b' name='$name'>".$b."</option>";
        }
        
public function botoia() {
           echo '<input type="submit" name="botEnviar" value="Enviar" id="botEnviar">'; 
           echo '<input type="reset" name="botRestablecer" value="Restablecer" id="botRestablecer2"></td>';
           echo "</tr>";
        }

public function saltodelinea(){
            echo '<br/>';
}

public function botoiventa() {
           echo '<br/><input type="submit" name="botEnviar" value="Erosketa egin" id="botEnviar">'; 
           
        }

            
            
}            
?>


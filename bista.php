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


	

public function option($b){
            echo "<option value='$b'>".$b."</option>";
        }
}

?>

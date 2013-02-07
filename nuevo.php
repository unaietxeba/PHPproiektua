<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP proiektua</title>
<link rel="stylesheet" href="estiloproiektu.css" />
</head>    
<body>
<?php
        include_once "lib/orm/EntityManagerFactory.php";
        include_once 'bista.php'; 
        $em = EntityManagerFactory::createEntityManager();
        $bis =new vista();
        
        ?>
    
        
    <div id="contenedor1">
        <div id="titulo">    
            <h1>Lista de coches</h1>
        </div>  
        <div id="bentmenu">
            <ul id="menu">
                <li>
                <a href="listado.php">Listado de coches</a>
                </li>
                <li>
                <a href="nuevo.php">coche nuevo</a>
                </li>
                <li>
                <a href="ventas.php">Venta nueva</a>
                </li>
            </ul>
        </div>
        <br/>
        
    <div id="coches">
    <!--Amen zartu kodigoa barrizena!!!!!!!!! -->
    
        <?php
            $bis->formhasi("form1", "POST", "#");            
            $bis->ponercohenuevo();
            $bis->input("cod_coche*: ", "cod_coche", "text", "cod_coche", "50", "");
            $bis->input("marca*: ", "marca", "text", "marca", "50", "");
            $bis->input("modelo*: ", "modelo", "text", "modelo", "50", "");
            $bis->input("caracteristicas*: ", "carac", "text", "carac", "50", "");
            $bis->botoia();        
            error_reporting(0);
            if(isset($_POST)){
            $c1=new entities\coche($_POST['cod_coche'],$_POST['marca'],$_POST['modelo'],  $_POST['carac']);
            try{
                $em->persist($c1);
               }catch(Exception $e){
                                //echo("<br>$e->getMessage()<br>");
                              }
            $em->flush();
            }
            ?>
    </div>
    
  </form>
  
 </div>       
</body>
</html>


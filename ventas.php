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
        </div>
    <div id="coches">
    <!--Amen zartu kodigoa barrizena!!!!!!!!! -->
                    
        <?php
        $bis->ventajarri();
        
        $bis->formhasi();
        $bis->selecthasi("cars");
        
        $x=0;
        $k=0;
        $x = $em->getRepository('entities\coche')->findAll(); 
        for($k=0;$k<count($x);$k++){
            $era=$x[$k];                    
            $bis->option($era->getmarca());
            }
        
        $bis->selectamaitu();
        $bis->formamaitu();
            
            ?>
    
        </select>
    </form>
    
    
    </div>
           
        
</body>
</html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP proiektua</title>
<link rel="stylesheet" href="estiloproiektu.css" />
</head>    
<body>
<?php
include_once "lib/orm/EntityManagerFactory.php";
        $em = EntityManagerFactory::createEntityManager();
        
        
        ?>
    <div id="contenedor1">
        <div id="titulo">    
            <h1>Lista de coches</h1>
        </div>  
        <div id="bentmenu">
            <ul id="menu">
                <li>
                <a href="#coches">Listado de coches</a>
                </li>
                <li>
                <a href="#nuevo">coche nuevo</a>
                </li>
                <li>
                <a href="#ventas">Ver las ventas</a>
                </li>
            </ul>
        </div>
        <br/>
        <div id="coches">
            <?php
                        
            
            ?>
            
            
        </div>
           
        
    </div>
           
        
</body>
</html>

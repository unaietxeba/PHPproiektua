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
        $bis->ventajarri();
        ?>
    <div id="ponercoche">
        <p>Seleccione tu coche:</p>
        <?php
        $bis->formhasi("form1", "POST", "#");
        $bis->selecthasi("cars");
        
        $x=0;
        $k=0;
        $x = $em->getRepository('entities\coche')->findAll(); 
        for($k=0;$k<count($x);$k++){
            $era=$x[$k];                    
            $bis->option($era->getcod(),$era->getcod());
            }
        $bis->selectamaitu();
        ?>
    </div>
    
    <div id="metclien">
        <p>Mete los datos del cliente</p>
         <?php
        $bis->input("cif_cliente*: ", "cif_cliente", "text", "cif_cliente", "50", "");
        $bis->input("nombre*: ", "nombre", "text", "nombre", "50", "");
        $bis->input("apellido*: ", "apellido", "text", "apellido", "50", "");
        $bis->input("telefono*: ", "telefono", "text", "telefono", "50", "");
            
        $bis->botoiventa();
        $bis->formamaitu();
        error_reporting(0);
            if(isset($_POST)){
            $c1=new entities\venta($_POST['cars'],$_POST['cif_cliente']);
            $c2=new entities\cliente($_POST['cif_cliente'],$_POST['nombre'],$_POST['apellido'],$_POST['telefono']);
            try{
                $em->persist($c1);
                $em->persist($c2); 
               }catch(Exception $e){
//                               echo($e->getMessage());
                              }
            $em->flush();
            }    
            ?>
    
       
    
    </div>
   </div>
        </div>
           
        
</body>
</html>


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
    <div id="tabla1">
        <?php
            $bis->formhasi("form1", "post", "#")
        
        ?>
    </div>
    
    <h1>Coche nuevo</h1>
    
    <table width="100%" border="0" cellpadding="4">
    <tr> 
        <td class="campocoche">cod_coche*:</td>
        <td> <input name="cod_coche" type="text" id="cod_coche" size="50" value=""> </td>
    </tr> 
    <br/>
    <tr> 
        <td class="campocoche">marca*:</td>
        <td> <input name="marca" type="text" id="marca" size="50" value=""> </td>
    </tr>
    <br/>
    <tr> 
        <td class="campocoche">modelo*:</td>
        <td> <input name="modelo" type="text" id="modelo" size="50" value=""> </td>
    </tr>
    <br/>
    <tr> 
        <td class="campocoche">caracteristicas*:</td>
        <td> <input name="carac" type="text" id="carac" size="50" value=""> </td>
    </tr>
    <br/>
    
    <tr align="center"> 
        <td colspan="2" class="camporegistro"><input type="submit" name="botEnviar" value="Enviar" id="botEnviar"> 
        <input type="reset" name="botRestablecer" value="Restablecer" id="botRestablecer2"></td>
    </tr>
    </table>
    </div>
    <?php
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
    
  </form>
  
 </div>       
</body>
</html>


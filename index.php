<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP proiektua</title>
</head>
<body>
<?php
include_once "lib/orm/EntityManagerFactory.php";
        $em = EntityManagerFactory::createEntityManager();
        
        
        ?>
    <h1> Venta de vehiculos</h1>
    
    <p>identificarse:</p>
    <form action="egiaztatu.php" method="post">
            <p>
            Sartu email-a
            <input type="." name="email" required> 
            </p>
            <p>
            Sartu pasaitza
            <input type="." name="pasahitza" required>
            </p>
            <input type="submit">
		
	</form></div>

    
</body>
</html>
        
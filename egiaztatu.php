<?php
$posta=$_POST["email"];
$pass=$_POST["pasahitza"];
//    email    
    if(strstr($posta, " ")==true){
            echo "posta txarto zartu duzu zeren utzuneak daude<br/>";   
    }
    
    
    
    elseif ((strstr($posta,"@")==false)||(strstr($posta,".")==false)){
        echo "emaila ez duzu ongi sartu zeren ez dago ez punturik edo @ rik<br/>";
    }
   
    elseif(substr_count($posta, "@")>1){
            echo "posta txarto zartu duzu zeren @ bat baino gehiago du<br/>";
    }
     
//    pasaitza
    if (strlen($pass) <= 6 || strlen($pass) >= 16){
        echo"Pasahitza ez da 6 karaktere baino handiagoa edo 16 karaktere baino txikiagoa<br/>";
    }
    
    elseif(ctype_alnum($pass)==true){
        if(ctype_digit($pass)==true)
            echo"pasaitza txarto sartu duzu zeren ez duzu hizkirik sartu";
        elseif(ctype_alpha($pass)==true)echo "Pasaitsa txarto sartu duzu zeren ez du zenbakirik";
        
    }
    
    
        
    
    
    
?>

<?php
session_start();
$posta=$_POST["email"];
$pass=$_POST["pasahitza"];
$p=0;
$i=0;
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
        else{$i=1;}

    //    pasaitza
        if (strlen($pass) <= 6 || strlen($pass) >= 16){
            echo"Pasahitza ez da 6 karaktere baino handiagoa edo 16 karaktere baino txikiagoa<br/>";
        }        
        else{$p=1;}   
                
        if($i==1 && $p==1){
            require_once 'index2.php';
        }        
?>

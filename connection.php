<?php 
    $PDO=new PDO('mysql:host=localhost;port=8888;dbname=customsports','root','root');
    if(isset($PDO)){
        echo "";
    }
    else {
        echo "error".$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
?>
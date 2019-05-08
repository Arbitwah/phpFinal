<?php

 $userName = "root";
 $password = "";
 $host = "localhost";
 $db_name= "final_project_online_store";

$dsn = "mysql:host=$host;dbname=$db_name";


try{
$db = new PDO($dsn,$userName,$password);
//echo("yes");
}
catch(Exception $e){
    echo($e->getmessage());
    die();
}


?>
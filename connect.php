<?php

$dsn="mysql:host=localhost;dbname=products";
$user="root";
$pass="";
$options=array(
    PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES UTF8',
);

try{

    $db=new PDO($dsn,$user,$pass);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connect";

    $q="INSERT INTO cars (name) VALUES ('لانس')";

    $db->exec($q);
}catch(PDOException $e){
    echo "faild.".$e->getMessage();

}
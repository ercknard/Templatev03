
<?php

$dbserver = "mysql:host=ec2-18-214-214-252.compute-1.amazonaws.com;";
$dbname = "det90mcs6d42lq";
$dbusername = "ymawbrxlinlluy";
$dbpassword = "6e068b5f3258598341aec187ec80b4a5112db6e05ef4abffee74d0cf4a978617";

try{
    $pdo = new PDO($dbserver . $dbname, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>

<?php

$dbserver = "mysql:host=us-cdbr-east-04.cleardb.com";
$dbname = "dbname=heroku_5142987c57081aa";
$dbusername = "b64914f07d5e65";
$dbpassword = "f742c533";

try{
    $pdo = new PDO($dbserver . $dbname, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo $e->getMessage();
}

?>

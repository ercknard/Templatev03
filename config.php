<?php
/* $dsn = 'mysql:dbname=heroku_5142987c57081aa;host=us-cdbr-east-04.cleardb.com';
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password)
//define('DB_SERVER', 'us-cdbr-east-04.cleardb.com');
define('DB_USERNAME', 'b64914f07d5e65');
define('DB_PASSWORD', 'f742c533');
//define('DB_NAME', 'heroku_5142987c57081aa');
 
/* Attempt to connect to MySQL database
$link = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}catch(PDOException $e){
    echo $e->getMessage();
}
*/

$dsn = 'mysql:host=localhost;dbname=heroku_5142987c57081aa';
$dbname = "heroku_5142987c57081aa";
$dbusername = "b64914f07d5e65";
$dbpassword = "f742c533";

function connect() {
	global $dsn, $username, $password;
  try {
	  $db = new PDO($dsn, $username, $password);
	  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  } catch (PDOException $e) {
	  die( 'Query failed: ' . $e->getMessage() );
  }
}
?>
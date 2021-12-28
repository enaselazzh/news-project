<?php
   
   include 'include/function.php';

 //connection databaes
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbName ='news';
 
try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 } catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }
?>


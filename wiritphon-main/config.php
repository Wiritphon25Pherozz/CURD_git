<?php


$severname = "localhost";
$username = "root";
$userpass = "";
$dbname = "post_db";

try{
    $dbcon = new PDO("mysql:host=$severname;dbname=$dbname", $username,
    $userpass);

    $dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //  echo "connect to database";
    
    }catch(PDOException $e) {
    echo"Failed to content to database" . $e->getMessage();
    }

?>
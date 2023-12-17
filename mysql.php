<?php
$host = "localhost";
$name = "accounts";
$user = "root";
$passwort = "1234";
try{
    $mysql = new PDO("mysql:host=$host;dbname=$name", $user, $passwort);
} catch (PDOException $e){
    echo "SQL Error: ".$e->getMessage();
}
?>
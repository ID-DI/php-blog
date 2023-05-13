<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "blog";

try 
{
    $pdo = new \PDO("mysql:host=".$host.";dbname=".$database."", $username, "", [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} 
catch (\PDOException $e) 
{
    $msg = date("Y-m-d H:i:s") . $e->getMessage();
    file_put_contents("log.txt", $msg . PHP_EOL, FILE_APPEND);
    header("Location: ../errors/dberror.php");
    die();
}
$con = mysqli_connect($host,$username,$password,$database);


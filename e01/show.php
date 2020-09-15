<?php
try{
    $pdo = new PDO('mysql:host=localhost;dbname=studinfo','root','');
}catch(PDOException $e){
    die('Could not Connect :' .$e->getMessage());
}
// var_dump($_POST);
$rollno=$_POST['rollno'];
$statement = $pdo->prepare("select * from biodata where rollno='{$rollno}';");
$statement->execute();
$result=$statement->fetch();
// die(var_dump($result));
require "show.view.php";

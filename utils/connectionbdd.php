<?php
function pdo (){
    $host="mysql:host=localhost;dbname=habitat";
    $user="root";
    $password="";

    try{

        return new PDO($host,$user,$password,[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);
    }catch(PDOException $e){
        return $e->getMessage();
    }
}

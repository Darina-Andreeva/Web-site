<?php
$user ="root";
$pass="";

try
{
     $DB_con = new PDO('mysql:host=localhost;dbname=dblogin', $user, $pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

include_once 'class.user.php';
$users = new USER($DB_con);
include_once 'class.admin.php';
$admin = new ADMIN($DB_con);



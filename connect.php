<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
//     $host = 'localhost';
//     $user = 'root';
//     $password = '';
//     $dbname = 'laundry_admin_db';
//     $dsn ='';

 
// try{
//     $dsn = 'mysql:host='.$host. ';dbname='.$dbname;

//     $pdo = new PDO ($dsn, $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// }catch(PDOException $e){
//     echo 'connection failed: '.$e->getMessage();
// }



$conn= new mysqli('localhost','root','','laundry_admin_db')or die("Could not connect to mysql".mysqli_error($con));

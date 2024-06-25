<?php 
namespace VIEW\cargo;
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cargo.php'; 
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cargo.php'; 

$cargo = new \MODEL\Cargo();

$cargo->setNome($_POST['txtNome']);
$cargo->setDesc($_POST['txtDesc']);
$cargo->setSal($_POST['txtSal']);
$cargo->setQtdfunc($_POST['txtQtdfunc']);

$bllCar = new \BLL\Cargo(); 
$result =  $bllCar->Insert($cargo);  

if ($result->errorCode() == '00000') {
  header("location: lstCargo.php");
  }
  else echo $result->errorInfo();
?>
<?php 
    namespace VIEW\cargo;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cargo.php'; 
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cargo.php'; 

    $cargo = new \MODEL\Cargo();

    $cargo->setId($_POST['txtID']);
    $cargo->setNome($_POST['txtNome']);
    $cargo->setDesc($_POST['txtDesc']);
    $cargo->setSal($_POST['txtSal']);
    $cargo->setQtdfunc($_POST['txtQtdfunc']);
    

    $bllCar = new \BLL\Cargo(); 
    $result =  $bllCar->Update($cargo);  

    header("location: lstCargo.php");
?>
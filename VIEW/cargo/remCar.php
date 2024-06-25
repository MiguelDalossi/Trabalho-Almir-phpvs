<?php 
    namespace VIEW\cargo;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cargo.php'; 

    $id = $_GET['id'];
    

    $bllCar = new \BLL\Cargo();
    $result = $bllCar->Delete($id);

    header("location: lstCargo.php");
?>
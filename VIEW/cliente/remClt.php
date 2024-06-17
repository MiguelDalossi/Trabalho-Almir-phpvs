<?php 
    namespace VIEW\cliente;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cliente.php'; 

    $id = $_GET['id'];
    

    $bllClt = new \BLL\Cliente();
    $result = $bllClt->Delete($id);

    header("location: lstCliente.php");
?>
<?php 
    namespace VIEW\cliente;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php'; 
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cliente.php'; 

    $cliente = new \MODEL\Cliente();

    $cliente->setId($_POST['txtID']);
    $cliente->setNome($_POST['txtnome']);
    $cliente->setcpf($_POST['txtCpf']);
    $cliente->settelefone($_POST['txttel']);
    

    $bllClt = new \BLL\Cliente(); 
    $result =  $bllClt->Update($cliente);  

    header("location: lstCliente.php");
?>
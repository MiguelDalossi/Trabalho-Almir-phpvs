<?php 
    namespace VIEW\cliente;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php'; 
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cliente.php'; 

    $cliente = new \MODEL\Cliente();

    $cliente->setNome($_POST['txtnome']);
    $cliente->setcpf($_POST['txtCpf']);
    $cliente->settelefone($_POST['txttel']);
    

    $bllClt = new \BLL\Cliente(); 
    $result =  $bllClt->Insert($cliente);  

    if ($result->errorCode() == '00000') {
        header("location: lstEquipamento.php");
      }
      else echo $result->errorInfo();
  

?>
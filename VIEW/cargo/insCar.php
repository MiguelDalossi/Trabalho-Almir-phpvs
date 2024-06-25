<?php 
namespace VIEW\cargo;
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cargo.php'; 
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cargo.php'; 


function validateInputs($nome, $descricao, $salario, $qtdfunc) {
    $errors = [];

    if (!preg_match("/^[A-Za-z\s]{2,30}$/", $nome)) {
        $errors[] = "Nome deve ter entre 2 e 30 caracteres e conter apenas letras e espaços.";
    }

    if (!preg_match("/^[A-Za-z\s]{2,50}$/", $descricao)) {
        $errors[] = "Descrição deve ter entre 2 e 50 caracteres e conter apenas letras e espaços.";
    }

    if (!preg_match("/^\d{1,7}$/", $salario)) {
        $errors[] = "Salário deve ser um número entre 1 e 9999999.";
    }

    if (!preg_match("/^\d{1,4}$/", $qtdfunc)) {
        $errors[] = "Quantidade de funcionários deve ser um número entre 1 e 9999.";
    }

    return $errors;
}


$nome = $_POST['txtNome'];
$descricao = $_POST['txtDesc'];
$salario = $_POST['txtSal'];
$qtdfunc = $_POST['txtQtdfunc'];


$errors = validateInputs($nome, $descricao, $salario, $qtdfunc);
if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "<script>alert('$error');</script>";
    }
    echo "<script>window.history.back();</script>";
    exit;
}


$cargo = new \MODEL\Cargo();
$cargo->setNome($nome);
$cargo->setDesc($descricao);
$cargo->setSal($salario);
$cargo->setQtdfunc($qtdfunc);

$bllCar = new \BLL\Cargo(); 
$result =  $bllCar->Insert($cargo);  

if ($result->errorCode() == '00000') {
    header("location: lstCargo.php");
} else {
    $errorInfo = $result->errorInfo();
    echo "<script>alert('Erro ao inserir cargo: $errorInfo[2]');</script>";
    echo "<script>window.history.back();</script>";
}
?>
<?php 
namespace VIEW\cliente;
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php'; 
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cliente.php'; 

function validarNome($nome) {
    $nome = trim($nome);
    return (strlen($nome) >= 2 && strlen($nome) <= 40 && preg_match('/^[a-zA-ZÀ-ÿ ]+$/', $nome));
}

function validarCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    return (strlen($cpf) == 11 && is_numeric($cpf));
}

function validarTelefone($telefone) {
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    return (strlen($telefone) >= 10 && strlen($telefone) <= 11 && is_numeric($telefone));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['txtnome'];
    $cpf = $_POST['txtCpf'];
    $telefone = $_POST['txttel'];

    $nomeValido = validarNome($nome);
    $cpfValido = validarCPF($cpf);
    $telefoneValido = validarTelefone($telefone);

    if ($nomeValido && $cpfValido && $telefoneValido) {
        $cliente = new \MODEL\Cliente();
        $cliente->setNome($nome);
        $cliente->setcpf($cpf);
        $cliente->settelefone($telefone);

        $bllClt = new \BLL\Cliente();
        $result = $bllClt->Insert($cliente);

        if ($result->errorCode() == '00000') {
            header("Location: lstCliente.php");
            exit();
        } else {
            echo "Erro ao inserir cliente: " . $result->errorInfo()[2];
        }
    } else {
        echo "<script>alert('Por favor, preencha todos os campos corretamente.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Método de requisição inválido.'); window.history.back();</script>";
}
?>
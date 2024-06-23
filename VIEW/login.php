<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\conexao.php';

$usuario = $_POST['usuario']; 
$senha = $_POST['senha'];

echo "Usuario: " . $usuario . "</br></br>"; 
echo "Senha: " . $senha . "  -  ".  md5($senha) . " <br/><br/>";

$sql = "Select * from usuario where usuario=?;";
$con = \DAL\Conexao::conectar(); 
$query = $con->prepare($sql);

try{
    $query->execute (array($usuario));
    $linha = $query->fetch(\PDO::FETCH_ASSOC);
}
catch (Exception $e) { echo "usuario inexistente"; }

\dal\Conexao::desconectar(); 
if (md5($senha) == $linha['senha']){
    session_start();
    $_SESSION['login'] = $usuario ;
    header("location:menu.php"); 
}
else header("location:index.html");
?>

<?php
    require_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\conexao.php';
    require_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php';

    $sql = "select * from cliente;";
    $con = Conexao::conectar();
    $dados = $con->query($sql);

    foreach($dados as $linha){
        $clt = new \MODEL\Cliente();
        $clt->setId($linha['id']);
        $clt->setNome($linha['nome']);
        $clt->setcpf($linha['cpf']);
        $clt->settelefone($linha['telefone']);
        $lstClt[]=$clt;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Cliente Model</title>
</head>
<body>
    <h1>Listar Cliente</h1>
    <table class="striped">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
        </tr>

        <?php foreach($lstClt as $clt) {?>
           <tr>
              <td> <?php echo $clt->getID(); ?> </td>
              <td> <?php echo $clt->getNome(); ?> </td>
              <td> <?php echo $clt->getCPF(); ?> </td>
              <td> <?php echo $clt->gettelefone();?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>
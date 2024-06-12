<?php
   // acesso a dados usando retorno (matriz de dados)
   //diretamente da tabela/banco de dados
    include 'conexao.php';
    $sql = "select * from cliente;";
    $con = Conexao::conectar(); 
    $lstClt = $con->query($sql); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>
<body>
    <h1>Listar Clientes</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
        </tr>

        <?php foreach($lstClt as $clt) {?>
           <tr>
              <td> <?php echo $clt['id']; ?> </td>
              <td> <?php echo $clt['nome']?> </td>
              <td> <?php echo $clt['cpf']?> </td>
              <td> <?php echo $clt['telefone']?> </td>
           </tr>
        <?php } ?>
    </table>
    
</body>
</html>
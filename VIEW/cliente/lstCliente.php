<?php
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cliente.php';
    use BLL\Cliente; 

    if (isset($_GET['busca']))
    $busca = $_GET['busca'];
    else $busca = null;

    $bllClt = new \BLL\Cliente();

    if ($busca == null)
    $lstClt = $bllClt->Select();
    else $lstClt = $bllClt->SelectNome($busca);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
</head>
<body>
    <?php include_once '../menu.php'; ?>

    <h1>Listar Clientes</h1>

    <div class="row">
            <div class="input-field">
                <form action="../Cliente/lstCliente.php" method="GET" id="frmBuscaCliente" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Cliente para ser selicionado" class="form-control col s10" id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light green col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>

    <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons" onclick="JavaScript:location.href='formClt.php'">add</i></a>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Operações</th>
        </tr>

        <?php foreach($lstClt as $clt) {?>
           <tr>
              <td> <?php echo $clt->getID(); ?> </td>
              <td> <?php echo $clt->getNome(); ?> </td>
              <td> <?php echo $clt->getCPF(); ?> </td>
              <td> <?php echo $clt->gettelefone();?> </td>
              <td>
              <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdtClt.php?id=' + '<?php echo $clt->getID();?>'">
              <i class="material-icons">edit</i></a>
             
              <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='formDetClt.php?id=' + '<?php echo $clt->getID();?>'">
              <i class="material-icons">search</i></a>

              <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript: remover( <?php echo $clt->getId(); ?> )">
              <i class="material-icons">delete</i></a>
              </td>
           </tr>
        <?php } ?>
    </table>
    <?php include_once '../footer.php'; ?>
</body>
</html>
<script>
    function remover(id) {
        if (confirm('Excluir o Cliente ' + id + '?')) {
            location.href = 'remClt.php?id=' + id;
        }
    }
</script>
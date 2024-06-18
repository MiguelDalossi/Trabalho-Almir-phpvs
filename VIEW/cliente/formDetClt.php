<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cliente.php';

$id = $_GET['id'];


$bllClt = new BLL\Cliente();
$cliente = $bllClt->SelectByID($id);
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
    <title>Detalhes Cliente</title>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container #80cbc4 teal lighten-3 black-text col s12">
        <div class="center green">
            <h1>Detalhes do Cliente</h1>
        </div>
        <div class="input-field col s8">
            <h5>ID: <?php echo $cliente->getID() ?></h5>
            </br> </br>
            <input type="hidden" name="txtID" value=<?php echo $id; ?>>
        </div>

        <div class="input-field col s8">
            <h5>Nome: <?php echo $cliente->getNome() ?></h5>
        </div>
        <div class="input-field col s8">
            <h5>CPF: <?php echo $cliente->getCPF() ?></h5>
        </div>
        <div class="input-field col s8">
            <h5>Telefone: <?php echo $cliente->gettelefone() ?></h5>
        </div>
        <div class="brown lighten-3 center col s12">
            <br>
            <button class="waves-effect waves-light btn green" type="button"
                onclick="JavaScript:location.href='formClt.php'">
                Novo<i class="material-icons">save</i>
            </button>
            <button class="waves-effect waves-light btn orange" type="button" onclick="JavaScript:location.href='formEdtClt.php?id=' + '<?php echo $cliente->getID();?>'">Editar <i class="material-icons">edit</i>
            </button>

            <button class="waves-effect waves-light btn red" type="button" onclick="JavaScript: remover( <?php echo $cliente->getId(); ?> )">Deletar <i class="material-icons">delete</i>
            </button>

            <button class="waves-effect waves-light btn blue" type="button"
                onclick="JavaScript:location.href='lstCliente.php'">
                Voltar <i class="material-icons">arrow_back</i>
            </button>
            <br>
            <br>
        </div>
    </div>


</body>

</html>
<script>
    function remover(id) {
        if (confirm('Excluir o Equipamento ' + id + '?')) {
            location.href = 'remClt.php?id=' + id;
        }
    }
</script>
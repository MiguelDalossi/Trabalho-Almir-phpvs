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
    <title>Editar Cliente</title>
</head>

<body>
    <div class="container #80cbc4 teal lighten-3 black-text col s12">
        <div class="center green">
            <h1>Editar Cliente</h1>
        </div>
        <div class="row">
            <form action="edtClt.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <label for="id" class="black-text bold">ID: <?php echo $cliente->getID() ?></label>
                    </br> </br>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>
            
                <div class="input-field col s8">
                    <input placeholder="informe o Nome" id="nome" name="txtnome" type="text" class="validate" value="<?php echo $cliente->getNome(); ?>">
                    <label id="nome" for="nome">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o CPF" id="cpf" name="txtCpf" type="number" class="validate" value="<?php echo $cliente->getCPF(); ?>">
                    <label id="cpf" for="cpf">CPF</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o Telefone" id="telenone" name="txttel" type="number" class="validate" value="<?php echo $cliente->gettelefone(); ?>">
                    <label id="telefone" for="telefone">Telefone</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit" onclick="JavaScript:location.href='lstCliente.php'">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button" onclick="JavaScript:location.href='lstCliente.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>

            </form>

        </div>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <title>Inserir Cargo</title>

   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container #80cbc4 teal lighten-3 black-text col s12">
        <div class="center green">
            <h1>Inserir Cargo</h1>
        </div>
        <div class="row  black-text">
            <form action="insCar.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe o Nome do Cargo" id="nome" name="txtNome" type="text"
                        class="validate">
                    <label id="nome" for="nome">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="informe a Descrição" id="descricao" name="txtDesc" type="text"
                        class="validate">
                    <label for="descricao">Descrição</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="informe o Salario" id="salario" name="txtSal" type="number"
                        class="validate">
                    <label for="descricao">salario</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe a Quantidade de funcionarios" id="qtdfunc" name="txtQtdfunc" type="number"
                        class="validate">
                    <label for="compra">Quantidade de funcionarios</label>
                </div>

                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
                        Gravar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstCargo.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </form>
        </div>
    </div>
</body>

</html
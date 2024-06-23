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
    <title>Inserir Clientes</title>

    <script>
        function validarFormulario() {
            var nome = document.getElementById('nome').value.trim();
            var cpf = document.getElementById('cpf').value.trim();
            var telefone = document.getElementById('telefone').value.trim();

            // Validar o nome
            if (nome.length < 2 || nome.length > 40 || !/^[a-zA-ZÀ-ÿ ]+$/.test(nome)) {
                alert('Nome inválido. Deve conter apenas letras, entre 2 e 40 caracteres.');
                return false;
            }

            // Validar o CPF
            if (cpf.length !== 11 || isNaN(cpf)) {
                alert('CPF inválido. Deve conter exatamente 11 dígitos numéricos.');
                return false;
            }

            // Validar o telefone
            if (telefone.length < 10 || telefone.length > 11 || isNaN(telefone)) {
                alert('Telefone inválido. Deve conter apenas números, entre 10 e 11 dígitos.');
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <?php include_once '../menu.php'; ?>
    <div class="container #80cbc4 teal lighten-3 black-text col s12">
        <div class="center green">
            <h1>Inserir Cliente</h1>
        </div>
        <div class="row">
            <form id="form-ins-clt" action="insClt.php" method="POST" class="col s12" onsubmit="return validarFormulario()">
                <div class="input-field col s8">
                    <input placeholder="informe o Nome" id="nome" name="txtnome" type="text" class="validate" required minlength="2" maxlength="40" pattern="[a-zA-ZÀ-ÿ ]+">
                    <label for="nome">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o CPF" id="cpf" name="txtCpf" type="number" class="validate" required minlength="11" maxlength="11" pattern="[0-9]+">
                    <label for="cpf">CPF</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o Telefone" id="telefone" name="txttel" type="number" class="validate" required minlength="10" maxlength="11" pattern="[0-9]+">
                    <label for="telefone">Telefone</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit">
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
    <?php include_once '../footer.php'; ?>
</body>

</html>
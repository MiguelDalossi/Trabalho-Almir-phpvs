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
        <div class="row black-text">
            <form action="insCar.php" method="POST" class="col s12" onsubmit="return validateForm()">
                <div class="input-field col s8">
                    <input placeholder="Informe o Nome do Cargo" id="nome" name="txtNome" type="text"
                        class="validate" required pattern="^[A-Za-z\s]{2,30}$" title="Nome deve ter entre 2 e 30 caracteres e conter apenas letras e espaços">
                    <label for="nome">Nome</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe a Descrição" id="descricao" name="txtDesc" type="text"
                        class="validate" required pattern="^[A-Za-z\s]{2,50}$" title="Descrição deve ter entre 2 e 50 caracteres e conter apenas letras e espaços">
                    <label for="descricao">Descrição</label>
                </div>

                <div class="input-field col s8">
                    <input placeholder="Informe o Salário" id="salario" name="txtSal" type="number"
                        class="validate" required min="1" max="9999999" title="Salário deve ser um número entre 1 e 9999999">
                    <label for="salario">Salário</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="Informe a Quantidade de Funcionários" id="qtdfunc" name="txtQtdfunc" type="number"
                        class="validate" required min="1" max="9999" title="Quantidade de funcionários deve ser um número entre 1 e 9999">
                    <label for="qtdfunc">Quantidade de Funcionários</label>
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

    <script>
        function validateForm() {
            const nome = document.getElementById('nome').value;
            const descricao = document.getElementById('descricao').value;
            const salario = document.getElementById('salario').value;
            const qtdfunc = document.getElementById('qtdfunc').value;

            const nomeRegex = /^[A-Za-z\s]{2,30}$/;
            const descricaoRegex = /^[A-Za-z\s]{2,50}$/;
            const salarioRegex = /^\d{1,7}$/;
            const qtdfuncRegex = /^\d{1,4}$/;

            if (!nomeRegex.test(nome)) {
                alert("Nome deve ter entre 2 e 30 caracteres e conter apenas letras e espaços");
                return false;
            }

            if (!descricaoRegex.test(descricao)) {
                alert("Descrição deve ter entre 2 e 50 caracteres e conter apenas letras e espaços");
                return false;
            }

            if (!salarioRegex.test(salario)) {
                alert("Salário deve ser um número entre 1 e 9999999");
                return false;
            }

            if (!qtdfuncRegex.test(qtdfunc)) {
                alert("Quantidade de funcionários deve ser um número entre 1 e 9999");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
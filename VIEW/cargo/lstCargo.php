<?php
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\BLL\Cargo.php';
    use BLL\Cargo; 

    if (isset($_GET['busca']))
    $busca = $_GET['busca'];
    else $busca = null;

    $bllCar = new \BLL\Cargo();

    if ($busca == null)
    $lstCar = $bllCar->Select();
    else $lstCar = $bllCar->SelectNome($busca);

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
    <title>Listar Cargos</title>
</head>
<body>
    <?php include_once '../menu.php'; ?>

    <h1>Listar Cargos</h1>

    <div class="row">
            <div class="input-field">
                <form action="../Cliente/lstCargo.php" method="GET" id="frmBuscaCargo" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Cargo para ser selicionado" class="form-control col s10" id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light green col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>

    <a class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons" onclick="JavaScript:location.href='formCar.php'">add</i></a>

    <table class="highlight">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Salario</th>
            <th>Quantidade de Funcionarios</th>
            <th>Operações</th>
        </tr>
        <?php foreach($lstCar as $car) {?>
           <tr>
              <td> <?php echo $car->getID(); ?> </td>
              <td> <?php echo $car->getNome(); ?> </td>
              <td> <?php echo $car->getDesc(); ?> </td>
              <td> <?php echo $car->getSal();?> </td>
              <td> <?php echo $car->getQtdfunc();?> </td>
              <td>
              <a class="btn-floating btn-small waves-effect waves-light orange" onclick="JavaScript:location.href='formEdtCar.php?id=' + '<?php echo $car->getID();?>'">
              <i class="material-icons">edit</i></a>
             
              <a class="btn-floating btn-small waves-effect waves-light blue" onclick="JavaScript:location.href='formDetCar.php?id=' + '<?php echo $car->getID();?>'">
              <i class="material-icons">search</i></a>

              <a class="btn-floating btn-small waves-effect waves-light red" onclick="JavaScript: remover( <?php echo $car->getId(); ?> )">
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
            location.href = 'remCar.php?id=' + id;
        }
    }
</script>
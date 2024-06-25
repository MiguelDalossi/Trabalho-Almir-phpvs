<?php
    namespace DAL;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cargo.php';

    class Cargo{
        public function Select(){
            $sql = "Select * from cargo;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            Conexao::desconectar();

            foreach ($registros as $linha){
                $car = new \MODEL\Cargo(); 
                $car->setId($linha['id']); 
                $car->setNome($linha['nome']);
                $car->setDesc($linha['descricao']);
                $car->setSal($linha['salario']);
                $car->setQtdfunc($linha['qtdfuncionarios']);
                $lstCar[] = $car; 
            }
            
            return $lstCar;
        }

    public function SelectByID(int $id){
        $sql = "Select * from cargo where id=?;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $car = new \MODEL\Cargo();
            $car->setId($linha['id']); 
            $car->setNome($linha['nome']);
            $car->setDesc($linha['descricao']);
            $car->setSal($linha['salario']);
            $car->setQtdfunc($linha['qtdfuncionarios']);
        return $car;

    }

    public function Insert(\MODEL\Cargo $cargo){
        $sql = "INSERT INTO cargo (nome, descricao, salario, qtdfuncionarios) VALUES ('{$cargo->getNome()}','{$cargo->getDesc()}', '{$cargo->getSal()}', '{$cargo->getQtdfunc()}');";
        
        $con = Conexao::conectar();
        $result = $con->query($sql);
        Conexao::desconectar();

        return $result; 
    }

    public function Update(\MODEL\Cargo $cargo){
        $sql = "UPDATE cargo SET nome = ?, descricao = ?, salario = ?, qtdfuncionarios = ? WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($cargo->getNome(), $cargo->getDesc(), $cargo->getSal(), $cargo->getQtdfunc(), $cargo->getID()));
        Conexao::desconectar();

        return $result; 

    }

    public function Delete(int $id){
        $sql = "delete from cargo WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        Conexao::desconectar();

        return $result; 

    }

    public function SelectNome(string $nome){

        $sql = "select * from cargo WHERE nome like  '%" . $nome .  "%' order by nome;";

        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql); 
                  
        $lstCar = null; 
        foreach($result as $linha){
                      
          $cargo = new \MODEL\Cargo();
  
          $cargo->setId($linha['id']);

          $cargo->setNome($linha['nome']);

          $cargo->setDesc($linha['descricao']); 

          $cargo->setSal($linha['salario']); 
     
          $cargo->setQtdfunc($linha['qtdfuncionario']); 
  
          $lstCar[] = $cargo; 

        }
        return  $lstCar;

      }

    }


?>
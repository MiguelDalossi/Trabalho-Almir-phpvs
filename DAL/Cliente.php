<?php 
    namespace DAL;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php';

    class Cliente{
        public function Select(){
            $sql = "Select * from cliente;";
            $con = Conexao::conectar();
            $registros = $con->query($sql);
            Conexao::desconectar();

            foreach ($registros as $linha){
                $clt = new \MODEL\Cliente(); 
                $clt->setId($linha['id']); 
                $clt->setNome($linha['nome']);
                $clt->setcpf($linha['cpf']);
                $clt->settelefone($linha['telefone']);
                $lstClt[] = $clt; 
            }
            
            return $lstClt;
             

        }

        public function SelectByID(int $id){
        $sql = "Select * from cliente where id=?;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute (array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar(); 

        $clt = new \MODEL\Cliente();
        $clt->setId($linha['id']);
        $clt->setNome($linha['nome']);
        $clt->setcpf($linha['cpf']);
        $clt->settelefone($linha['telefone']);
   
        return $clt;

    }

    public function Insert(\MODEL\Cliente $cliente){
        $sql = "INSERT INTO cliente (nome, cpf, telefone) VALUES ('{$cliente->getnome()}','{$cliente->getcpf()}', '{$cliente->gettelefone()}');";
        
        $con = Conexao::conectar();
        $result = $con->query($sql);
        Conexao::desconectar();

        return $result; 
    }

    public function Update(\MODEL\Cliente $cliente){
        $sql = "UPDATE cliente SET nome = ?, cpf = ?, telefone = ? WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($cliente->getNome(), $cliente->getCPF(), $cliente->gettelefone(), $cliente->getID()));
        Conexao::desconectar();

        return $result; 

    }

    public function Delete(int $id){
        $sql = "delete from cliente WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        Conexao::desconectar();

        return $result; 

    }

    public function SelectNome(string $nome){

        $sql = "select * from cliente WHERE nome like  '%" . $nome .  "%' order by nome;";
     //   $sql = "select * from operador WHERE nome like  '%?%' order by nome;";

        $pdo = Conexao::conectar(); 
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql); 
                  
        // echo count ($result);
        $lstClt = null; 
        foreach($result as $linha){
                      
          $cliente = new \MODEL\Cliente();
  
          $cliente->setId($linha['id']);
          $cliente->setNome($linha['nome']);

          $cliente->setcpf($linha['cpf']); 
     
          $cliente->settelefone($linha['telefone']); 
  
          $lstClt[] = $cliente; 

        }
        return  $lstClt;

      }

    }
?>
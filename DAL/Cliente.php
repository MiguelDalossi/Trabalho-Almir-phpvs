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
        $clt->setNome($linha['Nome']);
        $clt->setcpf($linha['Cpf']);
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

        public function SelectId(int $id){}
        public function SelectNome(string $nome){}
        public function SelectCpf(int $cpf){}
        public function Selecttelefone(int $telefone){}
    }


?>
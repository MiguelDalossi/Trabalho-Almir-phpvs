<?php 
    namespace DAL;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\conexao.php';
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\MODEL\Cliente.php';

    class Cliente{
        public function Select(){
            $sql = "Select * from cliente;"; 
            $con = \DAL\Conexao::conectar(); 
            $registros = $con->query($sql);
            $con = \DAL\Conexao::desconectar(); 
   
   
            foreach ($registros as $linha){
                $dpto = new \MODEL\Cliente(); 
                $dpto->setId($linha['id']); 
                $dpto->setNome($linha['nome']);
                $clt->setcpf($linha['cpf']);
                $clt->settelefone($linha['telefone']);
                $lstClt[] = $clt; 
            }
            
            return $lstClt;
             

        }
        public function SelectId(int $id){}
        public function SelectNome(string $nome){}
        public function SelectCpf(int $cpf){}
        public function Selecttelefone(int $telefone){}
    }


?>
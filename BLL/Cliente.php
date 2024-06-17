<?php
    namespace BLL;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\Cliente.php';
    use DAL;

    class Cliente{
        public function Select(){
            $dalClt = new \DAL\Cliente();
            return $dalClt->Select();
        }

        public function SelectByID(int $id)
    {   
        $dalClt = new \DAL\Cliente();   
        return $dalClt->SelectByID($id);
    }

    public function Insert(\MODEL\Cliente $cliente) {
        $dalClt = new \DAL\Cliente();
        
        return $dalClt->Insert($cliente);
    }

    public function Update(\MODEL\Cliente $cliente) {
        $dalClt = new \DAL\Cliente();
        
        return $dalClt->Update($cliente);
    }

    public function Delete(int $id) {
        $dalClt = new \DAL\Cliente();
        
        return $dalClt->Delete($id);
    }

    }
?>
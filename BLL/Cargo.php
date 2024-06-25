<?php 
    namespace BLL;
    include_once 'C:\xampp\htdocs\Trabalho-Almir-phpvs\DAL\Cargo.php';
    use DAL;

    class Cargo{
        public function Select(){
            $dalCar = new \DAL\Cargo();
            return $dalCar->Select();
        }

        public function SelectByID(int $id){   
            $dalCar = new \DAL\Cargo();   
            return $dalCar->SelectByID($id);
        }

        public function Insert(\MODEL\Cargo $cargo) {
            $dalCar = new \DAL\Cargo();
            
            return $dalCar->Insert($cargo);
        }

        public function Update(\MODEL\Cargo $cargo) {
            $dalCar = new \DAL\Cargo();
            
            return $dalCar->Update($cargo);
        }

        public function Delete(int $id) {
            $dalCar = new \DAL\Cargo();
            
            return $dalCar->Delete($id);
        }

        public function SelectNome(string $nome){
            $dalCar = new \DAL\Cargo(); 
            return $dalCar->SelectNome($nome);
        }
    }

?>
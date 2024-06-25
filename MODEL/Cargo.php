<?php
    namespace MODEL;

    class Cargo{
        private ?int $id;
        private ?string $nome;
        private ?string $descricao;
        private ?float $salario;
        private ?int $qtdfuncionarios;

        public function __construct()
        {}

        public function getID()
        {
        return $this->id;
        }
        public function getNome()
        {
        return $this->nome;
        }
        public function getDesc()
        {
        return $this->descricao;
        }
        public function getSal()
        {
        return $this->salario;
        }
        public function getQtdfunc()
        {
        return $this->qtdfuncionarios;
        }

        public function setId(int $id)
        {
        $this->id = $id;
        }
        public function setNome(string $nome)
        {
        $this->nome = $nome;
        }
        public function setDesc(string $descricao)
        {
        $this->descricao = $descricao;
        }
        public function setSal(float $salario)
        {
        $this->salario = $salario;
        }
        public function setQtdfunc(int $qtdfuncionarios)
        {
        $this->qtdfuncionarios = $qtdfuncionarios;
        }
    } 


?>
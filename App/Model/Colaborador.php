<?php namespace App\Model;
Class Colaborador {
    private $id, $nome, $sobrenome, $idade, $telefone, $celular, $carga_horaria, $cargo, $dependentes;
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    public function getCelular() {
        return $this->celular;
    }
    public function setCelular($celular) {
        $this->celular = $celular;
    }
    public function getCargaHoraria() {
        return $this->carga_horaria;
    }
    public function setCargaHoraria($carga_horaria) {
        $this->carga_horaria = $carga_horaria;
    }
    public function getCargo() {
        return $this->cargo;
    }
    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
    public function getDependentes() {
        return $this->dependentes;
    }
    public function setDependentes($dependentes) {
        $this->dependentes = $dependentes;
    }
}
/* Neste script de código, basicamente representamos a tabela desejada. Colocamos os atributos da classe em private e definimos os setters/getters para os mesmos. */
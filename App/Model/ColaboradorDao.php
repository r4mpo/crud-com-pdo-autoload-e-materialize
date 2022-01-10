<?php namespace App\Model;
Class ColaboradorDao {
    public function create(Colaborador $c){
        $sql = 'INSERT INTO colaboradores (nome, sobrenome, idade, telefone, celular, carga_horaria, cargo, dependentes) VALUES (?,?,?,?,?,?,?,?)';
        $inserir = Conexao::getConn()->prepare($sql);
        $inserir->bindValue(1, $c->getNome());
        $inserir->bindValue(2, $c->getSobrenome());
        $inserir->bindValue(3, $c->getIdade());
        $inserir->bindValue(4, $c->getTelefone());
        $inserir->bindValue(5, $c->getCelular());
        $inserir->bindValue(6, $c->getCargaHoraria());
        $inserir->bindValue(7, $c->getCargo());
        $inserir->bindValue(8, $c->getDependentes());
        $inserir->execute();
    }
    public function read(){
        $sql = 'SELECT * FROM colaboradores';
        $read = Conexao::GetConn()->prepare($sql);
        $read->execute();
        if($read->rowCount() > 0):
            $resultado = $read->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        else:
            return[];
        endif;
    }
    public function update(Colaborador $c){
        $sql = 'UPDATE colaboradores SET nome = ?, sobrenome = ?, idade = ?, telefone = ?, celular = ?, carga_horaria = ?, cargo = ?, dependentes = ? WHERE id = ?';
        $update = Conexao::getConn()->prepare($sql);
        $update->bindValue(1, $c->getNome());
        $update->bindValue(2, $c->getSobrenome());
        $update->bindValue(3, $c->getIdade());
        $update->bindValue(4, $c->getTelefone());
        $update->bindValue(5, $c->getCelular());
        $update->bindValue(6, $c->getCargaHoraria());
        $update->bindValue(7, $c->getCargo());
        $update->bindValue(8, $c->getDependentes());
        $update->bindValue(9, $c->getId());
        $update->execute();
    }
    public function delete($id){
        $sql = 'DELETE FROM colaboradores WHERE id = ?';
        $deletar = Conexao::getConn()->prepare($sql);
        $deletar->bindValue(1, $id);
        $deletar->execute();
    }
    public function readColaborador($id){ /* Esta função foi criada unicamente para exibir os dados dentro do formulário de edição. */
        $dados = array();
        $sql = 'SELECT * FROM colaboradores WHERE id = ?';
        $readColaborador = Conexao::GetConn()->prepare($sql);
        $readColaborador->bindValue(1, $id);
        $readColaborador->execute();
        $dados = $readColaborador->fetch(\PDO::FETCH_ASSOC);
        return $dados;
    }
}
/* Todas as funções do CRUD (create, read, update e delete). Manipulação completa do banco de dados. */
<?php require_once 'includes/header.php';?>
<title>Adicionar</title>
<body>
    <?php 
    if(isset($_POST['btn-cadastrar'])){
        $nome_ = addslashes($_POST['nome']);
        $sobrenome_ = addslashes($_POST['sobrenome']);
        $idade_ = addslashes($_POST['idade']);
        $telefone_ = addslashes($_POST['telefone']);
        $celular_ = addslashes($_POST['celular']);
        $carga_horaria_ = addslashes($_POST['carga_horaria']);
        $cargo_ = addslashes($_POST['cargo']);
        $dependentes_ = addslashes($_POST['dependentes']);
        
        if(!empty($nome_) OR !empty($sobrenome_) OR !empty($idade_) OR !empty($telefone_) OR !empty($celular_) OR !empty($carga_horaria_) OR !empty($cargo_) OR !empty($dependentes_)){
        $colaborador->setNome($nome_);
        $colaborador->setSobrenome($sobrenome_);
        $colaborador->setIdade($idade_);
        $colaborador->setTelefone($telefone_);
        $colaborador->setCelular($celular_);
        $colaborador->setCargaHoraria($carga_horaria_);
        $colaborador->setCargo($cargo_);
        $colaborador->setDependentes($dependentes_);
        $colaboradorDao->create($colaborador);
        header('Location: index.php');
        }else{
            echo "<script>alert('Todos os campos precisam ser preenchidos!')</script>";
        }
    }?>
    <form action="" method="post" style="margin-top: 4%; margin-left: 10%; margin-right: 50%;">
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="nome" name="nome" type="text" class="validate">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="sobrenome" name="sobrenome" type="text" class="validate">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">info</i>
            <input id="idade" name="idade" type="number" class="validate">
            <label for="idade">Idade</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="telefone" name="telefone" type="number" class="validate">
            <label for="telefone">Telefone</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">stay_current_portrait</i>
            <input id="celular" name="celular" type="number" class="validate">
            <label for="celular">Celular</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">timer</i>
            <input id="carga_horaria" name="carga_horaria" type="number" class="validate">
            <label for="carga_horaria">Carga Horária</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">recent_actors</i>
            <input id="cargo" name="cargo" type="text" class="validate">
            <label for="cargo">Cargo</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">child_friendly</i>
            <input id="dependentes" name="dependentes" type="number" class="validate">
            <label for="dependentes">Dependentes</label>
        </div>
        <a class="waves-effect black btn" href="index.php"><i class="material-icons right">arrow_back</i>Retornar</a>
        <input type="submit" name="btn-cadastrar" id="btn-cadastrar" value="Cadastrar" class="waves-effect green btn">
    </form>
</body>
</html>
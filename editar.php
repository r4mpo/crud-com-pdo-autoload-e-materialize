<?php require_once 'includes/header.php';?>
<title>Editar</title>
<body>
    <?php if(isset($_GET['id'])):
        $id = $_GET['id'];
        $dados = $colaboradorDao->readColaborador($id);
    endif;
    if(isset($_POST['btn-editar'])):
        $erros = array();
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT) or (!$telefone = filter_input(INPUT_POST, 'telefone', FILTER_VALIDATE_INT) or (!$celular = filter_input(INPUT_POST, 'celular', FILTER_VALIDATE_INT) or (!$carga_horaria = filter_input(INPUT_POST, 'carga_horaria', FILTER_VALIDATE_INT) or (!$dependentes = filter_input(INPUT_POST, 'dependentes', FILTER_VALIDATE_INT)))))):
            $erros[] = "Os campos de idade, telefone, celular, carga horária e dependentes precisam ser preenchidos com caracteres numéricos!";
        endif;
        if(empty($_POST['nome']) or empty($_POST['sobrenome']) or empty($_POST['idade']) or empty($_POST['telefone']) or empty($_POST['celular']) or empty($_POST['carga_horaria']) or empty($_POST['cargo']) or empty($_POST['dependentes'])):
            $erros[] = "Todos os campos devem ser preenchidos!";
        endif;
        if(!empty($erros)):
            foreach ($erros as $erro):
                echo "<script>alert('".$erro."')</script>";
            endforeach;
        else:
        $colaborador->setId($id);
        $colaborador->setNome($_POST['nome']);
        $colaborador->setSobrenome($_POST['sobrenome']);
        $colaborador->setIdade($_POST['idade']);
        $colaborador->setTelefone($_POST['telefone']);
        $colaborador->setCelular($_POST['celular']);
        $colaborador->setCargaHoraria($_POST['carga_horaria']);
        $colaborador->setCargo($_POST['cargo']);
        $colaborador->setDependentes($_POST['dependentes']);
        $colaboradorDao->update($colaborador);
        header('Location: index.php');
        endif;
    endif;?>
    <form action="" method="post" style="margin-top: 4%; margin-left: 10%; margin-right: 50%;">
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="nome" name="nome" type="text" value="<?php echo $dados['nome'];?>" class="validate">
            <label for="nome">Nome</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">account_circle</i>
            <input id="sobrenome" name="sobrenome" type="text" value="<?php echo $dados['sobrenome'];?>" class="validate">
            <label for="sobrenome">Sobrenome</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">info</i>
            <input id="idade" type="text" name="idade" value="<?php echo $dados['idade'];?>" class="validate">
            <label for="idade">Idade</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">phone</i>
            <input id="telefone" name="telefone" type="text" value="<?php echo $dados['telefone'];?>" class="validate">
            <label for="telefone">Telefone</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">stay_current_portrait</i>
            <input id="celular" name="celular" type="text" value="<?php echo $dados['celular'];?>" class="validate">
            <label for="celular">Celular</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">timer</i>
            <input id="carga_horaria" name="carga_horaria" type="text" value="<?php echo $dados['carga_horaria'];?>" class="validate">
            <label for="carga_horaria">Carga Horária</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">recent_actors</i>
            <input id="cargo" type="text" name="cargo" value="<?php echo $dados['cargo'];?>" class="validate">
            <label for="cargo">Cargo</label>
        </div>
        <div class="input-field col s6">
            <i class="material-icons prefix">child_friendly</i>
            <input id="dependentes" name="dependentes" type="text" value="<?php echo $dados['dependentes'];?>" class="validate">
            <label for="dependentes">Dependentes</label>
        </div>
        <a class="waves-effect black btn" href="index.php"><i class="material-icons right">arrow_back</i>Retornar</a>
        <input type="submit" name="btn-editar" id="btn-editar" value="Editar" class="waves-effect green btn">
    </form>
</body>
</html>
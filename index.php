<?php require_once 'includes/header.php';?>
<title>Index</title>
<link href="_css/style.css" rel="stylesheet">
   	<table class="table">
    <thead>
    <tr>
        <th><i class="tiny material-icons">copyright</i><br>ID</th>
		<th><i class="tiny material-icons">person</i><br>Nome</th>
     	<th><i class="tiny material-icons">person</i><br>Sobrenome</th>
		<th><i class="tiny material-icons">info</i><br>Idade</th>
     	<th><i class="tiny material-icons">phone</i><br>Telefone</th>
     	<th><i class="tiny material-icons">stay_current_portrait</i><br>Celular</th>
     	<th><i class="tiny material-icons">timer</i><br>Carga Horária</th>
     	<th><i class="tiny material-icons">recent_actors</i><br>Cargo</th>
     	<th><i class="tiny material-icons">child_friendly</i><br>Dependentes</th>
		<th><i class="tiny material-icons">mode_edit</i><br></th>
		<th><i class="tiny material-icons">delete</i><br></th>
	</tr>
    </thead>
     	<tbody>
		 	<?php $colaboradorDao->read(); 
			foreach($colaboradorDao->read() as $colaborador):?>
     	  	<tr>
                <td><?php echo $colaborador['id'];?></td>
				<td><?php echo $colaborador['nome'];?></td>
				<td><?php echo $colaborador['sobrenome'];?></td>
				<td><?php echo $colaborador['idade'];?></td>
				<td><?php echo $colaborador['telefone'];?></td>
				<td><?php echo $colaborador['celular'];?></td>
				<td><?php echo $colaborador['carga_horaria'];?></td>
				<td><?php echo $colaborador['cargo'];?></td>
				<td><?php echo $colaborador['dependentes'];?></td>
				<td><a class="waves-effect light-blue btn-small" href="editar.php?id=<?php echo $colaborador['id']?>">Editar</a></td>
				<td><a class="waves-effect red btn-small" href="index.php?id=<?php echo $colaborador['id']?>">Excluir</a></td>
			</tr>
			<?php endforeach;?>
     	</tbody>
   	</table>
	<a class="waves-effect green btn" href="adicionar.php" style="margin-top: 1%;"><i class="material-icons right">add</i>Adicionar</a>
	<?php if(isset($_GET['id'])):
	$id = $_GET['id'];
	$colaboradorDao->delete($id);
	header("location: index.php");
	endif;?>
</body>
</html>
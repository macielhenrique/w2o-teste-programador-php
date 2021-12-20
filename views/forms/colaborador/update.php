<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/Colaborador.php" method="POST">
	<div class="row">
		<div class="col-md-8">
		<label> Nome Completo </label><br>
			<input type="text" value="<?=$emp['colab_nome'];?>" name="colab_nome" placeholder="Digite seu nome" required class="form-control">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> Telefone: </label><br>
			<input type="text" value="<?=$emp['colab_telefone'];?>" name="colab_telefone"  placeholder="Digite telefone" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" value="<?=$emp['colab_email'];?>" name="colab_email"  placeholder="Digite o email" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Senha: </label><br>
			<input type="password" name="colab_senha" placeholder="Digite a nova senha" required class="form-control">
			<br><br>
		</div>
		<div class="col-md-4"></div>

		<div class="col-md-2">
			<label> data de nascimento: </label><br>
			<input type="date" value="<?=$emp['data_nasc'];?>" name="data_nasc"   required class="form-control">
			<br><br>
		</div>

		

		

		
		
	


		<input type="hidden" name="id_colaborador" value="<?=$emp['id_colaborador'];?>">
		<input type="hidden" name="action" value="update">
		<hr>			
		<div class="col-md-12">
			<p class="text-right">
			<button class="btn btn-primary"> 
				<i class="fa fa-thumbs-up"></i>
				 Finalizar Cadastro 
			</button>
			</p>
		</div>	
	</div>
	</form>

	
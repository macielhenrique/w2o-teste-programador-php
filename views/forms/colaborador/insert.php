<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/Colaborador.php" method="POST">
	<div class="row">
		<div class="col-md-8">
		<label> Nome Completo </label><br>
			<input type="text" name="colab_nome" placeholder="Digite seu nome" required class="form-control">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> Telefone: </label><br>
			<input type="text" name="colab_telefone" id=""  placeholder="Telefone" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" name="colab_email" id="" placeholder="Digite o email" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Senha: </label><br>
			<input type="password" name="colab_senha" placeholder="Digite a senha" required class="form-control">
			<br><br>
		</div>
		<div class="col-md-4"></div>

		<div class="col-md-2">
			<label> data de nascimento </label><br>
			<input type="date" name="data_nasc" id="cep" placeholder="Digite o CEP" required class="form-control">
			<br><br>
		</div>

		

		
		
		
		

		


		<input type="hidden" name="action" value="add">
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

	
<!-- Criação do Formulário -->
<form action="<?=$GLOBALS['project_index'];?>/controllers/Empresa.php" method="POST">
	<div class="row">
		<div class="col-md-8">
		<label> Razão Social </label><br>
			<input type="text" value="<?=$emp['empresa_razao'];?>" name="empresa_razao" placeholder="Digite seu nome" required class="form-control">
			<br><br>
		</div>				

		<div class="col-md-4">
			<label> CNPJ: </label><br>
			<input type="text" value="<?=$emp['empresa_cnpj'];?>" name="empresa_cnpj" id="cnpj" onblur="validarCNPJ(this)" placeholder="Digite o CNPJ" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Email: </label><br>
			<input type="email" value="<?=$emp['empresa_email'];?>" name="empresa_email" id="" placeholder="Digite o email" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Telefone: </label><br>
			<input type="text" value="<?=$emp['empresa_telefone'];?>" name="empresa_telefone" placeholder="Digite o telefone" required class="form-control">
			<br><br>
		</div>
		<div class="col-md-4"></div>

		<div class="col-md-2">
			<label> CEP: </label><br>
			<input type="text" value="<?=$emp['empresa_cep'];?>" name="empresa_cep" id="cep" placeholder="Digite o CEP" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Endereço: </label><br>
			<input type="text" value="<?=$emp['empresa_endereco'];?>" name="empresa_endereco" id="rua" placeholder="DIGITE O CEP" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-2">
			<label> Número: </label><br>
			<input type="text" value="<?=$emp['empresa_numero'];?>" name="empresa_numero" placeholder="Nº" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Bairro: </label><br>
			<input type="text" value="<?=$emp['empresa_bairro'];?>" name="empresa_bairro" id="bairro" placeholder="DIGITE O CEP para busca" required class="form-control">
			<br><br>
		</div>
		
		<div class="col-md-4">
			<label> Estado: </label><br>
			<input type="text" value="<?=$emp['empresa_estado'];?>" name="empresa_estado" id="uf" placeholder="DIGITE O CEP para busca" required class="form-control">
			<br><br>
		</div>

		<div class="col-md-4">
			<label> Cidade/Municipio: </label><br>
			<input type="text" value="<?=$emp['empresa_cidade'];?>" name="empresa_cidade" id="cidade" placeholder="DIGITE O CEP para busca" required class="form-control">
			<br><br>
		</div>


		<input type="hidden" name="id_empresa" value="<?=$emp['id_empresa'];?>">
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

	
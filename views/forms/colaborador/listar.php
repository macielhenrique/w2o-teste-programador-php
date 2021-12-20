<div class="row">
		
		<div class="col-md-12">
			<h3> LIsta de Colaboradores </h3><br> 
			<a href="?option=add_colaborador" class="btn btn-primary btn-xs"> <i class="fa fa-plus-square"></i> Adicionar Colaborador </a>
		</div>
		
		<hr>

		<div class="col-md-12">
			
			<script type="text/javascript">
				$(document).ready(function(){
					$('[data-toggle="tooltip"]').tooltip();
				});

				//função para guardar o id no filtro
				function delete_reg(filter){
					$('#value').val(filter);
				}
			</script>


			<!-- modal para excluir -->
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Excluir????</h5>
			        
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <h4>Esta operação não pode ser desfeita. Tem Certeza?</h4>
			        <form action="<?=$GLOBALS['project_index'];?>/controllers/Colaborador.php" method="POST">
			      			<input type="hidden" name="filter" id="value">
			      			<input type="hidden" name="action" id="delete">
			      			<button type="" class="btn btn-danger">
			      				<span class="glyphicon glyphicon-ok-sign"></span>
			      				Sim, Excluir.	
			      			</button>

			      			<button type="button" class="btn btn-default" data-dismiss="modal" aria-lavel="Close">
			      				<span class="glyphicon glyphicon-remove-sign"></span>
			      				Não, Cancelar.
			      			</button>

			      	</form>
			      </div>      
			    </div>
			  </div>
			</div>



			<table class="table table-bordered table-striped" id="tableGeral">
				<thead>
				<tr>
					<th>Código</th>
					<th>Nome Colaborador</th>
					<th>telefone</th>
					<th>Email</th>
					<th>Ações</th>
				</tr>
				</thead>

				<tbody>
					<?php foreach($colaboladores as $c): ?>
						<tr>
							<td><?=$c['id_colaborador'];?></td>
							<td><?=$c['colab_nome'];?></td>
							<td><?=$c['colab_email'];?></td>
							<td>
								<?=$c['colab_telefone'];?>
								<a href="https://api.whatsapp.com/send?phone=<?=$c['colab_telefone'];?>&text=Olá. Desejo bater um papo" target="_BLANK" class="btn btn-xs btn-success">
									<i class="fa fa-whatsapp"></i>
								</a>
							</td>
							
							<td>
								<a href="?option=update_colaborador&id=<?=$c['id_colaborador'];?>" class="btn btn-xs btn-warning"> <i class="fa fa-pencil"></i></a>	

								<a href="#myModal" class="btn btn-danger btn-xs" data-toggle="modal" id="tooltip" title="Excluir" onclick="delete_reg(<?=$c['id_colaborador'];?>);"><span class="fa fa-trash"></span></a>			


							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				
			</table>
		</div>	
	</div>

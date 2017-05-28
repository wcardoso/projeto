  <!--Página Acesso Normal-->

<?php $__env->startSection('content'); ?>

	<div class="container">
	<div class="row section">
		<h3 align="left">Contato</h3>
		<div class="divider"></div>
	</div>
	<div class="row section">
		<div class="col s12 m6">
			
		</div>
	</div><!--Fim Row-->
	<div class="col s12 m5">
	<form class="col s12">
		<div class="input-field">
			<input type="text" name="nome" class="validate">
			<label>Nome</label>		
		</div>
		<div  class="input-field">
		<input type="email" name="email" class="validate">
			<label>E-mail</label>
			
		</div>
		<div class="input-field">
		<textarea class="materialize-textarea"></textarea>
		<label>Mensagem</label>
		</div>
		
			 <button class="btn waves-effect waves-light " type="submit" name="action">Enviar
    		<i class="material-icons right">send</i>
 		 </button>
 		
		
		

		
	</form>
		
	</div>

	</div> <!--Fim Container-->

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
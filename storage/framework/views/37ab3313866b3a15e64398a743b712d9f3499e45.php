  <!--Página Acesso Normal-->

<?php $__env->startSection('content'); ?>

	<div class="container">
		<div class="row section">
			<h3 align="center">Contato</h3>
				<div class="divider">
					
				</div>
		</div>


	<div class="row section">		
	<div class="col s12 m5 right">
	<form class="col s12">
		<div class="input-field">
			<i class="material-icons prefix">account_circle</i>
			<input type="text" name="nome" class="validate">
			<label>Nome</label>		
		</div>
		<div  class="input-field">
		<i class="material-icons prefix">email</i>
		<input type="email" name="email" class="validate">
			<label>E-mail</label>
			
		</div>
		<div class="input-field">
		<i class="material-icons prefix">textsmss</i>
		<textarea class="materialize-textarea"></textarea>
		
		<label>Mensagem</label>
		</div>
		
		<button class="btn waves-effect waves-light " type="submit" name="action">Enviar
    		<i class="material-icons right ">send</i>
 		 </button>		
	</form>
	

	</div> <!--Fim Container-->
	

	<div class="col s12 m7 left">
	<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d12894.580228371278!2d-47.82273302633751!3d-15.795869267151144!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5cbd10b8335993c5!2sPal%C3%A1cio+da+Alvorada!5e1!3m2!1spt-BR!2sbr!4v1496087963495" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	</div>

	</div>
	



          

	<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
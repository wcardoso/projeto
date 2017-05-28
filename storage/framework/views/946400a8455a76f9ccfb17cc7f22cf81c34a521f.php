  <!--Página Login admin-->


<?php $__env->startSection('content'); ?>
<div class="container">
	<h2>Acessar</h2>
	
	<!--Acessar metodo da rota-->
	<form action="<?php echo e(route('admin.login')); ?>" method="post">
			<!--Token Laravel, metodo de validação-->
			<?php echo e(csrf_field()); ?>

			<?php echo $__env->make('admin.login._formu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<button class="btn blue ">Entrar</button>
	
	
	</form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
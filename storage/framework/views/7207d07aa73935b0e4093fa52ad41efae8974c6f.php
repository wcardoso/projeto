<!--Página Login admin-->


<?php $__env->startSection('content'); ?>
<div class="container">
	<h3><a href="<?php echo e(route('admin.usuarios')); ?> ">Usuários</a></h2>
	<h3><a href="<?php echo e(route('admin.modelo')); ?>">Tipos Maquiagem</a></h3>    

	
	
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
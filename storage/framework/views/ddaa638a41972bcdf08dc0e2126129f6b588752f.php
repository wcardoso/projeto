<?php $__env->startSection('content'); ?>
<div class="container">
	
	<h2 class="center">Adcionar Usuário</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper " >
      <div class="col s12">
        <a href="<?php echo e(route('admin.inicio')); ?>" class="breadcrumb">Inicio</a>
       <a href="<?php echo e(route('admin.usuarios')); ?>" class="breadcrumb">Usuários</a>
       <a class="breadcrumb">Novo Usuário</a>
        
      </div>
    </div>
  </nav>
  </div>
  <div class="row">
  	<form action="<?php echo e(route('admin.usuarios.save')); ?>" method="post">
  	<?php echo e(csrf_field()); ?>

  	<?php echo $__env->make('admin.usuarios._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  	<button class="btn blue ">Adicionar</button>
  	</form>
  </div>
  </div>
  	



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
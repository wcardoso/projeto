<?php $__env->startSection('content'); ?>

<div class="container">
	
	<h2 class="center">Usuários</h2>	

	<div class="row">
	 <nav>
    <div class="nav-wrapper green-text" >
      <div class="col s12">
        <a href="<?php echo e(route('admin.inicio')); ?>" class="breadcrumb">Inicio</a>
        <a href="#!" class="breadcrumb">Usuários</a>
        
      </div>
    </div>
  </nav>
  </div>
	
	<div class="row">
	<table>
		<thead>
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Cidade</th>
			<th>Telefone</th>

		</tr>
		</thead>
	
	<tbody>
		<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($usuario->name); ?></td>
			<td><?php echo e($usuario->email); ?></td>
			<td><?php echo e($usuario->cidade); ?></td>
			<td><?php echo e($usuario->telefone); ?></td>
			<td>			
			<a class="btn green" href="<?php echo e(route('admin.usuarios.editar',$usuario->id)); ?>" > <i class="material-icons">mode_edit </i></a>

			<a class="btn red"  href="javascript: if(confirm('Vai deletar mesmo!?')){window.location.href = '<?php echo e(route('admin.delet',$usuario->id)); ?>'}"> <i class="material-icons">delete </i></a>

			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</tbody>
</table>

</div>
<div class="row">
	<a class ='btn blue '  class="center " href="<?php echo e(route('admin.usuarios.add')); ?>"><i class="material-icons">perm_identity </i> Novo </a>
</div>
</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
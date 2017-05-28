  <!--Página Acesso Normal-->



<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts._site._slides', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <!--Página Login admin-->

  <nav>
  <div class="nav-wrapper pink darken-2">
  <div class="container">
    <a href="<?php echo e(route('admin.inicio')); ?>" class="brand-logo">Admin</a>
 
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>      
         
        
    </ul>
    <ul class="side-nav" id="mobile-demo">
    <li><a href="<?php echo e(route('admin.inicio')); ?> ">Home</a></li>
      
    </ul>
  </div>
  </div>
  </nav>
  <main>
    <?php echo $__env->yieldContent('content'); ?>
  </main>
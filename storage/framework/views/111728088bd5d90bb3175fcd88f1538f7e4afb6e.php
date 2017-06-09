    <nav>
        <div class="nav-wrapper pink darken-2 ">
            <div class="container">
             <a href="<?php echo e(route('site.home')); ?>" class="brand-logo">Projeto</a>
            

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
            <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mais<i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>
            <ul class="side-nav" id="mobile-demo">
            <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
            <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
            <li><a href="<?php echo e(route('site.cep')); ?>">CEP</a></li>
            <li><a href="<?php echo e(route('admin.login')); ?>"">Login</a></li>


         </ul>
        </div>
        </div>
    </nav>
       <!--Página DropDown-->
      <ul id="dropdown1" class="dropdown-content">
                 <!-- Modal Trigger -->
                <li><a href="#modal1">Login</a></li>
                <li><a href= "<?php echo e(route('site.cep')); ?>">Encontre Seu Cep</a></li>
                <li class="divider"></li>
                
        </ul>



  <!-- Modal Structure -->
  <div id="modal1" class="modal ">
    <div class="modal-content" >
      <h2 class="center ">Acessar</h2>
      <form action="<?php echo e(route('admin.login')); ?>" method="post" >
      <!--Token Laravel, metodo de validação-->
      <?php echo e(csrf_field()); ?>

      <?php echo $__env->make('admin.login._formu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <button class=" modal-action modal-close waves-effect waves-green btn blue ">Entrar</button>
    </form>
    </div>
  </div>

      

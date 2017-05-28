  <!--Página Acesso Normal-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('lib/materialize/dist/css/materialize.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

    <title>TI</title> 
    
</head>
<body id = "app">
    <header>
      <?php echo $__env->make('layouts._site._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <main>
      <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
      <?php echo $__env->make('layouts._site._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </footer>
    <!-- Scripts -->
    <script src="<?php echo e(asset('lib/jquery/dist/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/materialize/dist/js/materialize.js')); ?>"></script>
    <script src="<?php echo e(asset('js/init.js')); ?>"></script>
</body>
</html>

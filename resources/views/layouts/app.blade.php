  <!--Página Login admin-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('lib/materialize/dist/css/materialize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>TI</title>

    
    
</head>
<body id = "app-layout">

   @include('layouts._admin._navadmin')
   <main>
     @if(Session::has('msg'))
     <div  class="container">
       <div class="row">
         <div class="card {{Session::get('msg')['class']}}">
           <div align="center" class="card-content">
            {{Session::get('msg')['msg']}}
           </div>
         </div>
       </div>
     </div>
     @endif
   </main>
   @include('layouts._admin._footeradmin')
   

    <!-- Scripts -->
    <script src="{{ asset('lib/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('lib/materialize/dist/js/materialize.js') }}"></script>
    <script src="{{ asset('js/init.js') }}"></script>
</body>
</html>

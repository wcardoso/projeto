  <!--Página Login admin-->

  <nav>
  <div class="nav-wrapper pink darken-2">
  <div class="container">
    <a href="{{route('admin.inicio')}}" class="brand-logo">Admin</a>
 
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="{{route('site.home')}}">Home</a></li>      
      <li><a href="{{route('admin.modelo')}}">Modelos</a></li>    
         
        
    </ul>
    <ul class="side-nav" id="mobile-demo">
    <li><a href="{{route('admin.inicio')}} ">Home</a></li>
    <li><a href="{{route('admin.modelo')}}">Modelos</a></li>    
      
    </ul>
  </div>
  </div>
  </nav>
  <main>
    @yield('content')
  </main>
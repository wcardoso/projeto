     <!--Página Acesso Normal-->
      <ul id="dropdown1" class="dropdown-content">
                <li><a href="{{route('admin.login')}}"">Login</a></li>
                <li><a href= "{{route('site.cep')}}">Encontre Seu Cep</a></li>
                <li class="divider"></li>
                
        </ul>

    <nav>
        <div class="nav-wrapper pink darken-2 ">
            <div class="container">
             <a href="{{route('site.home')}}" class="brand-logo">Projeto</a>
            

            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
            <li><a href="{{route('site.home')}}">Home</a></li>
            <li><a href="{{route('site.contato')}}">Contato</a></li>
            <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Mais<i class="material-icons right">arrow_drop_down</i></a></li>

            </ul>
            <ul class="side-nav" id="mobile-demo">
            <li><a href="{{route('site.home')}}">Home</a></li>
            <li><a href="{{route('site.contato')}}"">Contato</a></li>

         </ul>
        </div>
        </div>
    </nav>

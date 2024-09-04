<!DOCTYPE html>
<html>

  <head>
    <title>@yield('titulo')</title>
    <!--Import Google Icon Font-->
          <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <!--      <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <nav class="indigo darken-4">

      <a href="#" data-target="slide-out" class="sidenav-trigger">
          <i class="material-icons">menu</i>
      </a>

        <div class="brand-logo light">SMST-SOS TI</div>

        <div class="nav-wrapper container">
            <ul class="right hide-on-med-and-down">
              <li><a href="{{ route('home') }}">Home</a></li>
              @if(Auth::guest())
                <li><a href="{{route('site.login')}}">Login</a></li>
              @else
                <li><a href="{{route('admin.tipos')}}">Tipos</a></li>
                <li><a href="{{route('admin.categorias')}}">Categorias</a></li>
                <li><a href="{{route('admin.setors')}}">Setor</a></li>
                <li><a href="{{route('admin.problemas')}}">Atendimento</a></li>
                <li><b><a href="#" style="color: #4272DB">{{Auth::user()->name}}</a></b></li>
              @endif
            </ul>
            <ul id="slide-out" class="sidenav" >
              <li><a href="{{ route('home') }}">Home</a></li>
                  @if(Auth::guest())
                    <li><a href="{{route('site.login')}}"><i class="material-icons indigo-text">person</i>Login</a></li>
                  @else
                    <li><a href="{{route('admin.tipos')}}"><i class="material-icons indigo-text">text_fields</i>Tipos</a></li>
                    <li><a href="{{route('admin.categorias')}}"><i class="material-icons indigo-text">open_with</i>Categorias</a></li>
                    <li><a href="{{route('admin.setors')}}"><i class="material-icons indigo-text">domain_add</i>Setor</a></li>
                    <li><a href="{{route('admin.problemas')}}"><i class="material-icons indigo-text">directions_run</i>Atendimento</a></li>
                    <li><b><a href="#" style="color: #4272DB">{{Auth::user()->name}}</a></b></li>
                  @endif
            </ul>
        </div>
    </nav>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {Materialize.updateTextFields();})
        $(document).ready(function() {$('.sidenav').sidenav();})
        $(document).ready(function(){$('select').formSelect();});
      </script>

    <!--JavaScript at end of body for optimized loading-->
  <!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> -->

<!DOCTYPE html>

<html lang="pt-BR">
<head>
  <title>@yield('titulo')</title>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <header>
    <nav class="nav-extended">
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Usuários</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li><a href="{{ route('home') }}">Home</a></li>
             @if(Auth::guest())
               <li><a href="{{route('site.login')}}">Login</a></li>
             @else
               <li><b><a href="#" style="color: #4272DB">{{Auth::user()->name}}</a></b></li>
             @endif
        </ul>
      </div>
    </nav>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="{{ route('home') }}">Home</a></li>
         @if(Auth::guest())
           <li><a href="{{route('site.login')}}">Login</a></li>
         @else
           <li><b><a href="#" style="color: #4272DB">{{Auth::user()->name}}</a></b></li>
         @endif
    </ul>
   </header>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {Materialize.updateTextFields();})
        $(document).ready(function() {$('.sidenav').sidenav();})
        $(document).ready(function(){$('select').formSelect();});
      </script>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

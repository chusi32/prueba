@extends('layouts.layout_app')
@section('title', 'DogBook - Portada')


<nav id="degradado" class="navbar navbar-default navbar-fixed-top" role="navigation">


      <div class="container">


        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">


            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">DogBook</a>



        </div>
        <div class="navbar-collapse collapse">


{{--           <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>


            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul> --}}
          <ul class="nav navbar-nav navbar-right">


            <li><a href="#intro">¿Que es DogBook?</a></li>
            <li><a href="http://getbootstrap.com/examples/navbar-static-top/">¿Que ofrecemos?</a></li>
            <li><a href="#bloque2">Registrate</a></li>
            <li class="active"><a href="Entrar">Entrar</a></li>


          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">



      <!-- Main component for a primary marketing message or call to action -->
      {{-- <div class="jumbotron">
        <h1>Navbar example</h1>
        <p>This example is a quick exercise to illustrate how the 
default, static and fixed to top navbar work. It includes the responsive
 CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>To see the difference between static and fixed top navbars, just scroll.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="http://getbootstrap.com/components/#navbar" role="button">View navbar docs »</a>


        </p>
      </div> --}}

    </nav> <!-- /container -->






<div id="intro" data-speed="4" data-type="background">
        <div class="intro-unit">
            <h2 class="introduccion">DogBook<br/>Red Social para gente con mascotas</h2>
        </div>
    </div>
 
    <div id="bloque1" data-speed="2" data-type="background">
        <div class="intro-unit">
            <h2>Bienvenido a <b>DogBook</b>, la red social para <b>gente con mascotas</b></h2>
            <p> En <b>DogBook</b> podrás: </p>
            <br/>
            <ul class="bone">
              <li>Conocer a gente y sus mascotas.</li>
              <li>Buscar la pareja perfecta para tu mascota.</li>
              <li>Hacer un grupo de amigos y disfrutar en compañia.</li>
              <li>Espacio reservado para anuncios clasificados.</li>
              <li>Participar en concursos y ganar estupendos premios.</li>
            </ul>
        </div>
    </div>
 
    <div id="bloque-img2" data-speed="12" data-type="background">
    </div>
 
    <div id="bloque2" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" data-speed="4" data-type="background">
      <div class="container-fluid intro-unit">
        <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h2>Disfruta ya de <b>DogBook</b></h2>
            <p> Registrate ahora siguiendo unos sencillos pasos</p>
            <button class="btn btn-primary">Registrar</button>
        </div>
        <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h2>Entra en <b>DogBook</b></h2>
            <p> Entrar</p>
            <button class="btn btn-primary">Registrar</button>
        </div>
      </div>
        
    </div>
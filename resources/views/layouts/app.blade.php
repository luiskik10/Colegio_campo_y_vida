<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <title>@yield('title')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/portada.css') }}" rel="stylesheet">
  </head>
  <body style="background-image: url(/images/estrellas.gif);">

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark text-white">
        <a class="navbar-brand" href="#">Colegio campo y vida</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desabilidato</a>
            </li>
             <li class="nav-item">
               <a class="nav-link " href="#">Ingresar</a>
             </li>
             <li class="nav-item">
               <a class="nav-link " href="#">Registrar</a>
             </li>
          </ul>  
        </div>
      </nav>
    </header>

 <div class="jumbotron text-center" style="max-height:75vh; background-image:url(/images/estrellas.gif);">
        <!-- portada -->
	     <img src="/images/portada limpia.png"  style=" position: relative; width: 90vw; max-height:70vh; min-height: 30vh;" >   
				<div id="wrapper">
				  <p id="title" contenteditable="true" spellcheck="false"><span>Colegio </span><span>Ecologico </span><span>Particular </span><span>Mixto </span><span>Campo y </span><span>Vida </span></p>
				  <p id="slogan"><span>Haz rodar sobre Jehová tus obras y tus planes seran estrablecidos</span></p>
				</div>
 </div>
    
    <main role="main">
		<!-- contenedor -->      
		<div  style="background-image: url(/images/fondo.jpg); "  class="container marketing"> 
		      </br>

		        @yield('content')
		</div>
		<!-- /fin de contenedor -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Inicio</a></p>
        <p class="text-white">&copy; 2019 Moviemega, Inc. &middot; <a href="#">TODO LOS DERECHOS RESERVADOS</a> &middot; <a href="#">WWW.movie-mega-mp4.COM</a></p>
      </footer>
      <!-- fin FOOTER -->
    
    </main>

  
       <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
       <script src="{{ asset('js/bootstrap.min.js') }}"></script>
       <script src="{{ asset('js/popper.min.js') }}"></script>

  </body>


</html>

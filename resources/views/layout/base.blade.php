<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<title>Carros Now</title>
</head>
<body>
	<nav class="navbar navbar-default  navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
	        <ul class="nav navbar-nav">
		        <li class="nav-item">
		            <a class="nav-link" href="/"><span class="fa fa-home"></span> Home</a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link" href="{{action('CarroController@lista')}}"><span class="fa fa-car"></span> Carros</a>
		        </li>
		        <li class="nav-item">
		            <a class="nav-link" href="{{action('MarcaController@lista')}}"><span class="fa fa-tags"></span> Marcas</a>
		        </li>
	        </ul>
        </div><!--nav-collapse -->
      </div><!--fim container -->
    </nav><!--fim navbar -->

    <div class="container">
    	@yield('conteudo')
    </div>
    
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <footer class="container-fluid text-center">
        <p class="cm">&copy; Ray Everton de Almeida Freitas</p>
    </footer>

</body>
</html>
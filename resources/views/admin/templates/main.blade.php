<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title> @yield('title', 'Default') | Panel de Administracion</title>
	<!-- Versión compilada y comprimida del CSS de Bootstrap -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

</head>
<body>
	
@include('admin.templates.partials.nav')

<div class="container">
	<div class="panel panel-primary">
 
	  <div class="panel-heading">@yield('title', 'Default')</div>
	  
		<div class="panel-body">
	    	@include('flash::message')
	    	@include('admin.templates.partials._errors')
	    	@yield('content')
  		</div>

	</div>



</div> 






	

	<script type="text/javascript" src="{{ asset('plugins/jquery/jquery.js') }}"></script>
	<!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</body>
</html>
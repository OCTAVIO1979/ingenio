@extends('admin.templates.main')

@section('title', 'Agregar una Categoria')

@section('content')
	
	




	{!! Form::open(['route' => ['categories.update', $category], 'method' => 'PUT']) !!}
		
		<div class="form-group">
			<!-- name es el nombre del campo y el segundo es lo que muestra el label -->
			
			{!! Form::label('name', 'Nombre') !!}
			
			<!-- el nombre, el segundo un campo por defecto, lo tengo en nulo, y en el arreglo estan la clase y  el resto de caracteristicas de los input -->
			
			{!! Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Nombre de la categoria', 'requerid']) !!}

		
		</div>

		<!-- este es el boton de registrar -->
		

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>


			
		

	{!! Form::close() !!}
@endsection
@extends('admin.templates.main')

@section('title', 'Crear Usuario')

@section('content')

	
	{!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		
		<div class="form-group">
			<!-- name es el nombre del campo y el segundo es lo que muestra el label -->
			
			{!! Form::label('name', 'Nombre') !!}
			
			<!-- el nombre, el segundo un campo por defecto, lo tengo en nulo, y en el arreglo estan la clase y  el resto de caracteristicas de los input -->
			
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre', 'requerid']) !!}

		
		</div>

		<div class="form-group">
			<!-- name es el nombre del campo y el segundo es lo que muestra el label -->
			
			{!! Form::label('email', 'Correo Electronico') !!}
			
			<!-- el nombre, el segundo un campo por defecto, lo tengo en nulo, y en el arreglo estan la clase y  el resto de caracteristicas de los input -->
			
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com', 'requerid']) !!}
			
		
		</div>

		<div class="form-group">
			<!-- name es el nombre del campo y el segundo es lo que muestra el label -->
			
			{!! Form::label('password', 'Contraseña') !!}
			
			<!-- el nombre, el segundo un campo por defecto, lo tengo en nulo, y en el arreglo estan la clase y  el resto de caracteristicas de los input -->
			
			{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '******', 'requerid']) !!}
			
		</div>

		<div class="form-group">
			<!-- name es el nombre del campo y el segundo es lo que muestra el label -->
			
			{!! Form::label('type', 'Tipo') !!}
			
			<!-- este es un campo select el nombre del campo es type, -->
			
			{!! Form::select('type', ['' => 'Selecione nivel', 'member' => 'Miembro', 'admin' => 'Administrador'],null, ['class' => 'form-control']) !!}
			
		
		</div>

		<!-- este es el boton de registrar -->
		

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>


			
		

	{!! Form::close() !!}
@endsection
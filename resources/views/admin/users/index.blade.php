@extends('admin.templates.main')

@section('title', 'Lista de usuarios')

@section('content')
	<!-- en esta tabla vamos a mostrar todos los usuarios que estan en la base de datos -->
	<a href="{{route('users.create')}}"	class="btn btn-info">Nuevo Usuario</a>
	
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>

			
		<tbody>
			
			<!-- este ciclo es el que llena la tabla -->
		
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type == "admin")
							<span class="label label-success"> {{ $user->type }} </span>
						@else
							<span class="label label-warning">{{ $user->type }} </span>
						@endif
						

					</td>
					<td>
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning">
							<span class="glyphicon glyphicon-wrench"></span>

						</a> 
						<a href="{{ route('admin.users.destroy', $user->id)  }}" onclick="return confirm('seguro deseas eliminar?')" class="btn btn-danger ">
							<span class="glyphicon glyphicon-remove-circle "></span>

						</a></td>
				</tr>
			@endforeach
	

		</tbody>
	</table>

	{!! $users->render() !!}
		

@endsection
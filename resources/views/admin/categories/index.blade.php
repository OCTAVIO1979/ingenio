@extends('admin.templates.main')

@section('title', 'Agregar una Categoria')

@section('content')
	<a href="{{ route('categories.create')}}" class="btn btn-info">Nueva Categoria</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>

		<tbody>
			@foreach($categories as $category)
				<tr>
					<td> {{ $category->id }} </td>
					<td> {{ $category->name }} </td>
					<td>
						<a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning ">
							<span class="glyphicon glyphicon-wrench "></span>

						</a>
							
						<a href="{{route('admin.categories.destroy', $category->id)}}" onclick="return confirm('seguro deseas eliminar?')" class="btn btn-danger ">
							<span class="glyphicon glyphicon-remove-circle "></span>

						</a>
							




					</td>

				</tr>

			@endforeach
		</tbody>
	</table>
@endsection
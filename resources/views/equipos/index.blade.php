@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<h2>
			Listado de Equipos
			<a href="{{ route('equipos.create') }}" class="btn btn-primary float-right">Nuevo</a>
		</h2>
		<table class="table">
			<thead>
				<tr>
					<th width="1000px">Nombre</th>
					<th colspan="2">Acción</th>
				</tr>
			</thead>
			<tbody>
				@foreach($equipos as $equipo)
					<tr>
						<td>{{ $equipo->nombre }}</td>
						<td><a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-link">Editar</a></td>
						<td>
							<form action="{{ route('equipos.destroy', $equipo->id) }}" method="post">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="delete">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{ $equipos->links('pagination::bootstrap-4') }}
	</div>
</div>
@endsection

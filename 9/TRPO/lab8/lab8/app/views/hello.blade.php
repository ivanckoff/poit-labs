@extends('layouts.scaffold')

@section('main')

<div class="search">
	{{ Form::model(null, array('route' => array('home.search'))) }}
	{{ Form::text('query', null, array( 'placeholder' => 'Search query...' )) }}
	{{ Form::submit('Search', array('class' => 'btn btn-info')) }}
	{{ Form::close() }}
</div>

<h2>{{{ $title }}}</h2>

@if ($seances->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>Count</th>
				<th>Datetime</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($seances as $seance)
				<tr>
					<td>{{ link_to_route('seances.show', $seance->name, array($seance->id), array('class' => '')) }}</td>
					<td>{{{ $seance->description }}}</td>
					<td>{{{ $seance->count }}}</td>
					<td>{{{ $seance->datetime }}}</td>
                    <td>{{ link_to_route('seances.edit', 'Edit', array($seance->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('seances.destroy', $seance->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no seances
@endif

@stop

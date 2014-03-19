@extends('layouts.base')

@section('body')

<h1>Editar Item</h1>

{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
	@include('items.partials._form')
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop

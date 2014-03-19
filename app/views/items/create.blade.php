@extends('layouts.base')

@section('body')

<h1>Novo Item</h1>

{{ Form::open(array('route' => 'items.store')) }}
	@include('items.partials._form')
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop



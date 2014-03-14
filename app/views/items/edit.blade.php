@extends('layouts.master')

@section('main')

<h1>Edit Item</h1>

{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
	@include('items.partials._form')
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop

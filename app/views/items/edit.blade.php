@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="`{{ asset('css/items.css') }}">
@stop

@section('body')

	{{ Form::model($item, array('method' => 'PATCH', 'route' => array('items.update', $item->id))) }}
		@include('items.partials._form')
	{{ Form::close() }}

	@if ($errors->any())
		<ul>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</ul>
	@endif
@stop

@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ url('css/items.css') }}">
@stop

@section('body')

<h1 class="text-center">Itens</h1>

<div class="row">

	<div class="col-md-2"></div>

	<div class="col-xs-12 col-md-8">

		@include('items.partials._list')

	</div>

	<div class="col-md-2">
		
		@include('items.partials._new-item')
		@include('items.partials._new-place')

	</div>

</div>

@stop
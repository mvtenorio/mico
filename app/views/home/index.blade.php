@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ url('css/items.css') }}">
@stop

@section('body')

<div class="row top">

	<div class="col-md-6 col-md-offset-3">			
		<h3>Itens mais recentes</h3>
	</div>

</div>

<div class="row">

	<div class="col-xs-12 col-md-3"></div>

	<div class="col-xs-12 col-md-6">

		@include('items.partials._list', array('message' => 'Você ainda não cadastrou nenhum item'))

	</div>

	<div class="col-xs-12 col-md-3">

		@include('items.partials._new-item')
		@include('items.partials._new-place')

	</div>

</div>

@stop
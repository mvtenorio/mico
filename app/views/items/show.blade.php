@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/items.css') }}">
@stop

@section('body')

	<!-- @include('items.partials._breadcrumb') -->

	<div class="row top">

		<div class="col-md-6 col-md-offset-3">
			<a href="{{ route('items.index') }}" class="pull-right">Voltar</a>
		</div>

	</div>

	<div class="row">

		<div class="col-xs-12 col-md-3">
			<div class="thumbnail-sm">
				<img src="{{ asset('img/sample/box.png') }}" alt="{{ $parent->name }}" class="img-responsive">
			</div>
			<p><strong>{{ $parent->name }}</strong></p>
			<p><small>{{ str_limit($parent->description, $limit = 150, $end = link_to('/', ' Ver Mais')) }}</small></p>
			<p><a href="{{ route('items.edit', $parent->id) }}" class="btn btn-sm btn-default">Editar</a></p>
		</div>

		<div class="col-xs-12 col-md-6">

			@include('items.partials._list', array('message' => 'Nenhum item aqui'))

		</div>

		<div class="col-xs-12 col-md-3">

			@include('items.partials._new-item', array('parentId' => $parent->id))
			@include('items.partials._new-place', array('parentId' => $parent->id))

		</div>

	</div>

@stop
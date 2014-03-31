@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ asset('css/items.css') }}">
@stop

@section('body')

	@include('items.partials._breadcrumb', array('item' => $item))

	<div class="row">

		<div class="col-xs-12 col-md-3"></div>

		<div class="col-xs-12 col-md-6">

			<div class="row">
				<div class="col-xs-4 col-sm-3">
					<p>
						<img class="thumbnail thumbnail-sm img-responsive img-center" src="{{ image($item, 100, 100) }}" alt="{{ $item->name }}" />
					</p>
				</div>
				<div class="col-xs-8 col-sm-9">
					<p>
						<strong>{{{ $item->name }}}</strong>
						<a href="{{ route('items.edit', $item->id) }}" class="pull-right">Editar</a>
					</p>
					<p><small>{{{ $item->description }}}</small></p>
				</div>
			</div>

			@include('items.partials._list', array('message' => 'Este item está vazio.'))

		</div>

		<div class="col-xs-12 col-md-3">

			@include('items.partials._new-item', array('parentId' => $item->id))

			@if($item->isPlace())
				@include('items.partials._new-place', array('parentId' => $item->id))
			@endif

		</div>

	</div>

@stop
@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ url('css/items.css') }}">
@stop

@section('body')

@include('items.partials._breadcrumb')

<div class="row">

	<div class="col-md-3"></div>

	<div class="col-md-6">

		@include('items.partials._list')

	</div>

	<div class="col-md-3"></div>

</div>

@stop
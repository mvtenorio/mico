@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ url('css/items.css') }}">
@stop

@section('body')

<div class="container">
<div class="row">

	<div class="col-md-3">

		Left

	</div>

	<div class="col-md-6">

		@include('items.partials._list')

	</div>

	<div class="col-md-3">

		Right

	</div>
</div>
</div>

<div class="clearfix"></div>

@stop
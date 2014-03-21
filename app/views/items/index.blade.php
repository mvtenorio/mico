@extends('layouts.base')

@section('css')
	<link rel="stylesheet" href="{{ url('css/items.css') }}">
@stop

@section('body')

<p>{{ link_to_route('items.create', 'Novo item') }}</p>

@if ($items->count())
	<div>
		@foreach (array_chunk($items->all(), 3) as $row)
			<div class="row">
				@foreach ($row as $item)
					<article class="col-md-4  col-xs-6 item">
						<a href="{{ route('items.edit', $item->id) }}"><h2 class="text-center">{{ $item->name }}</h2></a>
						<div class="body"> <img width="200" src="http://media.npr.org/assets/img/2012/01/04/ap99121501386_custom-feedbb6efa738efee47e7828e805758dc427fa60-s6-c30.jpg" alt="{{ $item->name }}"></div>
					</article>
				@endforeach		
			</div>
		@endforeach
	</div>
@else
	Você ainda não cadastrou nenhum item =/
@endif

@stop
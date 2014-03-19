@extends('layouts.base')

@section('body')

<ol class="breadcrumb">
  <li><a href="{{ url('/') }}">Home</a></li>
  <li class="active">Itens</li>
</ol>

<p>{{ link_to_route('items.create', 'Novo item') }}</p>

@if ($items->count())
	<div>
		@foreach (array_chunk($items->all(), 3) as $row)
			<div class="row">
				@foreach ($row as $item)
					<article class="col-md-4">
						<a href="{{ route('items.edit', $item->id) }}"><h2>{{ $item->name }}</h2></a>
						<div class="body">{{ $item->description }}</div>
					</article>
				@endforeach		
			</div>
		@endforeach
	</div>
@else
	Você ainda não cadastrou nenhum item =/
@endif

@stop

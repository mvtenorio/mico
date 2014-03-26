<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ol class="breadcrumb">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li class="active">Itens</li>
			</ol>		
		</div>
	</div>
</div>

@if ($items->count())
	<div class="container">
		@foreach (array_chunk($items->all(), 3) as $row)
			<div class="row">
				@foreach ($row as $item)
					<article class="col-sm-12 col-xs-12 col-md-4 col-md-4 item">
						<h3 class="text-center">{{ $item->name }}</h3>
						<div class="thumbnail">
							<div class="pull-right">
								{{ Form::open(array('route' => array('items.destroy', $item->id), 'method' => 'DELETE')) }}
									<a href="{{ route('items.edit', $item->id) }}"><i class="fa fa-edit icon"></i></a>
									<button type="submit" class="delete"><i class="fa fa-times-circle icon"></i></button>
								{{ Form::close() }}
							</div>

							<a href="{{ route('items.edit', $item->id) }}" class="darken">
								<img width="200" src="http://media.npr.org/assets/img/2012/01/04/ap99121501386_custom-feedbb6efa738efee47e7828e805758dc427fa60-s6-c30.jpg" alt="{{ $item->name }}">
							</a>
						</div>
					</article>
				@endforeach
			</div>
		@endforeach
	</div>
@else
	Você ainda não cadastrou nenhum item =/
@endif

<div class="clearfix"></div>
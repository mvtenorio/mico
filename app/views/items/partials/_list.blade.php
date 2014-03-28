@if ($items->count())
	<div class="row">
		@foreach ($items as $item)	
			<article class="col-xs-6 col-md-4 item">
				<div class="thumbnail">
					<a href="{{ route('items.edit', $item->id) }}" class="darken">
						<img width="200" src="{{ $item->isObject() ? asset('img/sample/rocket.png') : asset('img/sample/box.png') }}" alt="{{ $item->name }}" class="img-responsive">
					</a>
					<div class="caption">
						<h4 class="text-center">{{ str_limit($item->name, $limit = 10, $end = '...') }}</h4>
						<div class="pull-right">
							{{ Form::open(array('route' => array('items.destroy', $item->id), 'method' => 'DELETE')) }}
								<a href="{{ route('items.edit', $item->id) }}"><i class="fa fa-edit fa-lg icon"></i></a>
								<button type="submit" class="delete btn-link"><i class="fa fa-times-circle fa-lg icon"></i></button>
							{{ Form::close() }}
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</article>
		@endforeach
	</div>
@else
	<p>Você ainda não cadastrou nenhum item =/</p>
@endif

<div class="clearfix"></div>
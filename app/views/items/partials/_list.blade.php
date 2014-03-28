@if ($items->count())
	<div class="row">
		@foreach ($items as $item)	
			<article class="col-xs-6 col-md-4 item">
				<div class="thumbnail">
					<a href="{{ route('items.show', $item->id) }}" class="darken">
						<img width="200" src="{{ $item->isObject() ? asset('img/sample/rocket.png') : asset('img/sample/box.png') }}" alt="{{ $item->name }}" class="img-responsive img-rounded">
					</a>
					<div class="caption">
						<p class="text-center">{{ str_limit($item->name, $limit = 10, $end = '...') }}</p>
						<div class="text-right">
							{{ Form::open(array('route' => array('items.destroy', $item->id), 'method' => 'DELETE')) }}
								<div class="btn-group">
									<a href="{{ route('items.edit', $item->id) }}" class="btn btn-xs btn-default">
										<i class="fa fa-edit fa-lg icon"></i>
									</a>
									<button type="submit" class="btn btn-xs btn-danger">
										<i class="fa fa-times-circle fa-lg icon"></i>
									</button>
								</div>
							{{ Form::close() }}
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</article>
		@endforeach
	</div>
@else
	<p class="text-center">{{ $message }}</p>
@endif
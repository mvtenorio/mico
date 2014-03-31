<div class="list well">
@if ($items->count())
	<div class="row">
		@foreach ($items as $item)	
			<article class="col-xs-6 col-sm-4 col-centered item">
				<div class="form-group">			
					<a href="{{ route('items.show', $item->id) }}" class="darken">
						<img src="{{ image($item) }}" alt="{{ $item->name }}" class="img-responsive img-rounded img-center">
					</a>
					<p class="text-center text-info">{{{ str_limit($item->name, $limit = 15, $end = '...') }}}</p>
					<div class="text-center">
						{{ Form::open(array('route' => array('items.destroy', $item->id), 'method' => 'DELETE')) }}
							<p class="btn-group">
								<a href="{{ route('items.edit', $item->id) }}" class="btn btn-default" title="Editar">
									<i class="fa fa-edit"></i>
								</a>
								<button type="submit" class="btn btn-default" title="Excluir">
									<i class="fa fa-times"></i>
								</button>
							</p>
						{{ Form::close() }}
					</div>
				</div>
			</article>
		@endforeach
	</div>
@else
	<p class="text-center text-info">{{ $message }}</p>
@endif
</div>
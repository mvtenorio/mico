@extends('layouts.base')

@section('body')

<h1>Tags</h1>

<div class="row">
	@if ($tags->count())
			
			@foreach ($tags as $index => $tag)
				<ul class="nav nav-pills nav-stacked tag-list">
					<li class="col-md-4">
						<a href="#" style="background-color: rgb(44, 62, 80); color: rgb(255, 255, 255);">
							<span class="badge pull-right">0</span>
							{{{ $tag->name }}}
						</a>
					</li>
				</ul>
			@endforeach
			
	@else
		
		<ul class="nav nav-pills nav-stacked tag-list">
				<li class="col-md-12">
					<a href="#" style="background-color: rgb(44, 62, 80); color: rgb(255, 255, 255);">
						Você ainda não cadastrou nenhuma tag =/
					</a>
				</li>
		</ul>

	@endif
</div>

@stop

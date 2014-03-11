@extends('layouts.base')

@section('body')
	@if(isset($message))
		<p>{{{ $message }}}</p>
	@else
		<p>Você não tem permissão para realizar esta ação.</p>
	@endif
	<hr>
	<a href="{{ Request::header('referer') }}" class="btn btn-default">Voltar</a>
@stop